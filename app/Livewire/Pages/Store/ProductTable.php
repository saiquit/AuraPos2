<?php

namespace App\Livewire\Pages\Store;

use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;
    public $store;
    public $search;

    public function mount($store)
    {
        $this->store = $store;
    }
    public function render()
    {
        $products = $this->store->products()->when(
            $this->search,
            function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')->orWhere('sku', 'like', '%' . $this->search . '%')->orWhere('slug', 'like', '%' . $this->search . '%');
            }
        )->paginate(10);
        return view('livewire.pages.store.product-table', ['products' => $products]);
    }
}
