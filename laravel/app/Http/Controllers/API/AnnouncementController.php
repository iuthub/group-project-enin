<?php

namespace App\Http\Controllers\API;

use App\AnnouncementsRepository;
use App\CategoriesRepository;
use App\Http\Controllers\Controller;
use App\UsersRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    private $repoAnnouncment;
    private $repoUser;
    private $repoCategory;

    public function __construct(AnnouncementsRepository $repoAnnouncment)
    {
        $this->repoAnnouncment = $repoAnnouncment;

    }

    public function delete(Request $request,int $id)
    {
        $this->authorize('isModerator');
        $response = $this->repoAnnouncment->delete($id);
        return response([
            'reponse' => $response,
        ]);
    }



    public function reorder(Request $request, int $id)
    {
        $this->authorize('isModerator');
        $announcmentFirst = $this->repoAnnouncment->getFirst();
        $announcmentUp = $this->repoAnnouncment->get($id);
        $dateFirst = new Carbon($announcmentFirst->order);
        $dateFirst->addSecond(1);
        $announcmentUp->update(['order'=>$dateFirst]);
//        if ($request->user()->can('isModerator')) {
//            $response = $this->repoAnnouncment->delete($id);
//            return response([
//                'reponse' => $response,
//            ]);
//        }
        return response([]);
    }
}
