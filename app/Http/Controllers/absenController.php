<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function absenMasuk(Request $request)
    {
        // Handle photo and location verification
        $photo = $request->input('photo');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        
        // Save the data and mark the attendance
        // For demonstration, we'll just return success
        return response()->json(['success' => true]);
    }

    public function absenPulang(Request $request)
    {
        // Handle photo and location verification
        $photo = $request->input('photo');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        
        // Save the data and mark the attendance
        // For demonstration, we'll just return success
        return response()->json(['success' => true]);
    }
}
