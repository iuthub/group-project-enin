<?php

namespace App\Http\Controllers\API;

use App\AnnouncementsRepository;
use App\CategoriesRepository;
use App\Http\Controllers\Controller;
use App\Notifications\ApprovedAnnouncment;
use App\Notifications\DeleteAnnouncment;
use App\Notifications\ReorderAnnouncment;
use App\UsersRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    private $repoAnnouncment;


    public function __construct(AnnouncementsRepository $repoAnnouncment)
    {
        $this->repoAnnouncment = $repoAnnouncment;

    }

    public function delete(int $id)
    {
        $this->authorize('isModerator');
        $response = $this->repoAnnouncment->get($id);
        $user = $response->user;
        $user->notify(new DeleteAnnouncment($user, $response->title));
        $response->delete();
        return response([]);
    }


    public function reorder(int $id)
    {
        $this->authorize('isModerator');
        $announcmentFirst = $this->repoAnnouncment->getFirst();
        if ($announcmentFirst->id != $id) {
            $announcmentUp = $this->repoAnnouncment->get($id);
            $dateFirst = new Carbon($announcmentFirst->order);
            $dateFirst->addSecond(1);
            $announcmentUp->update(['order' => $dateFirst]);
            $user = $announcmentUp->user;
            $user->notify(new ReorderAnnouncment($user, $announcmentUp));
//        if ($request->user()->can('isModerator')) {
//            $response = $this->repoAnnouncment->delete($id);
//            return response([
//                'reponse' => $response,
//            ]);
//        }
            return response([]);
        }
        return response([]);
    }
    public function approve(int $id){
        $this->authorize("isModerator");
        $announcment = $this->repoAnnouncment->get($id);
        $user = $announcment->user;
        $user->notify(new ApprovedAnnouncment($user, $announcment));
        $announcment->is_approved = true;
        $announcment->save();
        return response([]);
    }
}

