@extends('layouts.layout')
@section('page-title', 'Profile')
@section('customJs', 'index.js')
@section('customCss', '/css/project_detail.css')
@section('content')
	<div class="prj-head">
		<div class="title">
			
			<h3><span class="icon-title">&nbsp;</span> Project title - project title Name</h3>
		</div>
		<div class="short-desc">
			<table>
				<tr>
					<td width="200">ĐỊA ĐIỂM:</td>
					<td>111/12/2 ShiomKu.Tokyo</td>
				</tr>
				<tr>
					<td>Diện tích:</td>
					<td>123m2</td>
				</tr>
				<tr>
					<td>Năm hoàn thành:</td>
					<td>2017</td>
				</tr>
				<tr>
					<td>Chủ đầu tư:</td>
					<td>LCD Group</td>
				</tr>
				<tr>
					<td>Trạng thái:</td>
					<td>Đang triển khai</td>
				</tr>
			</table>
		</div>
		<div class="prj-cover">
			<img src="{{url('./images/thum/'.$info->link_image)}}">
		</div>
	</div>
	<div class="prj-content">
		<article>
			{!!$info->content !!}
		</article>
	</div>
	<div class="prj-navigation">
		<div class="row">
			<div class="col-xs-6">
				<a href="#">Back to PROJECTS</a>
			</div>
			<div class="col-xs-6" style="text-align: right;">
				<a href="#">Prev</a>/<a href="#">Next</a>
			</div>
		</div>
	</div>
	<div class="prj-recommended">
		<div class="row">
			<div class="col-xs-12 col-sm-4 prj-rcm-block">
				<a class="prj-link" href="#"></a>
				<div class="prj-rcm-thumb" style="background-image: url('../images/thum/15023852348b66cbdb-804e-4120-9507-6fae34b7690b_rwc_0x-29x1885x1259x1885.jpg');">
					<div class="prj-rcm-hover"></div>
				</div>
				<a class="prj-rcm-title" href="#">Project title</a>
			</div>
			<div class="col-xs-12 col-sm-4 prj-rcm-block">
				<a class="prj-link" href="#"></a>
				<div class="prj-rcm-thumb" style="background-image: url('../images/thum/15023852348b66cbdb-804e-4120-9507-6fae34b7690b_rwc_0x-29x1885x1259x1885.jpg');">
					<div class="prj-rcm-hover"></div>
				</div>
				<a class="prj-rcm-title" href="#">Project title</a>
			</div>
			<div class="col-xs-12 col-sm-4 prj-rcm-block">
				<a class="prj-link" href="#"></a>
				<div class="prj-rcm-thumb" style="background-image: url('../images/thum/15023852348b66cbdb-804e-4120-9507-6fae34b7690b_rwc_0x-29x1885x1259x1885.jpg');">
					<div class="prj-rcm-hover"></div>
				</div>
				<a class="prj-rcm-title" href="#">Project title</a>
			</div>
			<div class="col-xs-12 col-sm-4 prj-rcm-block">
				<a class="prj-link" href="#"></a>
				<div class="prj-rcm-thumb" style="background-image: url('../images/thum/15023852348b66cbdb-804e-4120-9507-6fae34b7690b_rwc_0x-29x1885x1259x1885.jpg');">
					<div class="prj-rcm-hover"></div>
				</div>
				<a class="prj-rcm-title" href="#">Project title</a>
			</div>
			<div class="col-xs-12 col-sm-4 prj-rcm-block">
				<a class="prj-link" href="#"></a>
				<div class="prj-rcm-thumb" style="background-image: url('../images/thum/15023852348b66cbdb-804e-4120-9507-6fae34b7690b_rwc_0x-29x1885x1259x1885.jpg');">
					<div class="prj-rcm-hover"></div>
				</div>
				<a class="prj-rcm-title" href="#">Project title</a>
			</div>
			<div class="col-xs-12 col-sm-4 prj-rcm-block">
				<a class="prj-link" href="#"></a>
				<div class="prj-rcm-thumb" style="background-image: url('../images/thum/15023852348b66cbdb-804e-4120-9507-6fae34b7690b_rwc_0x-29x1885x1259x1885.jpg');">
					<div class="prj-rcm-hover"></div>
				</div>
				<a class="prj-rcm-title" href="#">Project title</a>
			</div>
			
		</div>
	</div>
	<!-- <article>
		<h3 class="center" style="text-transform: uppercase;">{{$info->title}}</h3>
		<p align="justify">{{$info->short_des}}</p>

		<img style="display: block; max-width: 70%; margin-left: auto; margin-right: auto; margin-top: 25px; margin-bottom: 25px;" src="{{url('./images/thum/'.$info->link_image)}}">
		<p>{!!$info->content !!}</p>
	</article> -->

@endsection
@section('Author', 'Kon Studio')