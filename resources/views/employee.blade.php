@extends('auth.layouts')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Employee Page</h5>
                <p class="mb-0">This is page of data empolyee </p>
            </div>
        </div>
        <div class="card w-100">
            <div class="card-body p-4">
                <a href="{{ route('employee.create') }}" class="btn btn-primary mt-2 mb-4">Add Data</a>
                <div class="table-responsive">
                    <table class="table text-wrap mb-0 align-middle border">
                        <thead class="text-dark fs-4 border">
                            <tr>
                                <th class="border-bottom-0 border text-center">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0 border text-center">
                                    <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0 border text-center">
                                    <h6 class="fw-semibold mb-0">Gender</h6>
                                </th>
                                <th class="border-bottom-0 border text-center">
                                    <h6 class="fw-semibold mb-0">Age</h6>
                                </th>
                                <th class="border-bottom-0 border text-center">
                                    <h6 class="fw-semibold mb-0">Salary</h6>
                                </th>
                                <th class="border-bottom-0 border text-center">
                                    <h6 class="fw-semibold mb-0">Option</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($employees as $emp)
                                <tr>
                                    <td class="border-bottom-0 border text-center">
                                        <h6 class="fw-semibold mb-0">@php
                                            echo $i++;
                                        @endphp</h6>
                                    </td>
                                    <td class="border-bottom-0 border text-center">
                                        <h6 class="fw-semibold mb-1">{{ ucwords($emp->name) }}</h6>
                                    </td>
                                    <td class="border-bottom-0 border text-center">
                                        <p class="mb-0 fw-normal">{{ $emp->gender }}</p>
                                    </td>
                                    <td class="border-bottom-0 border text-center">
                                        <p class="mb-0 fw-normal">{{ $emp->age }}</p>
                                    </td>
                                    <td class="border-bottom-0 border text-center">
                                        <h6 class="fw-semibold mb-0 fs-3">
                                            {{ 'Rp ' . number_format($emp->salary, 0, ',', '.') }}</h6>
                                    </td>
                                    <td class="border-bottom-0 border text-center">
                                        <a class="btn btn-sm mx-1 btn-info"
                                            href="{{ route('employee.edit', $emp->id) }}">Update</a>
                                        <form method="post" class="d-inline"
                                            action="{{ route('employee.destroy', $emp->id) }}">
                                            @csrf @method('DELETE') <button type="submit"
                                                class="btn btn-sm mx-1 btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
