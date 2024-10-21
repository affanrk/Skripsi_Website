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

    public function makePrediction(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,jfif|max:2048',
        ]);

        $predictions = $request->text1;
        $class = $request->text2;
        $prob_percentage = $request->text3;

        $imagePath = $request->file('image')->store('public/images');
        $relativeImagePath = str_replace('public/', '', $imagePath);

        $image = new Image();
        $image->path = $relativeImagePath;
        $image->prediction = $predictions;
        if ($predictions !== 'none') {
            $image->probability = $prob_percentage;
        } else if ($predictions === 'none') {
            $image->probability = 'none';
        }
        $image->save();

        return view('predict', [
            'predictions' => $predictions,
            'class' => $class,
            'prob_percentage' => $prob_percentage,
            'imagePath' => $imagePath
        ]);
    }
}
