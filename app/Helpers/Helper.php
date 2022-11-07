<?php
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Post;
use App\Message;
use App\AdSense;
use App\Instagram;
use App\Menu;
use App\menu_item;   
use App\Category; 
use App\Client;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Blogs()
    {

        $Blogs = Client::simplePaginate(3);
        return $Blogs;
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Users()
    {

        $Users = User::all();
        return $Users;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function AdSenses()
    {

        $AdSenses = AdSense::all();
        return $AdSenses;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Posts()
    {

        $Posts = Post::all();
        return $Posts;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function roles()
    {

        $roles = Role::all();
        return $roles;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Messages()
    {

        $Messages = Message::simplePaginate(6);
        return $Messages;
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Instagrams()
    {

        $Instagrams = Instagram::all();
        return $Instagrams;
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Categories()
    {

        $Categories = Category::simplePaginate(15);
        return $Categories;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function dropdowns()
    {

        $dropdowns = Category::simplePaginate(7);
        return $dropdowns;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Trendings()
    {

        $Trendings = Category::latest()->paginate(3);
        return $Trendings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Exclusive_Trendings()
    {

        $Exclusive_Trendings = Category::skip(3)->paginate(3);
        return $Exclusive_Trendings;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Exclusive_librarys()
    {

        $Exclusive_librarys = Category::skip(1)->simplePaginate(3);
        return $Exclusive_librarys;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    **/
    function Menus()
    {
        $Menus = menu_item::where('menu_id', '=', 1)->get();
        return $Menus;
    }

