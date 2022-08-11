<?php

namespace App\Http\Controllers;
use App\Models\Listings;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function search($heading){
        return view ('pages.search', [
            $heading => Listings::class, 'all'
        ]);
    }
}
