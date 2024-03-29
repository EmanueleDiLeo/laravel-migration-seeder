<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains= Train::all();
        if (empty($trains)) {
            abort(404);
        }
        return view("home", compact("trains"));
    }
}
