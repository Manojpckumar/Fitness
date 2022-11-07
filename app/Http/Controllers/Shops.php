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


class Shops extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Shops =  Instagram::simplepaginate(10);
        //To Get Change The Language
        return view('Pages.Shops.index',compact('Shops'));
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
        $Shop = Instagram::where('slug', '=', $slug)->firstOrFail();
        //To Get Comments 
        $Comments = $Shop->Comments; 
        //To Get All Instagrams
        $Instagrams  =  Instagram::all();
        //To Get All Categories
        $Categories  =  Category::all();
        //To Get All Client
        $Clients  =  Client::all();
        // To Get Change The Language
        return view('Pages.Shops.show',compact('Shop','Comments','Instagrams','Clients','Categories'));
    }
}
