<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class User extends Model {

    protected $hidden = ['password'];
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'cidade', 'uf'];

    public function allUsers(){
        return self::all();
    }

    public function saveUser(){
        $input = Input::all();
        $input['password'] = Hash::make($input['password']);
        $user = new User();
        $user->fill($input);
        $user->save();
        return $user;
    }

    public function getUser($id){
        $user = self::find($id);
        return is_null($user) ? false : $user;
    }

    public function getUserByEmail($email){
        $user = self::where('email', $email)->get();
        return count($user) ? $user : false;
    }

    public function deleteUser($id){
        $user = self::find($id);
        return is_null($user) ? false : $user->delete();
    }

    public function updateUser($id){
        $input = Input::all();
        if (isset($input['password']))
            $input['password'] = Hash::make($input['password']);

        if ($user = self::find($id)){
            $user->fill($input);
            $user->save();
            return $user;
        } else {
            return false;
        }
    }

}
