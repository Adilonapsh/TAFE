@extends('layouts.app')
@section('content')
    <div class="container-fluid p-4">
        <form action="/cctv/create" method="POST">
            @csrf
            <div class="form-group">
                <h5>CCTV Name</h5>
                <input type="text" class="form-control" name="Cctv_name" placeholder="Nama CCTV" required>
            </div>
            <div class="form-group">
                <h5>CCTV IP</h5>
                <input type="text" class="form-control" name="Cctv_ip" placeholder="http://192.168.0.101/" required>
            </div>
            <div class="form-group">
                <h5>Status</h5>
                <select name="status" class="form-control" required>
                    <option value="Active">Active</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Non Active">Non Active</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary float-right mr-4">Save</button>
            <button type="reset" class="btn btn-primary float-right mr-2">Clear</button>
        </form>
    </div>
@endsection