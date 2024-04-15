<?php

namespace App\Http\Controllers;

use Pagination;
use App\Models\homeBlog;
use App\Models\homepage;
use App\Models\homevideo;
use Illuminate\Http\Request;

class viewsController extends Controller
{
      // home
      public function Home()
      {
        $showHomePageContent = homepage::latest()->first();
        // $homevideo=homevideo::paginate(4);
        // $homeBlog=homeBlog::paginate(4);
        $homeBlog=homeBlog::orderBy('views','desc')->limit(8)->get();
        // $homevideo=homevideo::orderBy('views','desc')->limit(8)->get();
        $homevideo=homevideo::latest()->limit(4)->get();
        
        return view('index', compact('showHomePageContent','homeBlog','homevideo'));
      }
  
  
     
  
  // ntnStatus start
  public function ntnStatus(){
      return view('status.ntnstatus');
  }
  
  
  
  // atlStatus start
  public function atlStatus(){
      return view('status.atlstatus');
  }
  
  
  // faqStatus start
  public function faqStatus(){
      return view('status.faqstatus');
  }
      
  
  // contactStatus start
  public function contactStatus(){
      return view('status.contactstatus');
  }
  
  
  }