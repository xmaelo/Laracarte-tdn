@extends('layouts.default', ['title' => 'Home'])
    @section('content')
        <h1 class="text-center">Map here</h1>

                    <div>
                         @if(session()->has('notification.message'))
                            <div class="alert alert-success">
                                {{session()->get('notification.message')}}
                            </div>  
                         @endif
                    </div>

    @endsection
