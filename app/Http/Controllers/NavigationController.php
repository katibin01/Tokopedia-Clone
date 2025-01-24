<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function main()
    {
        $title = 'Main';
        return view('navigation.asset-content.main', compact('title'));
    }

    public function content()
    {
        $title = 'Main';
        return view('navigation.asset-content.main', compact('title'));

    }

}
