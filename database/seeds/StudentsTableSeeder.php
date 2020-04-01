<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name'=>'Nguyen Van To',
                'email'=>'chinh123@gmail.com',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Phan Van Duc',
                'email'=>'duc@gmail.com',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Nguyen Quang Hai',
                'email'=>'hai@gmail.com',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Dao Manh Duy',
                'email'=>'duy@gmail.com',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Quach Dinh Tu',
                'email'=>'tutu@gmail.com',
                'created_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'Updated_at'=> \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ]]

        );
    }
}
