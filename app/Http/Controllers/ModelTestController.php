<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Image;

class ModelTestController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function about_model()
    {
        return view('about-model');
    }

    public function history()
    {
        $images = Image::all();

        if ($images->isEmpty()) {
            return view('history', ['images' => null]);
        } else {
            return view('history', ['images' => $images]);
        }
    }

    public function history_admin()
    {
        $images = Image::all();

        if ($images->isEmpty()) {
            return view('history-admin', ['images' => null]);
        } else {
            return view('history-admin', ['images' => $images]);
        }
    }

    public function history_delete(Request $request)
    {
        $id = $request->route('id');

        if ($id == null) {
            return redirect('/history/admin');
        } else {
            $delete_image = Image::where('id', $id)->delete();
            return redirect('/history/admin');
        }
    }

    public function predictImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg|max:2048', // Hanya JPG/JPEG, max 2MB
        ], [
            'image.required' => 'Gambar harus diunggah.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus JPG.',
            'image.max' => 'Ukuran gambar maksimal 2MB.'
        ]);

        $class = $request->text1;
        $prediction = $request->text2;
        $probabilityPercentage = $request->text3;
    
        $imagePath = $request->file('image')->store('public/images');
        $relativeImagePath = str_replace('public/', '', $imagePath);
    
        $image = new Image();
        $image->path = $relativeImagePath;
        $image->prediction = $prediction;
        $image->probability = $prediction !== 'none' ? $probabilityPercentage : 'none';
        $image->save();
    
        return view('predict', [
            'prediction' => $prediction,
            'class' => $class,
            'probabilityPercentage' => $probabilityPercentage,
            'imagePath' => $imagePath
        ]);
    }    
}
