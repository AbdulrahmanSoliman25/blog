<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Egypt , Giza',
            'contact_number' => '2 010 03663 464',
            'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
