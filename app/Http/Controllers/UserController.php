<?php
/**
 * Created by PhpStorm.
 * User: vivasalute
 * Date: 22/03/16
 * Time: 13:43
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class UserController extends Controller {

    protected $user = null;

    public function __construct(User $user_){
        $this->user = $user_;
    }

    public function allUsers(){
        $users = $this->user->allUsers();
        return $users ? Response::json($users, 200) : Response::json(['response' => "Nenhum usuário encontrado"], 404);
    }

    public function getUser($id){
        $user = $this->user->getUser($id);
        return $user ? Response::json($user, 200) : Response::json(['response' => "Usuário não encontrado"], 404);
    }

    public function saveUser(){
        if ($this->user->getUserByEmail(Input::only('email')['email']) === false) {
            $user = $this->user->saveUser();
            return $user ? Response::json($user, 201) : Response::json(['response' => 'usuário não foi criado'], 404);
        }

        return Response::json(['response' => 'E-mail já cadastrado'], 501);
    }

    public function updateUser($id){
        $user = $this->user->updateUser($id);
        return $user ? Response::json($user, 200) : Response::json(['response' => "Usuário não encontrado"], 404);
    }

    public function deleteUser($id){
        $user = $this->user->deleteUser($id);
        return $user ? Response::json(['response' => "Usuário removido com sucesso"], 200) : Response::json(['response' => "Usuário não encontrado"], 404);
    }

}