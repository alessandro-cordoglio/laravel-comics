@extends('layouts.main')

@section("page-content")
    <section class="comics py-4">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="{{route('show', $loop->index)}}">
                            <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </a>
                        <h5>{{$comic['series']}}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </section>    

@endsection