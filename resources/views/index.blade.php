@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

            @foreach ($journal as $j)
                <div class="card mb-3">
                    {{-- <div class="card-header"> --}}
                        <a href="{{ route('show',$j->id) }}"><h4>{{ $j->place_name }}</h4></a>
                    {{-- </div> --}}
                </div>
            @endforeach

            {{ $journal->links() }}
            
            </div>
        </div>
    </div>
@endsection