<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User; 
use App\Category;
use App\Comment;
use Auth;
use App\Gallery;
use App\Client;


class OurTeams extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Coaches =  Gallery::simplepaginate(10);
        //To Get Change The Language
        return view('Pages.OurTeams.index',compact('Coaches'));
    }

}
