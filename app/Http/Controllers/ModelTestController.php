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
            'image' => 'required|image|mimes:jpeg,png,jpg,jfif|max:2048',
        ]);
    
        // Process the image and send it to the Flask API
        $imagePath = $request->file('image')->store('public/images');
        $relativeImagePath = str_replace('public/', '', $imagePath);
        $imageUrl = storage_path('app/' . $imagePath);
    
        // Send the image to Flask API for prediction
        $client = new \GuzzleHttp\Client();
        $response = $client->post('http://127.0.0.1:8080/predict', [
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => fopen($imageUrl, 'r'),
                    'filename' => basename($imageUrl),
                ]
            ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
    
        // Check if the response has the required data
        if (isset($result['Prediction']) && isset($result['Probability'])) {
            $prediction = $result['Prediction'];
            $probabilityPercentage = $result['Probability'];
        } else {
            // Handle the case where prediction data is missing
            return redirect()->back()->withErrors(['error' => 'Prediction data is missing from the API response.']);
        }
    
        // Store prediction data in the database
        $image = new Image();
        $image->path = $relativeImagePath;
        $image->prediction = $prediction;
        $image->probability = $probabilityPercentage;
        $image->save();
    
        return view('predict', [
            'prediction' => $prediction,
            'probabilityPercentage' => $probabilityPercentage,
            'imagePath' => $relativeImagePath
        ]);
    }    
}
