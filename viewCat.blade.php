@foreach($vehicles as $vehicle)
    <div>
        <h3>Vehicle ID: {{ $vehicle->id }}</h3>
        <p>Vehicle Type: {{ $vehicle->vehicle_type }}</p>
        <p>Vehicle Brand: {{ $vehicle->vehicle_brand }}</p>
        <p>Plate Number: {{ $vehicle->plate_number }}</p>
    </div>
@endforeach
