<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //
    private function insert_db(){
        $flight = new Flight;
        $flight->name = "Flight A";
        $flight->airline = "Airline X";
        $flight->number_of_plans = 150;
        $flight->price_per_ticket = 299.99;
        $flight->save();
    }

    private function update_db(){
        $flight = Flight::find(1);
        $flight->name = "Flight B";
        $flight->save();
    }

    private function delete_db(){
        $flight = Flight::find(2);
        $flight->delete();
    }

    function update($id){
        $data['flight_update'] = Flight::find($id);
        $data['flights'] = Flight::all();

        return view('Flight.update', $data);
    }

    function update_action(Request $request, $id){
        $flight = Flight::find($id);
        $flight->name = $request->input('name');
        $flight->airline = $request->input('airline');
        $flight->number_of_plans = $request->input('number_of_plans');
        $flight->price_per_ticket = $request->input('price_per_ticket');
        $flight->save();

        return redirect('/flights');
    }
    function index(){
        $data['flights'] = Flight::all();

        return view('Flight.index', $data);
    }

    function store(Request $request){
        $flight = new Flight;
        $flight->name = "Flight A";
        $flight->airline = "Airline X";
        $flight->number_of_plans = 150;
        $flight->price_per_ticket = 299.99;
        $flight->save();

        return redirect('/flight');
    }
}
