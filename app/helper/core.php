<?php

use Illuminate\Support\Facades\Auth;

/**
 * Habilitar funções de administrador, porém vc pode querer habilitar se estsiver logado ou não
 * @param $pagina = enviar a variavel $paginaAtual
 * @param $logado = false para nao validar, true caso queira validar
 * @return true ou false
 *
 */

function administrador($pagina, $logado = false)
{
    $admin = false;

    if ($pagina == 'blogAdm' || $pagina == 'admin' || $pagina == 'blogDetailsAdmin') {

        $admin = true;

        if ($logado == true) {
            if (!Auth::check()) {
                $admin = false;
            }
        }
    }

    return $admin;
}
