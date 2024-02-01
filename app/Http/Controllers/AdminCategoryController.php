<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }
}
