@extends('layouts.master')
@section('title', $post->title)

@section('content')


    <h1>{{ $post->title }}</h1>
    <img src="{{ asset('images/'.$post->image_url)}}" alt="photo">
    <p>{!! $post->content !!}</p>


@endsection
