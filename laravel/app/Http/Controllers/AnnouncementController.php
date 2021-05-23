<?php

namespace App\Http\Controllers;

use App\AnnouncementsRepository;
use App\CategoriesRepository;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\User;
use App\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    public function index(Request $request)
    {
        $announcements = [];
        $sort = 'DESC';
        if ($request->has('search')) {
            $announcements = $this->repoAnnouncment->search($request->search);
        } else if ($request->has('sort')) {
            $sort = $request->sort == '1' ? 'DESC' : 'ASC';
            $announcements = $this->repoAnnouncment->sort($sort);
        } else {
            $announcements = $this->repoAnnouncment->getAll();
        }
        $users = $this->repoUser->getAll();
        $categories = $this->repoCategory->getAll();

        return view('board.board',
            [
                'announcements' => $announcements,
                'users' => $users,
                'categories' => $categories,
                'sort'=>$sort,
            ]);
    }


    public function announcement()
    {
        $categories = $this->repoCategory->getAll();
        return view('board.announce', ['categories' => $categories]);
    }


    public function indexProfile()
    {
        $announcements = $this->repoAnnouncment->getAll();
        $user = Auth::user();
        $usersAnnouncement = $user->announcements;
        return view('board.profile', ['announcements' => $announcements, 'users' => $user, 'usersAnnouncement' => $usersAnnouncement]);
    }

    public function foreign(Request $request, $id)
    {

        if ($request->isMethod('post')) {
            return $this->modifyUser($id, $request);
        }
        $foreignUser = $this->repoUser->get($id);
        $foreignUserAnnouncement = $foreignUser->announcements;
        $context = ['foreignUser' => $foreignUser, 'foreignUserAnnouncement' => $foreignUserAnnouncement];


        return view('board.profileForeign', $context);
    }

    private function modifyUser($id, $request)
    {
        Validator::make($request->all(), (
        [
            'username' => ['string', 'min:5', Rule::unique(User::class),],
            'phoneNumber' => ['string', 'regex:/\+998-[0-9]{2}-[0-9]{7}$/', Rule::unique(User::class),],
            'passport' => ['string', 'regex:/^[A-B]{2}[0-9]{7}/', Rule::unique(User::class),],
            'birthdate' => ['date_format:d-m-Y'],
            'postalCode' => ['numeric', 'digits:7'],
            'city' => ['regex:/^[a-zA-Z]+$/'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
        ]
        ))->validate();
        $this->repoUser->updateUser($id, $request->all());
        return back()->with('info', 'Successfully updated');
    }


    public function add(Request $request)
    {
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
        return response()->redirectToRoute('board.announce')->with('info', 'Added!');
    }

    public function createCategory(Request $request){
        if($request->isMethod('post')){
            $request->validate(
              ['name'=>'required|unique:categories']
            );
            $this->repoCategory->create($request->all());
            return back()->with('info', 'successfully added category');
        }
      return  view('moderator.create_category');
    }
}
