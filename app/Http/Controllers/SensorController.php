<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $api = 'https://api.thingspeak.com/channels/2295228/feeds.json?api_key=OENBFV3SVQKQBRQ4&results=1';
        $json_data = file_get_contents($api);

        $sensorData = json_decode($json_data);
        $channel = $sensorData->channel;
        $feeds = $sensorData->feeds;

        // Extract values from the feeds array
        $temperature = $feeds[0]->field1 ?? null;
        $humidity = $feeds[0]->field2 ?? null;
        $ph = $feeds[0]->field3 ?? null;
        $purity = $feeds[0]->field4 ?? null;

        // Send the extracted data to the view
        return view('components.dashboard', 
        [
            'temperature' => $temperature,
            'humidity' => $humidity,
            'ph' => $ph,
            'purity' => $purity,
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
