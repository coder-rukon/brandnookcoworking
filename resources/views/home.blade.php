@extends('layouts.app')

@section('content')
<div class="container">

   <h1 class="appointment_list">Appointment List</h1>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Website</th>
                <th>address 1</th>
                <th>address 2</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Interested in</th>
                <th>Seats Needed</th>
                <th>Desired Start Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Appointments as $Appointment)
                
           
            <tr>
                <td>{{ $Appointment->first_name}} {{ $Appointment->last_name}}</td>
                <td>{{ $Appointment->email }}</td>
                <td>{{ $Appointment->phone }}</td>
                <td>{{ $Appointment->company}}</td>
                <td>{{ $Appointment->company_website}}</td>
                <td>{{ $Appointment->company_address_line_1}}</td>
                <td>{{ $Appointment->company_address_line_2}}</td>
                <td>{{ $Appointment->city}}</td>
                <td>{{ $Appointment->state}}</td>
                <td>{{ $Appointment->zip_code}}</td>
                <td>{{ $Appointment->interested_in}}</td>
                <td>{{ $Appointment->seats_needed}}</td>
                <td>{{ $Appointment->desired_start_date}}</td>
            </tr>
            
           
            @endforeach

        </tbody>

    </table>
</div>
@endsection
