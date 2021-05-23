<?php

namespace App\Http\Controllers;

use App\AnnouncementsRepository;
use App\CategoriesRepository;
use App\Notifications\ContactUs;
use App\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class ContactController extends Controller
{
    private $repoAnnouncment;
    private $repoUser;
    private $repoCategory;

    public function __construct(AnnouncementsRepository $repoAnnouncment, UsersRepository $repoUser, CategoriesRepository $repoCategory)
    {
        $this->repoAnnouncment = $repoAnnouncment;
        $this->repoUser = $repoUser;
        $this->repoCategory = $repoCategory;
    }

    public function landingContact(Request $request)
    {
        if ($request->isMethod('post')) {

            return $this->postContact($request);
        }

        return view('landing.contact');
    }

    public function contactUs(Request $request)
    {

        if ($request->isMethod('post')) {
            return $this->postContact($request);
        }

        return view('board.contact');
    }

    private function postContact($request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);
        $subject = $request->subject;
        $body = $request->message;
        $user = Auth::user();
        $this->repoUser->sendContactUs(new ContactUs($user, $subject, $body));

        return back()->with('info', 'You send us email, we will replay as soon as possible!');
    }
}
