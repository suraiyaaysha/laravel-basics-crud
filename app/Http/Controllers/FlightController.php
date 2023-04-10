<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //store a new flight in the database
    public function store(Request $request): RedirectResponse {
        // validate the request
        // $flight = new Flight;
        // $flight->name = $request->name;
        // $flight->save();
        // return redirect('/flights');

        $flight = Flight::create([
            'name' => 'London to Paris',
        ]);
    }



}
