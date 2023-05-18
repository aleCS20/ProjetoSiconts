<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    //função para chamada da página home do sistema
    public function home(){
        return view('site.home');
    }
}
