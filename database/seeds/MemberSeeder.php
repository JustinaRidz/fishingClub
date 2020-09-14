<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder{

    public function run()
    {
        $member1 = new \App\Member();
        $member1->name = "Vardenis";
        $member1->surname = "Pavardenis";
        $member1->live = "Ukmerge";
        $member1->experience = 2;
        $member1->registered = 3;
        $member1->reservoir_id = 2;
        $member1->save();

        $member2 = new \App\Member();
        $member2->name = "Minde";
        $member2->surname = "Mindaugaitis";
        $member2->live = "LDK";
        $member2->experience = 5;
        $member2->registered = 2;
        $member2->reservoir_id = 1;
        $member2->save();

        $member3 = new \App\Member();
        $member3->name = "Vytautas";
        $member3->surname = "Didysis";
        $member3->live = "Alytus";
        $member3->experience = 10;
        $member3->registered = 11;
        $member3->reservoir_id = 2;
        $member3->save();
    }
}
