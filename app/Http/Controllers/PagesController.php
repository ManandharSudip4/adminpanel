<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function achievements()
    {
        return view('pages/achievements');
    }

    public function addFacilities()
    {
        return view('pages/addFacilities');
    }

    public function addSocialMedia()
    {
        return view('pages/addSocialMedia');
    }

    public function cancelBookings()
    {
        return view('pages/cancelBookings');
    }

    public function mapsLocationChange()
    {
        return view('pages/mapsLocationChange');
    }

    public function notice()
    {
        return view('pages/notice');
    }

    public function offers()
    {
        return view('pages/offers');
    }

    public function rules()
    {
        return view('pages/rules');
    }

    public function updateContacts()
    {
        return view('pages/updateContacts');
    }
    
    public function updateProfile()
    {
        return view('pages/updateProfile');
    }
}
