@extends('layouts.layout')
@section('page-title', 'Profile')
@section('customJs', 'index.js')
@section('content')
	<article>
		<h3 class="center" style="text-transform: uppercase;">{{$info->title}}</h3>
		<p align="justify">{{$info->short_des}}</p>

		<img style="display: block; max-width: 70%; margin-left: auto; margin-right: auto; margin-top: 25px; margin-bottom: 25px;" src="{{url('./images/thum/'.$info->link_image)}}">
		<p>{{$info->content}}</p>
	</article>

@endsection
@section('Author', 'Kon Studio')