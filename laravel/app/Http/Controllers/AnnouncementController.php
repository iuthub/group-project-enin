<?php

namespace App\Http\Controllers;

use App\AnnouncementsRepository;
use App\CategoriesRepository;
use App\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   AnnouncementController extends Controller
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

    public function index(){
        $announcements = $this->repoAnnouncment->getAll();
        $users = $this->repoUser->getAll();
        $categories = $this->repoCategory->getAll();

        return view('board.board', ['announcements'=>$announcements, 'users'=>$users, 'categories'=>$categories]);
    }



    public function announcement(){
        $categories = $this->repoCategory->getAll();
        return view('board.announce', ['categories'=>$categories]);
    }







    public function indexProfile(){
        $announcements = $this->repoAnnouncment->getAll();
        $user = Auth::user();
        $usersAnnouncement = $user->announcements;
        return view('board.profile', ['announcements'=>$announcements, 'users'=>$user, 'usersAnnouncement'=>$usersAnnouncement]);
    }

    public function foreign($id){
        $foreignUser = $this->repoUser->get($id);
        $foreignUserAnnouncement = $foreignUser->announcements;
        return view('board.profileForeign', ['foreignUser'=>$foreignUser, 'foreignUserAnnouncement'=>$foreignUserAnnouncement]);
    }


    public function add(Request $request){
        $request->validate([
            'title' => 'required|min:2',
            'comment' => 'required|min:2',
            'categories' => 'array|required',
            'importance' => 'required',
            'content' => 'required|min:5'
        ]);
        $this->repoAnnouncment->add(
            $request->input('title'),
            $request->input('comment'),
            collect($request->input('categories')),
            $request->input('importance'),
            $request->input('content')
        );
        return response()->redirectToRoute('board.announce')->with('info','Added!');
    }
}
