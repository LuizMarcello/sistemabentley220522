<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class DynamicDropdownController extends Controller
{
    public function index()
    {
        return view('dynamic-dropdown.index');
    }
}
