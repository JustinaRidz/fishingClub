<?php

use Illuminate\Database\Seeder;

class ReservoirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $reservoir1 = new \App\Reservoir();
        $reservoir1->title = "Tauragnas";
        $reservoir1->area = 62.5;
        $reservoir1->about = "Utena";
        $reservoir1->save();

        $reservoir2 = new \App\Reservoir();
        $reservoir2->title = "Asvejos";
        $reservoir2->area = 50;
        $reservoir2->about = "Moletai";
        $reservoir2->save();

        $reservoir3 = new \App\Reservoir();
        $reservoir3->title = "Plateliai";
        $reservoir3->area = 12;
        $reservoir3->about = "Plunges raj.";
        $reservoir3->save();
    }
}
