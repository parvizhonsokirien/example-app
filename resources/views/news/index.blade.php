@extends('layouts.app')
@section('content')
@foreach($news as $news)
    {{$news->title}}
    {{$news->text}}

    @endforeach
@endsection
