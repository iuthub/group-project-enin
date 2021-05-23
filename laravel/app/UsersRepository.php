<?php


namespace App;


use App\Models\User;
use App\Notifications\ContactUs;
use Illuminate\Support\Facades\Auth;

class UsersRepository
{
    public function getAll()
    {
        return User::all();
    }

    public function get($id)
    {
        return User::find($id);
    }

    public function sendContactUs(ContactUs  $contactUs)
    {
        $moderator = User::getModerator();
        $moderator->notify($contactUs);
    }
    public function updateUser($user_id, $fields){
        $user = User::find($user_id);
        $user->update($fields);
        $user->save();
    }
}
