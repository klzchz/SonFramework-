<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\User;

class UsersController extends Controller {

public $user;
// public function __construct(User $user)
// {
//     $this->user = $user;
// }

   
public function index()
{
    $this->model;
    $this->render(['nome'=>'Lucas']);
 
}

public function create()
{
    return  'Pagina de Cadastro';
}


}