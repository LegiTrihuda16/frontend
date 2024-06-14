<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function checkIn(Request $request)
    {
        // Simpan waktu absen masuk ke database
        $user = Auth::user();
        $user->check_in_time = $request->checkInTime;
        $user->save();

        return response()->json(['message' => 'Check-in time saved successfully']);
    }

    public function checkOut(Request $request)
    {
        // Simpan waktu absen pulang ke database
        $user = Auth::user();
        $user->check_out_time = $request->checkOutTime;
        $user->save();

        return response()->json(['message' => 'Check-out time saved successfully']);
    }
}
