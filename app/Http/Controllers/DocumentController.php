<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Inertia\Inertia;
use Inertia\Response;

class DocumentController extends Controller
{
    /**
     * Show the list of documents.
     */
    public function index(): Response
    {
        $documents = Document::all();
        return Inertia::render('Documents/Index', [
            'documents' => $documents
        ]);
    }
}
