<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        return view('index', ['']);
    }

    public function about()
    {
       
        return view('about');
    }

    public function faqs()
    {
       
        return view('faqs');
    }

    public function contact()
    {
       
        return view('contact');
    }
    
    
    
}
