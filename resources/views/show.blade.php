@extends('layouts.main')

@section("page-content")
    <section class="comics py-4">
        <div class="container">
            <img src="{{$comic['thumb']}}" alt="">
            <h3>{{$comic['title']}}</h3>
            <div>
                <p>
                    {{$comic['description']}}
                </p>
            </div>
        </div>
    </section>    

@endsection