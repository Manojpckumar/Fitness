<?php

namespace App\Http\Controllers;
use Request;
use App\Category;
use App\User;
use App\Post;
use Session, DB;
use Auth;
use Validator; 

class SearchController extends Controller
{

    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {   
            // Gets the query string from our form submission 
            $search = \Request::get('search');
            // Searches for Fitness //
            $Fitness = Post::where('Title_en', 'LIKE', '%' . $search . '%')->paginate(12);
            if(count($Fitness) > 0){
             return view('Pages.search',compact('Fitness','search'));
            }else{
              return redirect()->back();
            }
            
    } 
}

