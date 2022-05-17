<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use App\Models\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getStates(Request $request)
    {

        $states = State::where(function ($q) use ($request) {
            if ($request->has('search')) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            }
        })->get();
        return response()->json(
            ['data' => $states, 'status' => 200],
        );
    }

    public function getDistricts(Request $request)
    {

        $districts = District::where(function ($q) use ($request) {
            if ($request->has('state_id')) {
                $q->where('state_id', $request->get('state_id'));
            }

            if ($request->has('search') && $request->search) {
                $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            }
        })
            ->get();
        return response()->json(['data' => $districts, 'status' => 200]);
    }
    public function getMunicipality(Request $request)
    {
        $cities = City::where(function ($q) use ($request) {
            if ($request->has('district_id')) {
                $q->where('district_id', $request->get('district_id'));
            }
            if ($request->has('search')) {
                $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            }
        })
            ->get();
        return response()->json(['data' => $cities, 'status' => 200]);
    }

}