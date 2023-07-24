<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Your logic here to fetch any data needed for the dashboard
        // For demonstration purposes, let's assume we have some dummy data
        $bloodDonatedUnits = 150;
        $totalRequestedUnits = 50;
        $totalPendingUnits = 20;
        $totalAcceptedUnits = 80;
        $totalRejectedUnits = 10;

        return view('donor.dashboard', compact(
            'bloodDonatedUnits',
            'totalRequestedUnits',
            'totalPendingUnits',
            'totalAcceptedUnits',
            'totalRejectedUnits'
        ));
    }
}
