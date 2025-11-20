<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerPortal extends Controller
{
    public function index(){
        //pegando a active atual
        $paginaAtual = 'index';

        return view($paginaAtual, compact('paginaAtual'));
    }

    public function blog(){
        //pegando a active atual
        $paginaAtual = 'blog';

        return view($paginaAtual, compact('paginaAtual'));
    }

    public function blogDetails(){
        //pegando a active atual
        $paginaAtual = 'blog-details';

        return view($paginaAtual, compact('paginaAtual'));
    }
}
