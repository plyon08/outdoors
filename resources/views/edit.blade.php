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
                <form class='mb-3' method="POST" action="{{ route('update',$journal->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name-of-place">Name of Place</label>
                        <input type="text" class="form-control" id="name-of-place" aria-describedby="name-of-place-help" name="place_name" value="{{ $journal->place_name }}" >
                        <small id="name-of-place-help" class="form-text">Type of the name of the place/location.</small>
                    </div>
                    <label>Category</label>
                    <div class="form-group btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-info @if ('lake' === $journal->category) active @endif">
                            <input type="radio" name="category" value='lake' autocomplete="off" @if ('lake' === $journal->category) checked @endif> Lake
                        </label>
                        <label class="btn btn-info @if ('river' === $journal->category) active @endif">
                            <input type="radio" name="category" value='river' autocomplete="off" @if ('river' === $journal->category) checked @endif> River
                        </label>
                        <label class="btn btn-info @if ('sna' === $journal->category) active @endif">
                            <input type="radio" name="category" value='sna' autocomplete="off" @if ('sna' === $journal->category) checked @endif> SNA
                        </label>
                        <label class="btn btn-info @if ('state forest' === $journal->category) active @endif">
                            <input type="radio" name="category" value='state forest' autocomplete="off" @if ('state forest' === $journal->category) checked @endif> State Forest
                        </label>
                        <label class="btn btn-info @if ('wma' === $journal->category) active @endif">
                            <input type="radio" name="category" value='wma' autocomplete="off" @if ('wma' === $journal->category) checked @endif> WMA
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="content-details">Details</label>
                        <textarea rows='20' class="form-control" id="content-details" name="content" >{{ $journal->content }}</textarea>
                    </div>
                    <div class='row justify-content-md-start mb-3'>
                        <div class='col col-md-2 col-lg-1'>
                            <div class='text-center'>
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </div>
                        <div class='col col-md-2 col-lg-1'>
                            <div class='text-center'>
                                <a class='btn btn-outline-warning' href='{{ url()->previous() }}'>Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection