<?php


namespace App;


use App\Models\Category;

class CategoriesRepository
{

    public function getAll(){
        return Category::all();
    }

    public function get($id){
        return Category::find($id);
    }
}
