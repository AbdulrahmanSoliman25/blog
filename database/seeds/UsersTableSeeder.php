<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $A = App\User::create([
            'name' => 'A.Soliman',
            'email' => 'a@amail.com',
            'password' => bcrypt('123456789A'),
            'admin' => 1
        ]);
            
         $H = App\User::create([
            'name' => 'Ahmed Hassan',
            'email' => 'hassan203025@gmail.com',
            'password' => bcrypt('123456789A'),
            'admin' => 0
        ]);

         $M = App\User::create([
            'name' => 'Mai Mahmoud',
            'email' => 'm@mmail.com',
            'password' => bcrypt('123456789A'),
            'admin' => 0
        ]);
        App\Profile::create([
            'user_id' => $A->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, est veniam non corporis sunt quas voluptates eveniet perferendis repudiandae, voluptate natus optio eius reiciendis, placeat velit nemo molestiae fugiat fuga.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
         App\Profile::create([
            'user_id' => $H->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, est veniam non corporis sunt quas voluptates eveniet perferendis repudiandae, voluptate natus optio eius reiciendis, placeat velit nemo molestiae fugiat fuga.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
         App\Profile::create([
            'user_id' => $M->id,
            'avatar' => 'uploads/avatars/3.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, est veniam non corporis sunt quas voluptates eveniet perferendis repudiandae, voluptate natus optio eius reiciendis, placeat velit nemo molestiae fugiat fuga.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
