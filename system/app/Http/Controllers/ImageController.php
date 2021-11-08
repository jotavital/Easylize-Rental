<?php

namespace App\Http\Controllers;

use App\Models\FotosModeloVeiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($imgPath)
    {
        $path = "/{$imgPath}";

        if (Storage::exists($path)) {
            return response()->file(storage_path('app') . $path);
        }

        abort(404);
    }
}
