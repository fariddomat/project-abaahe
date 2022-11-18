<?php

use App\Category;
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
        // for ($i=1; $i <= 7; $i++) {

        //     Category::create([
        //         'name'=>'المشروع'.$i,
        //         'description'=>'وصف المشروع، المكان، التفاصيل'
        //     ]);
        // }

        Category::create([
                    'name'=>'درة المروة',
                    'description'=>'مشروع درة المروة في مدينة الرياض'
                ]);
    }
}
