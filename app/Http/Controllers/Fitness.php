<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User; 
use App\Category;
use App\Comment;
use Auth;
use App\Instagram;
use App\Client;


class Fitness extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $FitnesGrids =  Post::where('featured', '!=', 'on')->simplepaginate(10);
        //To Get Change The Language
        return view('Pages.Fitness.index',compact('FitnesGrids'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        // This query to get Fitnes page //
        $Fitnes = Post::where('slug', '=', $slug)->firstOrFail();
        //To Get Comments 
        $Comments = $Fitnes->Comments; 
        //To Get All Category
        $Categories  =  Category::all();
        // To Get Change The Language
        return view('Pages.Fitness.show',compact('Fitnes','Comments','Categories'));
    }
}
