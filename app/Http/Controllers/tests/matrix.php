<?php

namespace App\Http\Controllers\tests;
//use App\parkings\ParkingRequest;
use App\Booking;
use App\users;
use App\parkings;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Request\ParkingRequest;
//use parkings;
class matrix extends Controller
{
	public function index()
    {
		require '../Hungarian.php';

		$array = [
		    [1,2,3,0,1],
		    [0,2,3,12,1],
		    [3,0,1,13,1],
		    [3,1,1,12,0],
		    [3,1,1,12,0],
		];

		$hungarian  = new \RPFK\Hungarian\Hungarian($array);

		$hungarian->solve(true);
		return view('AllocatedUsers.allocatedUsers',compact(array('parking','users','bookings')));
	}
}