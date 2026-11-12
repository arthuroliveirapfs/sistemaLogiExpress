<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $entregas = [
            ['destinatario' => 'João', 'cidade' => 'Cubatao'],
            ['destinatario' => 'Maria', 'cidade' => 'Taubate'],
            ['destinatario' => 'Pedro', 'cidade' => 'Uberlandia'],
            ['destinatario' => 'Ana', 'cidade' => 'Sao Paulo']
        ];

        return view('entregas', compact('entregas'));
    }
}
