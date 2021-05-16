<?php

namespace App\Http\Controllers;

use App\AnnouncementsRepository;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    private $repo;

    public function __construct(AnnouncementsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index(){
        $announcements = $this->repo->getAll();
        return view('board.board', ['announcements'=>$announcements]);
    }

    public function add(Request $request){
        $request->validate([
            'title' => 'required|min:2',
            'comment' => 'required|min:2',
            'categories' => 'array|required',
            'importance' => 'required',
            'content' => 'required|min:5'
        ]);

        $this->repo->add(
            $request->input('title'),
            $request->input('comment'),
            collect($request->input('categories')),
            $request->input('importance'),
            $request->input('content')
        );

        return response()->redirectToRoute('board.announce')->with('info','Added!');
    }
}
