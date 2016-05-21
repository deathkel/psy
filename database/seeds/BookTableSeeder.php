<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map=['original','east','west','future'];
        foreach($map as $type){
            for($i=0;$i<15;$i++){
                DB::table('books')->insert([
                    'name'=>str_random(10),
                    'description'=>str_random(100),
                    'user_id'=>1,
                    'type'=>$type,
                    'view'=>random_int(100,10000),
                    'content'=>str_random(100),
                    'cover'=>'/img/'.random_int(1,3).'.jpg'
                ]);
            }
        }


    }
}
