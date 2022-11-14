<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        if (isset($_GET["horizon"])) {
            $gtr = $_GET["horizon"];
        } else {
            $gtr = "";
        }
        return view('dreamCar', [
            "title" => "DreamCar",
            "horizon" => $gtr
        ]);
    }
}
