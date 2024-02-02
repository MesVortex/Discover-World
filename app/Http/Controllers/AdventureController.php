<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\Photo;
use Illuminate\Http\Request;

class AdventureController extends Controller
{
  
    public function show(Request $request){
        $adventureID = (int)$request->adventureID;
        $adventure = Adventure::findOrFail($adventureID);
        $adventure =
            cache()->remember(
                "adventure_id",
                3600,
                fn () =>
                $adventure
            );
        return view('adventure', compact('adventure'));
    }

    public function store(Request $request){
        $title = $request->title;
        $description = $request->description;
        $advice = $request->advice;
        $continentID = $request->continent;

        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'advice' => 'required',
        //     'continentID' => 'required'
        // ]);

        $adventure = new Adventure();
        $adventure->title = $title;
        $adventure->description = $description;
        $adventure->advice = $advice;
        $adventure->destinationID = $continentID;
        $adventure->save();

        $lastadventureID = $adventure->id;


        if ($request->hasFile('image')) {
            foreach ($request->image as $uploadedImage) {
                $image = new Photo();
                $image->adventureID = $lastadventureID;
                $image->name = $uploadedImage->store('images', 'public');

                $image->save();
            }
        }

        return redirect()->route('homePage');
    }
}  