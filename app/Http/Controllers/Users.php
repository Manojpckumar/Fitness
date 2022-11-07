<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Favourite;
use Auth;

class Users extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // This query to get User page //
        $User = User::where('name', '=', $name)->firstOrFail();
        if ($User->id != Auth::id()) {
         return redirect()->back();
        }else{
        // This query to get User page //
        $User = User::where('name', '=', $name)->firstOrFail();
        //To Get Favourites 
        $Favourites = $User->Favourites;
        return view('Pages.Users.show',compact('User','Favourites'));
        }
        
    }
}
