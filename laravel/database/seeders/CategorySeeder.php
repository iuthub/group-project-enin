<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category(['name'=>'Education']);
        $cat->save();

        $cat = new Category(['name'=>'Work']);
        $cat->save();

        $cat = new Category(['name'=>'News']);
        $cat->save();

        $cat = new Category(['name'=>'Emergency']);
        $cat->save();
    }
}
