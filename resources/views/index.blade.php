@extends('layouts.layout')
@section('page-title', 'Kon studio')
@section('content')
	@foreach($info as $item)
	<div class="col-md-3">
		<div class="project">
			<a href="#">
				<img src="./images/{{$item->link_image}}" alt="Project 1">
			</a>
			<div class="info">
				<a href="#">
					<h1 class="title">
						{{$item->title}}
						<hr>
					</h1>
					<p>
						{{$item->short_des}}
					</p>
				</a>
			</div>
		</div>
	</div>
	@endforeach

@endsection
@section('Author', 'Kon Studio')