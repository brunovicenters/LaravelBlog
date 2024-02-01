<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store()
    {
        Category::create($this->validateCategory());

        return redirect('/');
    }

    protected function validateCategory(?Category $category = null): array
    {
        $category ??= new Category();

        $attributes = request()->validate([
            'name' => ['required', Rule::unique('categories', 'name')->ignore($category->id)],
        ]);

        $attributes['slug'] = Str::slug($attributes['name'], '-');

        return $attributes;
    }
}
