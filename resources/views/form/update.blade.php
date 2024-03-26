@extends('auth.layouts')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Update Data</h5>
                <p>This is page of update data empolyee </p>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('employee.update', $employee->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ $employee->name }}" required>
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label d-block">Gender</label>
                                    <div class="d-inline-block">
                                        <input type="radio" name="gender" id="male" value="male"
                                            {{ $employee->gender == 'male' ? 'checked' : '' }} required>
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <input type="radio" name="gender" id="female" value="female"
                                            {{ $employee->gender == 'female' ? 'checked' : '' }} required>
                                        <label for="female">Female</label>
                                    </div>
                                    @error('gender')
                                        <div class="alert alert-danger mt-2 d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12 col-md-4">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" id="age" min="17" max="99" class="form-control"
                                        name="age" value="{{ $employee->age }}" required>
                                    @error('age')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12 col-md-4">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="number" id="salary" class="form-control" min="0" name="salary"
                                        value="{{ $employee->salary }}" required>
                                    @error('salary')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('employee.index') }}" class="btn btn-warning ms-3">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
