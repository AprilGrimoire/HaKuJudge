<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'AprilGrimoire';
        $user->email = 'AprilGrimoire@gmail.com';
        $user->save();
        Bouncer::allow('admin')->everything();
        $user->assign('admin');
    }
}
