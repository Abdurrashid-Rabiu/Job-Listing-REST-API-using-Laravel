@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Users Table</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $userdata)
                                <tr>
                                    <th>{{ $userdata->id }}</th>
                                    <td>{{ $userdata->name }}</td>
                                    <td>{{ $userdata->avatar }}</td>
                                    <td>{{ $userdata->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection