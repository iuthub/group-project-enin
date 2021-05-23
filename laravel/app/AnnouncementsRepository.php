<?php


namespace App;


use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AnnouncementsRepository
{
    public function getAll(){
        $user= Auth::user();
        return Announcement::when(
            $user ->cannot('isModerator'),
            function ($query) use($user){
                return $query->where("is_approved", true)->OrWhere("user_id", $user->id);
            }
        )->orderBy('order', 'DESC')->get();
    }
    public function search($search){
        $user= Auth::user();
        return Announcement::where('title','LIKE', '%'.$search.'%')->when(
            $user ->cannot('isModerator'),
            function ($query) use($user){
                return $query->where("is_approved", true)->OrWhere("user_id", $user->id);
            }
        )->orderBy('order', 'DESC')->get();
    }
    public function sort($sort){
        $user= Auth::user();
        return Announcement::when(
            $user ->cannot('isModerator'),
            function ($query) use($user){
                return $query->where("is_approved", true)->OrWhere("user_id", $user->id);
            }
        )->orderBy('order', $sort)->get();
    }
     public function get($id){
        return Announcement::find($id);
     }
     public  function delete($id){
        return Announcement::where("id", $id)->delete();
     }
    public function getFirst(){
        return Announcement::orderBy('order', 'DESC')->first();
    }
     public function add($title, $comment, $categories, $importance, $content){
        $announcement = new Announcement([
            'title'=>$title,
            'comment'=>$comment,
            'importance'=>$importance,
            'content'=>$content,
            'user_id'=>\Illuminate\Support\Facades\Auth::user()->id,
            'order' => Carbon::now(),
        ]);
        if (Auth::user()->can('isModerator')){
            $announcement->is_approved = true;
        }
        $announcement->save();

         foreach ($categories as $category) {
//             $catID = Category::where('name', $category)->first()->id;
             $announcement->categories()->attach($category);
        }

     }
}
