<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $main_categories = Category::where('parent_id',null)->get();
        return view('categories', compact('main_categories'));
    }
    public function ran(){
        $main_categories = Category::where('parent_id',null)->get();
        return view('index', compact('main_categories'));
    }
    public function GetSubCat($id){



        echo json_encode(Category::where('parent_id',$id)->get());
    }
    //
}
