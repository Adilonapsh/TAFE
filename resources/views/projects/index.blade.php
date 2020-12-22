@extends('layouts.app')
@section('style')
<style>
    .borad{
        border-radius: 5px;
    }
    .borders{
        border: 10px; !important;
    }
    .border-bottoms-0{
        border-radius: 5px 5px 0px 0px;
    }
    .border-tops-0{
       border-radius: 0px 0px 5px 5px;
    }

</style>
@endsection
@section('content')
<div class="container">
    <h4 class="mb-3">Projects</h4>
    <div class="Penpro bg-white borad mb-2 border-bottoms-0">
        <div class="row">
            <div class="col-12 pl-4 pr-4">
                <div class="row p-lg-2 p-3  align-items-center border-bottom">
                    <div class="col-7">
                        <span>Project Overview</span>
                    </div>
                    <div class="col-5 text-right align-items-center">
                        <a href="/post" class="btn btn-primary">Create</a>
                        <a class="dropdown align-items-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="row pl-4 pr-4 justify-content-center text-center">
                    <div class="col-3 pt-2 border-right borad ">
                        <h3>{{ $tproject }}</h3>
                        <p class="text-muted">Total Project</p>
                    </div>
                    <div class="col-3 pt-2 border-right borad">
                        <h3>{{ $complete }}</h3>
                        <p class="text-muted">Completed</p>
                    </div>
                    <div class="col-3 pt-2 border-right borad">
                        <h3>{{ $onprog }}</h3>
                        <p class="text-muted">On Progress</p>
                    </div>
                    <div class="col-3 pt-2">
                        <h3>{{ $OOS }}</h3>
                        <p class="text-muted">Out Off Schedule</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="PenPro bg-white borad border-tops-0">
        <div class="row pl-4 pr-4 pb-3">
            @if (\Session::has('message'))
                <strong>{!! \Session::get('message') !!}</strong>
            @endif
            {{-- Begin Of Card --}}
            <div class="col-lg-12 pt-3 ">
                @foreach ($posts as $post)
                <div class="row bg-white shadow-sm p-3 mt-3 borad border-left border-success align-items-center">
                    <div class="col-sm-6 col-lg-7">
                        <div class="col-12"><h4 class="border-bottom">{{ $post->project_name }}</h4></div>
                        <div class="col-12"><p id="P_PB{{ $post->id }}">{{ $post->project_body }}</p></div>
                    </div>
                    <div class="col-sm-2 col-lg-2 mb-3"><!--mt-2-->
                        <div class="row justify-content-center"><b>Status</b></div>
                        <div class="row justify-content-center"><span class="btn @if($post->status == 'Complete') btn-success @elseif($post->status == 'Out Off Schedule') btn-danger @elseif($post->status == 'On Progress') btn-warning @endif">{{ $post->status }}</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-3  text-right  "> <!--mt-lg-4-->

                        {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> --}}
                        <a class="btn btn-primary" href="post/edit/{{ $post->id }}">Edit</a>
                        <a class="btn btn-primary" href="#">View</a>
                        <a class="btn btn-primary" href="post/delete/{{ $post->id }}" onclick="return confirm('Anda Yakin ?');">Delete</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
