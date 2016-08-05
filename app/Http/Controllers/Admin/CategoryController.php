<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function postAddCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255'
        ]);
        $category = new Category();
        $category->name = $request['name'];
        $message = '';
        if ($category->save()) {
            $message = '分类添加完成';
        }
        return redirect()->route('admin.gotocategory')->with(['message' => $message]);
    }
}
