@extends('layouts.app')
@section('content')
    <div class="container-fluid p-4">
        <form action="{{ route('postnewpost') }}" method="POST">
            @csrf
            <div class="form-group">
                <h5>Project Name</h5>
                <input type="text" class="form-control" name="Project_name" placeholder="Judul" required>
            </div>
            <div class="form-group">
                <h5>Project Body</h5>
                <textarea name="Project_body" class="form-control"id="" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <h5>Status</h5>
                <select name="status" class="form-control" required>
                    <option value="Complete">Done</option>
                    <option value="On Progress">On Progress</option>
                    <option value="Out Off Schedule">Out Off Schedule</option>
                </select>
            </div>
            <div class="form-group">
                <h5>Due</h5>
                <input type="date" class="form-control" name="due">
            </div>
            <button type="submit" class="btn btn-primary float-right mr-4">Save</button>
            <button type="reset" class="btn btn-primary float-right mr-2">Clear</button>
        </form>
    </div>
@endsection