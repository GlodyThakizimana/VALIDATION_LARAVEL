<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Character;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function addCharacter(Request $request) {
    $character = new Character;
    $flight->title= $request->title;
    $flight->year_creation= $request->year_creation;
    $flight->affiliate_name= $request->affiliate_name;
    $flight->designer= $request->designer;
    $flight->save();
    return redirect('/liste');
}
