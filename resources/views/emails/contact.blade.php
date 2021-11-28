<img src="{{ asset('eddmanautos_logo.png') }}" width="100">

<p><strong>{{ $name }} sent an appointment</strong></p>
<p>
    <strong>Email:</strong> {{ $email }}<br>
    {!! isset($service) ? "<strong>Service:</strong> $service<br>" : '' !!}
    <strong>Mobile:</strong> {{ $mobile }}<br>

    {!! isset($vehicle_manufacturer) ? "<strong>Vehicle Manufacturer:</strong> $vehicle_manufacturer<br>" : '' !!}
    {!! isset($vehicle_model) ? "<strong>Vehicle Model:</strong> $vehicle_model<br>" : '' !!}
    {!! isset($vehicle_year) ? "<strong>Vehicle Year:</strong> $vehicle_year<br>" : '' !!}

    <strong>Description:</strong><br>{{ $description }}
</p>



