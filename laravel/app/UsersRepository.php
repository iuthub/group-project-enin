<?php


namespace App;


use App\Models\User;

class UsersRepository
{
    public function getAll(){
        return User::all();
    }

    public function get($id){
        return User::find($id);
    }

}
