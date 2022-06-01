<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DynamicDropdownController extends Controller
{
    public function index()
    {
        return view('dynamic-dropdown.index');
    }
}
