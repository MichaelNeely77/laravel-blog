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
            'site_name' => 'Laravel\'s Blog',
            'address' => 'US, Miami',
            'contact_number' => '305 123-4567',
            'contact_email' => 'info@laravelblog.com'

        ]);
    }
}
