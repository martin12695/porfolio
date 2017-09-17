@extends('layouts.adlayout')
@section('isHidden', 'hidden')
@section('page-title', 'Dashboard')

@section('content')

<div class="quick-actions_homepage">
	<ul class="quick-actions">
		<li class="bg_lb span3">
			<a href="#">
				<i class="icon-bar-chart"></i>
				Views: 123456
			</a>
		</li>
		<li class="bg_ly">
			<a href="#">
				<i class="icon-book"></i>
				<span class="label label-important">20</span>
				Project
			</a>
		</li>
		<li class="bg_lg">
			<a href="#">
				<i class="icon-edit"></i>
				<span class="label label-important">16</span>
				Sketch
			</a>
		</li>
		<li class="bg_ls">
			<a href="#">
				<i class="icon-picture"></i>
				<span class="label label-important">16</span>
				Images
			</a>
		</li>
		<li class="bg_lo">
			<a href="#">
				<i class="icon-info-sign"></i>
				Edit profile
			</a>
		</li>
	</ul>
</div>

@endsection