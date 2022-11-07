<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\ImageUpload;
use App\User; 
use App\Category;
use App\Instagram;
use App\Gallery;
use App\Post;
use Auth;
use File;
use Validator; 
use App\Client;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
    	$Categories =  Category::all();
        $Fitness =  Post::where('featured', '=', 'on')->simplepaginate(4);
        $Coaches =  Gallery::paginate(4);
        $FitnesGrids =  Post::where('featured', '!=', 'on')->simplepaginate(6);
        return view('Pages/home',compact('Fitness','Categories','FitnesGrids','Coaches'));
    }

    /**
     * Show the application About.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function About()
    {
        $Coaches =  Gallery::paginate(4);
        $Blogs =  Client::paginate(4);
        return view('Pages/About',compact('Coaches','Blogs'));
    }

    /**
     * Show the application Contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function Contacts()
    {
        return view('Pages/Contact');
    }

}
