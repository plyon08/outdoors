@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mb-5">
                <div class="">
                    <p>Dashboard</p>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="">
                    <p>Name: {{ auth()->user()->name }}</p>
                    <p>Email: {{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
