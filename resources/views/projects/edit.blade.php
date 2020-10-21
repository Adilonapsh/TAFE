@extends('layouts.app')
@section('content')
    
    <div class="container-fluid p-4">
        <form action="/post/update" method="POST">
            @csrf
            <input type="hidden" value="{{ $projects->id }}" name="id">
            <div class="form-group">
                <h5>Project Name</h5>
                <input type="text" class="form-control" name="Project_name" value="{{ $projects->project_name }}" required>
            </div>
            <div class="form-group">
                <h5>Project Body</h5>
                <textarea name="Project_body" class="form-control"id="" cols="30" rows="10" value="{{ $projects->project_body }}" required></textarea>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" aria-placeholder="{{ $projects->status }}" required>
                    <option value="Complete">Done</option>
                    <option value="On Progress">On Progress</option>
                    <option value="Out Off Schedule">Out Off Schedule</option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="due" required>
            </div>
            <button type="submit" class="btn btn-primary float-right mr-4">Save</button>
            <button type="reset" class="btn btn-primary float-right mr-2">Clear</button>
        </form>
    </div>
@endsection