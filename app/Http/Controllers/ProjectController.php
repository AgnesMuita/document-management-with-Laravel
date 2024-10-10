<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources;


class ProjectController extends Controller
{
    /**
     * Show the list of projects.
     */

    public function index(): Response
    {
        $projects = Project::all();
        return Inertia::render('Projects/Index', [
            'projects' => $projects
        ]);
    }

    public function create():Response
    {
      return Inertia('project/create');
    }
}
