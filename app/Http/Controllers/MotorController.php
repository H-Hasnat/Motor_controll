<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MotorController extends Controller
{
    public function index()
    {
        return view('motor');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'speed' => 'required|numeric|min:0|max:255', // Ensure 'speed' is a required numeric value between 0 and 100
        ]);

        $speed = $validatedData['speed'];


        // // Call the Python script to send the command to Arduino
        // $command = escapeshellcmd("python /path/to/your/project/python_scripts/send_speed.py $speed");
        // $output = shell_exec($command); // Execute the command
        // // return $speed;
        // return response()->json(['status'=> 'Motor speed updated successfully.','data'=>$speed]);


        $response = Http::post('http://localhost:5000/motor/speed', [
            'speed' => $speed,

        ]);

        return $response->json();


    }



    public function status()
    {
        try {
            // Assuming the Flask API provides motor status
            $response = Http::get('http://localhost:5000/motor/status');

            // Return the status received from the Flask backend
            return response()->json($response->json());
        } catch (\Exception $e) {
            // Handle errors, e.g., if the Flask server is unreachable
            return response()->json(['error' => 'Failed to fetch motor status.', 'message' => $e->getMessage()], 500);
        }
    }



}




