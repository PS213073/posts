<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::when(request('category_id'), function($query){
            $query->where('category_id', request('category_id'));
        })
        ->latest()->get();

        return view('dashboard', compact('categories', 'posts'));
    }
}
