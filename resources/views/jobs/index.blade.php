@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Jobs
                        <a href="{{ url('my/jobs/create') }}" class="btn btn-primary float-end">Add Job</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Company Logo</th>
                                <th>Location</th>
                                <th>Category</th>
                                <th>Salary</th>
                                <th>Description</th>
                                <th>Benefits</th>
                                <th>Type</th>
                                <th>Work Condition</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($job as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->company_logo }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->salary }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->benefits }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->work_condition }}</td>
                                <td>
                                    <a href="{{ url('my/jobs/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <!-- <a href="{{ url('jobs/'.$item->id.'/delete') }}" class="btn btn-danger">Delete</a> -->
                                     <form action="{{ url('my/jobs/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
</div>
@endsection
