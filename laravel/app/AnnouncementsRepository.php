<?php


namespace App;


use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;

class AnnouncementsRepository
{
    public function getAll(){
        return Announcement::orderBy('order', 'DESC')->get();
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
        $announcement->save();

         foreach ($categories as $category) {
//             $catID = Category::where('name', $category)->first()->id;
             $announcement->categories()->attach($category);
        }

     }
}
