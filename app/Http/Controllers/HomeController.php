<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    
      public function index()
      {
  
          $products=Product::paginate(10);
          return view('pages.home',compact('products'));
      }
  
      public function about()
      {
          return view('pages.about');
      }
      public function support()
      {
          return view('pages.support');
      }
   
}
