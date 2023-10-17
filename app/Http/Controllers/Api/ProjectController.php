<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all(); //recupero dari dal DB
        return response()->json($projects); //restituisce dati in formato JSON
    }
}
