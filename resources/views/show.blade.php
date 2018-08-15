@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <p class='place-name'>{{ $journal->place_name }}</p>
                        <p class='updated-date'>{{ $journal->updated_at->toFormattedDateString() }}</p>
                    </div>
                    
                    <div class="card-body">
                        <p><strong>Category: </strong>
                            @switch ($journal->category)
                                @case('lake')
                                @case('river')
                                @case('state forest')
                                    {{ ucfirst($journal->category) }}
                                    @break
                                @case('sna')
                                @case('wma')
                                    {{ strtoupper($journal->category) }}
                                    @break
                            @endswitch
                        </p>
                        <hr>
                        <p>{!! nl2br(e($journal->content)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='row justify-content-md-start mb-3'>
            <div class='col col-md-2 col-lg-1'>
                <div class='text-center'><a class='btn btn-outline-primary' href="{{ route('edit',$journal->id) }}">Update</a></div>
            </div>
            <div class='col col-md-2 col-lg-1'>
                <div class='text-center'>
                <form method='POST' action="{{ route('destroy',$journal->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type='submit' class='btn btn-outline-danger'>Delete</button>
                </form>
                </div>
            </div>
            <div class='col col-md-2 col-lg-1'>
                <div class='text-center'>
                    <a class='btn btn-outline-warning' href='{{ url('/journal') }}'>Journal</a>
                </div>
            </div>
        </div>
    </div>
@endsection