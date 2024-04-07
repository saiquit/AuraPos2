<?php

namespace App\View\Components\Pages\ListItems;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class ListCover extends Component
{
    /**
     * Create a new component instance.
     */
    public $item;
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd(class_basename($this->item));
        $view = 'components.pages.list-items.' . Str::lower(class_basename($this->item)) . '-item';
        if (!view()->exists($view)) {
            $view = 'components.pages.list-items.default-item';
        }
        return view($view, [Str::lower(class_basename($this->item)) => $this->item]);
    }
}
