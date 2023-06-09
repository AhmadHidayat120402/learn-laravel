@extends('home')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->name }}</td>
                </tr>
            @endforeach()
        </tbody>
    </table>
@endsection()
