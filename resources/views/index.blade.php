@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

            @foreach ($journal as $j)
                <div class="mb-3 place-name">
                        <a href="{{ route('show',$j->id) }}">{{ $j->place_name }}</a>
                        <hr>
                </div>
            @endforeach

            {{ $journal->links() }}
            
            </div>
        </div>
    </div>
@endsection