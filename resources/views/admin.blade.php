@extends('layouts.adlayout')
@section('isHidden', 'hidden')
@section('page-title', 'Dashboard')

@section('content')

<div class="quick-actions_homepage">
	<ul class="quick-actions">
		<li class="bg_ly span3">
			<a href="/dashboard/project">
				<i class="icon-book"></i>
				<span class="label label-important">{{$project}}</span>
				Project
			</a>
		</li>
		<li class="bg_lg">
			<a href="/dashboard/sketch">
				<i class="icon-edit"></i>
				<span class="label label-important">{{$sketch}}</span>
				Sketch
			</a>
		</li>
		<li class="bg_ls span3">
			<a href="/dashboard/image-manage">
				<i class="icon-picture"></i>
				<span class="label label-important">{{$image}}</span>
				Images
			</a>
		</li>
		<li class="bg_lo">
			<a href="/dashboard/edit-profile">
				<i class="icon-info-sign"></i>
				Edit profile
			</a>
		</li>
	</ul>
</div>

@endsection