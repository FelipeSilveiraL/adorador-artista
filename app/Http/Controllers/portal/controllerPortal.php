<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\portal\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class controllerPortal extends Controller
{
    //PORTAL

    public function index()
    {
        //pegando a active atual
        $paginaAtual = 'index';

        return view($paginaAtual, compact('paginaAtual'));
    }

    public function blog()
    {
        //pegando a active atual
        $paginaAtual = 'blog';
        $dadosPesquisa = null;

        return view($paginaAtual, compact('paginaAtual', 'dadosPesquisa'));
    }


    public function blogDetails()
    {
        //pegando a active atual
        $paginaAtual = 'blog-details';
        $dadosPesquisa = null;

        return view($paginaAtual, compact('paginaAtual', 'dadosPesquisa'));
    }

    public function pesquisar(Request $pesquisar)
    {
        //pegando a active atual
        $paginaAtual = 'blog';

        //pesquisar
        $dadosPesquisa = $pesquisar->pesquisar;

        return view($paginaAtual, compact('paginaAtual', 'dadosPesquisa'));
    }

    //ADMIN
    public function blogAdm()
    {
        //pegando a active atual
        $paginaAtual = 'blogAdm';
        $dadosPesquisa = null;

        return view('blog', compact('paginaAtual', 'dadosPesquisa'));
    }

    public function blogDetailsAdmin()
    {
        //pegando a active atual
        $paginaAtual = 'blogDetailsAdmin';
        $dadosPesquisa = null;

        return view('blog-details', compact('paginaAtual', 'dadosPesquisa'));
    }

    public function admin()
    {
        //pegando a active atual
        $paginaAtual = 'admin';

        return view('index', compact('paginaAtual'));
    }

    // LOGIN
    public function login(Request $formLogin)
    {
        // ---------------------------------------
        // CRIAR CONTA
        // ---------------------------------------
        if ($formLogin->criarConta) {

            $salvarDados = new user();

            $salvarDados->username    = $formLogin->user;
            $salvarDados->password    = Hash::make($formLogin->password);
            $salvarDados->name        = explode('@', $formLogin->user)[0];
            $salvarDados->active      = 0;
            $salvarDados->user_create = null;
            $salvarDados->date_create = date('Y-m-d H:i:s');

            $salvarDados->save();

            return back()->with('success', 'Conta criada com sucesso!');
        }

        // ---------------------------------------
        // LOGIN
        // ---------------------------------------

        // Buscar usuário
        $user = user::where('username', $formLogin->user)->first();

        if (!$user) {
            return back()->withErrors(['user' => 'Usuário não encontrado']);
        }

        // Validar senha
        if (!Hash::check($formLogin->password, $user->password)) {
            return back()->withErrors(['password' => 'Senha incorreta']);
        }

        // Logar com Auth
        Auth::login($user);

        // Redirecionar para página protegida
        return redirect(url()->previous());
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url()->previous());
    }
}
