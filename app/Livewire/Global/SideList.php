<?php

namespace App\Livewire\Global;

use Livewire\Component;

class SideList extends Component
{
    public $title;
    public $model;
    public $query = '';
    public $page = 1;
    public $perPage = 9;

    public function render()
    {
        $items = $this->model::when($this->query, function ($query) {
            $query->where('name', 'like', '%' . $this->query . '%');
        })
            ->latest()
            ->skip(($this->page - 1) * $this->perPage)
            ->take($this->perPage)
            ->get();

        $total = $this->model::count();
        $lastPage = ceil($total / $this->perPage);
        return view('livewire.global.side-list', [
            'items' => $items,
            'total' => $total,
            'lastPage' => $lastPage
        ])->with('page', $this->page);
    }

    public function increasePage()
    {
        $this->page++;
    }
    public function decreasePage()
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }
}
