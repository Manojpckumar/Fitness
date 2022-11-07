<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\Post;
use App\Category;
use Auth;
use File;
use Validator;
use App\Instagram;

class Categorys extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    
    public function show($slug)
    {
        //To Get All Category 
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        //To Get All FitnesGrids
        $FitnesGrids = Post::where('category_id','=', $Category->id)->where('featured', '!=', 'on')->simplepaginate(6);
        //To Get All view
        return view('Pages.Cat.show',compact('FitnesGrids','Category'));
       
    }
}