<?php


namespace App;


use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;

class AnnouncementsRepository
{
    public function getAll(){
        return Announcement::all();
    }


     public function get($id){
        return Announcement::find($id);
     }

     public function add($title, $comment, $categories, $importance, $content){
        $announcement = new Announcement([
            'title'=>$title,
            'comment'=>$comment,
            'importance'=>$importance,
            'content'=>$content,
            'user_id'=>\Illuminate\Support\Facades\Auth::user()->id
        ]);
        $announcement->save();

         foreach ($categories as $category) {
             $catID = Category::where('name', $category)->first()->id;
             $announcement->categories()->attach($catID);
        }

     }
}
