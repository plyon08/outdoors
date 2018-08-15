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
                    <div class="form-group btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-info">
                            <input type="radio" name="category" value='lake' autocomplete="off"> Lake
                        </label>
                        <label class="btn btn-outline-info">
                            <input type="radio" name="category" value='river' autocomplete="off"> River
                        </label>
                        <label class="btn btn-outline-info">
                            <input type="radio" name="category" value='sna' autocomplete="off"> SNA
                        </label>
                        <label class="btn btn-outline-info">
                            <input type="radio" name="category" value='state forest' autocomplete="off"> State Forest
                        </label>
                        <label class="btn btn-outline-info">
                            <input type="radio" name="category" value='wma' autocomplete="off"> WMA
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="content-details">Details</label>
                        <textarea rows='10' class="form-control" id="content-details" name="content" ></textarea>
                    </div>
                    <div class='row justify-content-md-start mb-3'>
                            <div class='col col-md-2 col-lg-1'>
                                <div class='text-center'>
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                            <div class='col col-md-2 col-lg-1'>
                                <div class='text-center'>
                                    <a class='btn btn-outline-warning' href='{{ route('journal') }}'>Cancel</a>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection