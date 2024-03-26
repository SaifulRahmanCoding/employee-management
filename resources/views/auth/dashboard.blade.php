@extends('auth.layouts')

@section('content')
    <!--  Header End -->
    <div class="container-fluid">
        {{-- content --}}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Dashboard</h5>
                <p>Welcome to Employee Management App </p>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{-- content --}}
@endsection
