@extends('layouts.main')

@section("page-content")
    <section class="comics py-4">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-md-2">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>    

@endsection