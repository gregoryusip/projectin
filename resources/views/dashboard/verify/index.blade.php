@extends('layouts.main')

@section('container')
    <div class="container mb-5 edit-profile-form-box p-5">
        <h1>Daftar Verify Freelancer</h1>
        <p>Freelancer yang menunggu untuk diverify statusnya</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Jumlah Pekerjaan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->university }}</td>
                    <td>{{ $user->job()->count()  }}</td>
                    <td>
                        <a href="/{{ $user->username }}" class="badge bg-info action-button m-1">
                            <i class="uil uil-eye"></i>
                        </a>
                        {{-- <a href="/dashboard/verify/{{ $user->username }}/edit" class="badge bg-warning action-button m-1">
                            <i class="uil uil-edit"></i>
                        </a> --}}
                        <form action="/dashboard/verify/{{ $user->username }}" method="POST" class="d-inline">
                            @method('put')
                            @csrf
                            <button class="badge bg-warning border-0 action-button m-1" onclick="return confirm('Do you want to verify this User?')">
                                <i class="uil uil-edit"></i>
                            </button>
                        </form>
                        <form action="/dashboard/verify/{{ $user->username }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 action-button m-1" onclick="return confirm('Are you sure?')">
                                <i class="uil uil-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
