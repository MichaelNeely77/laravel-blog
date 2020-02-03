<?php

namespace App\Http\Controllers;

use App\Setting;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() 
    {
        return view('admin.settings.settings')->with('settings', Settings::first());
    }

    public function update() 
    {
        $settings = Setting::first();
    }
}
