<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<10;$i++){
            $g = new App\Models\Gallery();
            $g->title = 'Image '. $i;
            $g->width = 640;
            $g->height = 480;
            $g->image = 'https://via.placeholder.com/640X480?text=Image'.$i;
            $g->save();
        }
    }
}
