@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4>{{ $journal->place_name }}</h4>
                        <h6>{{ $journal->created_at->toFormattedDateString() }}</h6>
                    </div>
                    
                    <div class="card-body">
                        <p>{!! nl2br(e($journal->content)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='row justify-content-md-start'>
            <div class='col col-md-2 col-lg-1'>
                <div class='center'><a class='btn btn-primary' href="{{ route('edit',$journal->id) }}">Update</a></div>
            </div>
            <div class='col col-md-2 col-lg-1'>
                <div class='center'>
                <form method='POST' action="{{ route('destroy',$journal->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type='submit' class='btn btn-danger'>Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection