@extends('layouts/layout')
@section('page-title', 'Sketch')
@section('customCss', './css/sketch.css')
@section('customJs', 'index.js')

@section('content')
	<div class="row">
		@foreach($info as $item)
		<div class="col-xs-12 sketch-post">
			<div class="sketch-thumb" style="background-image: url('./images/thum/{{$item->image}}');">&nbsp;</div>
			<h1>{{$item->title}}</h1>
			<article>
				<i>{{$item->content}}  </i>
			</article>
		</div>
		@endforeach
	</div>
@endsection