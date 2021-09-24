<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Designer;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function personnages() {
        $books = Character::all();
        return view('personnages', ['characters' => $characters]);    
    }
}
