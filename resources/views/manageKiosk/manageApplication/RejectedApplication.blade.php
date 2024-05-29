@extends('layouts.userNav')

@section('main-content')
    <div class="container">
        <h2 class="mt-4 text-danger">Your Application has been rejected!</h2>
        <p style=" margin-left: 14px; margin-top: 20px;">Make a new Kiosk Application <a
                href="{{ route('user.rejectApplication') }}"><b>here</b></a>.</p>
    </div>
    <br>
@endsection





