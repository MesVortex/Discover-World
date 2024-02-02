<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\Destination;
use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index(){
        $adventures = Adventure::with('destination','photo')->get();
        $destinations = Destination::with('photo')->get();
        $adventures =
            cache()->remember(
                "adventure_id",
                3600,
                fn () =>
                $adventures
            );
        return view('welcome', compact('adventures', 'destinations'));
    }

    public function statistics(){
        $adventuresStats = Adventure::count();
        $destinationStats = Destination::withCount('adventure')
                                    ->orderByDesc('adventure_count')
                                    ->limit(4)
                                    ->get();
        return view('statistics', compact('adventuresStats', 'destinationStats'));
    }

    public function filter(Request $request){
        $selectedDestination = (int)$request->destinationID;
        $destinations = Destination::with('photo')->get();
        if($selectedDestination == 0){
            $adventures = Adventure::all();
        }else{
            $adventures = Adventure::where('destinationID', $selectedDestination)->get();
        }
        return view('welcome', compact('adventures', 'destinations', 'selectedDestination'));
    }

    public function order(Request $request){
        $selectedOrder = (int)$request->order;
        $destinations = Destination::with('photo')->get();
        $adventure = Adventure::query();

        if($selectedOrder == 0){
            $adventure->orderBy('created_at'); 
        }else{
            $adventure->orderByDesc('created_at');
        }

        $adventures = $adventure->get();

        return view('welcome', compact('adventures', 'destinations'));
    }
}
