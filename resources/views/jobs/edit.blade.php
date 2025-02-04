@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Jobs
                        <a href="{{ url('my/jobs') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('my/jobs/'.$job->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $job->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Company</label>
                            <input type="text" name="company" class="form-control" value="{{ $job->company }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Company Logo</label>
                            <input type="text" name="company_logo" class="form-control" value="Null" value="{{ $job->company_logo }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control" value="{{ $job->location }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <input type="text" name="category" class="form-control" value="{{ $job->category }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Salary</label>
                            <input type="text" name="salary" class="form-control" value="{{ $job->salary }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="3" class="form-control">{!! $job->description !!}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Benefits</label>
                            <input type="text" name="benefits" class="form-control" value="{{ $job->benefits }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Type</label>
                            <input type="text" name="type" class="form-control" value="{{ $job->type }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Work Condition</label>
                            <input type="text" name="work_condition" class="form-control" value="{{ $job->work_condition }}">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
