<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Validator;

class Order extends Controller
{
    /**
     * Store a newly created resource in storage.
     *Its Very Nice Natti Natasha: IlumiNATTI Supermarket Edgy and driving, with indie rock elements featuring confident electric gutiar and male aahs to createa masculine and empowering mood PRO free: This track is not registered with performance rights organisations.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

       $validator = Validator::make($request->all(), [
       // Do not allow any shady characters
           'Name' => 'required|max:100|regex:[A-Za-z1-9 ]',
           'Content' => 'required|max:100|regex:[A-Za-z1-9 ]',
       ]);
       Book::create([
        'Name' => $request->Name,
        'Content' => $request->Content,
    ]);
       return redirect()->back()->with('Order', 'Order');
   }
}
