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

class Blogs extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Blogs =  Client::simplepaginate(10);
        //To Get Change The Language
        return view('Pages.Blogs.index',compact('Blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
       // This query to get Shops page //
        $Blog = Client::where('slug', '=', $slug)->firstOrFail();
        //To Get Comments 
        $Comments = $Blog->Comments; 
        //To Get All Instagrams
        $Instagrams  =  Instagram::all();
        //To Get All Categories
        $Categories  =  Category::all();
        //To Get All Client
        $Clients  =  Client::all();
        // To Get Change The Language
        return view('Pages.Blogs.show',compact('Blog','Comments','Instagrams','Clients','Categories'));
    }
}
