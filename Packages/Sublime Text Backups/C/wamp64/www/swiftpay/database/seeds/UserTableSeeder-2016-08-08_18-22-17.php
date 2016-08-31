<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
     [
    "id" => 1
    "name" => "rukky15"
    "email" => "isannony@gmail.com"
    "phone" => "0202020202020"
    "address" => "120 rue albert thoma"
    "role" => "1"
    "state" => "1"
    "created_at" => "2016-08-08 09:17:54"
    "updated_at" => "2016-08-08 09:19:17"
  ]
     [
    "id" => 2
    "name" => "ZED"
    "email" => "zisannony@gmail.com"
    "phone" => "0202020202020"
    "address" => "zzzzzz"
    "role" => "NULL"
    "state" => "1"
    "created_at" => "2016-08-08 09:28:34"
    "updated_at" => "2016-08-08 09:28:51"
  ]
     [
    "id" => 3
    "name" => "ZED"
    "email" => "eisannony@gmail.com"
    "phone" => "0202020202020"
    "address" => "135 rue albert thoma"
    "role" => "NULL"
    "state" => ""
    "created_at" => "2016-08-08 09:33:37"
    "updated_at" => "2016-08-08 11:51:04"
  ]
     [
    "id" => 4
    "name" => "Name"
    "email" => "Email@email.com"
    "phone" => "0202020202020"
    "address" => "1234556"
    "role" => "Null"
    "state" => "1"
    "created_at" => "2016-08-08 09:37:16"
    "updated_at" => "2016-08-08 10:09:59"
  ]
];
		foreach ($users as $user) {
			User::create($user);
		
		}
		    
 }
}
