<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function list(Request $request)
    {
        $uploads = Storage::allFiles('uploads');
    }

    public function upload()
    {
        return view('upload');
    }

    public function download($file)
    {
        return response()->download(storage_path('app/'.$file));
    }

    public function store(UploadFileRequest $request)
    {
        $fileName = $request->fileName;
        $file = $request->file('userFile');

        $extension = $file->getClientOriginalExtension();
        $saveAs = $fileName . "." . $extension;

        $file->storeAs('uploads', $saveAs, 'local');

        return response()->json(['success' => true]);
    }
}
