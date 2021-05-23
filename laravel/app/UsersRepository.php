<?php


namespace App;


use App\Models\User;
use App\Notifications\ContactUs;

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
}
