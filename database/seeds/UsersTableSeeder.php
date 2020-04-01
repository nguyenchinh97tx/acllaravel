<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Nguyen Van Chinh',
                'email'=>'chinh123@gmail.com',
                'password'=>bcrypt('chinh123'),
                'isAdmin'=>'1',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Nguyen Quang Anh',
                'email'=>'anh123@gmail.com',
                'password'=>bcrypt('anh123'),
                'isAdmin'=>'0',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ]]
        );
    }
}
