<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->firstname = $request->firstname;
        $client->middlename = $request->middlename;
        $client->lastname = $request->lastname;
        $client->passport = $request->passport;
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;

        $client->save();

        $reservation = new Reservation;
        $reservation->id_client = $client->id;
        $reservation->persons_number = $request->persons_number;
        $reservation->arrival_date = $request->arrival_date." ".$request->arrival_time;
        $reservation->departure_date = $request->departure_date." ".$request->departure_time;

        if ($request->has('transfer')) {
            $reservation->transfer = '1';
        } else {
            $reservation->transfer = '0';
        }

        $reservation->comment = $request->comment;
        $reservation->price = $request->price;

        $reservation->save();

        return view('receipt', compact(['reservation']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}