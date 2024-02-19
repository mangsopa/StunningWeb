<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\View;
use Illuminate\View\Component;
use App\Models\MenuGroup;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        // return view('layouts.admin');

        $menus = MenuGroup::query()
        ->with('items', function ($query) {
            return $query->where('status', true)->orderBy('posision');
        })
        ->where('status', true)
        ->orderBy('posision')
        ->get();
    return view('components.dashboard.sidebar', compact('menus'));
    }
}
