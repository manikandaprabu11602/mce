<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EditorContent;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor');
    }

    public function saveContent(Request $request)
    {
        // Validate the request, if needed
        $request->validate([
            'content' => 'required',
        ]);

        // Save the content to the database
        $content = $request->input('content');
        EditorContent::create(['content' => $content]);

        return redirect()->route('view-content')->with('success', 'Content saved successfully');
    }

    public function viewContent()
    {
        $contents = EditorContent::orderBy('created_at', 'desc')->get();

        return view('view-content', compact('contents'));
    }
}
