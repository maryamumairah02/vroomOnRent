<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Rental;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function getData()
    {
        $vehicles = Vehicle::all();
        return view('viewCat', compact('vehicles'));
    }
  
    public function create(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->vehicle_type = $request->input('vehicle_type');
        $vehicle->vehicle_brand = $request->input('vehicle_brand');
        $vehicle->plate_number = $request->input('plate_number');
        $vehicle->save();

        return redirect()->back()->with('success', 'Vehicle registered successfully!');
    }

    public function rent(Request $request)
    {
        $vehicleType = $request->input('vehicle_type');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $availableVehicles = Vehicle::where('vehicle_type', $vehicleType)->get();

        foreach ($availableVehicles as $vehicle) {
            $rentals = new Rental();
            $rentals->vehicle_id = $vehicle->id;            
            $rentals->start_date = $startDate;
            $rentals->end_date = $endDate;

            $rentalDuration = strtotime($rentals->end_date) - strtotime($rentals->start_date);
            $rentalRate = $this->getRentalRateByVehicleType($vehicleType) * ($rentalDuration / (60 * 60 * 24));
            $rentals->rental_rate = $rentalRate;

            $rentals->save();
        }

        return view('available_vehicles', ['availableVehicles' => $availableVehicles]);
    }


    private function getRentalRateByVehicleType($vehicleType)
    {
        switch ($vehicleType) {
            case 'compact':
                return 10;
            case 'sedan':
                return 15; 
            case 'SUV':
                return 20;
            case 'premium':
                return 25;
            case 'motorcycle':
                return 8;
            default:
                return 0;
        }
    }

    public function availableForRent($vehicle, $startDate, $endDate)
    {
      $existingRentals = Rental::where('vehicle_id', $vehicle->id)
          ->where(function ($query) use ($startDate, $endDate) {
              $query->whereBetween('start_date', [$startDate, $endDate])
                  ->orWhereBetween('end_date', [$startDate, $endDate]);
          })
          ->count();

      return $existingRentals === 0;
    }

  public function checkAvailability(Request $request)
{
    $rentalId = $request->input('rental_id');

    $vehicle = Vehicle::where('rental_id', $rentalId)->first();
    $cat = Cat::where('rental_id', $rentalId)->first();

    if (!$vehicle || !$cat) {
        return view('vehicle_availability', ['availability' => 'not_available']);
    }

    return view('vehicle_availability', ['availability' => 'available']);
}
  
}

?>
