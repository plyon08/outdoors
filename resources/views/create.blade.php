@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                @include('includes.error')

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name-of-place">Name of Place</label>
                        <input type="text" class="form-control" id="name-of-place" aria-describedby="name-of-place-help" name="place_name" >
                        <small id="name-of-place-help" class="form-text text-muted">Type of the name of the place/location.</small>
                    </div>
                    <div class="form-group">
                        <label for="content-details">Details</label>
                        <textarea rows='10' class="form-control" id="content-details" name="content" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection