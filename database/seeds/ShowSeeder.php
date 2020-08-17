<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new App\Show();
        $s->title = "Sip Coffee House and Garden";
        $s->start = Carbon::create(2016,11,1);
        $s->end = Carbon::create(2016,12,6);
        $s->phone = '(312) 563-1123';
        $s->address = '1223 W. Grand Avenue';
        $s->city = "Chicago";
        $s->state = "IL";
        $s->zip = "60622";
        $s->save();
    }
}
