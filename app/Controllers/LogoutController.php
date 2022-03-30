<?php

namespace App\Controllers;
use App\Models\AlunoModel;
use App\Libraries\Hash;



use CodeIgniter\Validation\Validation;

class LogoutController extends BaseController
{
    public function index()
    {
       if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            //return redirect()->to('/auth?access=out')->with('fail',     'Usuário desconectado!');
            return redirect()->to('/');

        }
    }

   
}

