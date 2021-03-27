<?php

namespace App\Http\Controllers;

use App\Country;
use App\lga;
use App\State;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function showcountries () {
        $countries = Country::orderBy('name', 'ASC')->get();
        return view('panel::locations.countries', compact('countries'));
    }

    public function states (Request $request, $id) {
        $country = Country::find($id)->name;
        $states = State::where('country_id', $id)->orderBy('name', 'ASC')->get();

        if($request->ajax())
            return response()->json(['states' => $states, 'country' => $country], 200);
    }

    public function lgasByStateName ($name) {
        $state_name = $name . ' State';
        $lgas = Lga::where('state_name', 'like', "%$state_name%")->get();
        return response()->json(['lgas' => $lgas, 'status' => true], 200);
        // return view('panel::locations.lga', compact('lgas', 'state'));
    }

}
