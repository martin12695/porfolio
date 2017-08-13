@extends('layouts.layout')
@section('page-title', 'Profile')
@section('customJs', 'index.js')
@section('customCss', '/css/project_detail.css')
@section('content')
	<div class="prj-head">
		<div class="title">
			<span class="icon-title">&nbsp;</span>
			<h3>Project title - project title Name</h3>
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
	<!-- <article>
		<h3 class="center" style="text-transform: uppercase;">{{$info->title}}</h3>
		<p align="justify">{{$info->short_des}}</p>

		<img style="display: block; max-width: 70%; margin-left: auto; margin-right: auto; margin-top: 25px; margin-bottom: 25px;" src="{{url('./images/thum/'.$info->link_image)}}">
		<p>{!!$info->content !!}</p>
	</article> -->

@endsection
@section('Author', 'Kon Studio')