@extends('layouts.layout')
@section('page-title', 'Profile')
@section('customJs', 'index.js')
@section('customCss', '/css/project_detail.css')
@section('content')
	<div class="prj-head">
		<div class="title">
			
			<h3><span class="icon-title">&nbsp;</span> {{$info->title}}</h3>
		</div>
		<div class="short-desc">
			<table>
				<tr>
					<td width="200">ĐỊA ĐIỂM:</td>
					<td>{{$info->address}}</td>
				</tr>
				<tr>
					<td>Diện tích:</td>
					<td>{{$info->square}}</td>
				</tr>
				<tr>
					<td>Năm hoàn thành:</td>
					<td>{{$info->year}}</td>
				</tr>
				<tr>
					<td>Chủ đầu tư:</td>
					<td>{{$info->owner}}</td>
				</tr>
				<tr>
					<td>Trạng thái:</td>
					@if ( $info->status == 0)
					<td>Đang triển khai</td>
					@else
					<td>Đã hoàn thành</td>
					@endif
				</tr>
			</table>
		</div>
		<div class="prj-cover">
			<img src="{{url('/images/thum/'.$info->link_image)}}">
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
				<a href="/project/{{$slug_previous}}">Prev</a>/<a href="/project/{{$slug_next}}">Next</a>
			</div>
		</div>
	</div>
	<div class="prj-recommended">
		<div class="row">
			<div class="col-xs-12 title-modules">
				<h3> BROWSE THE CATALOG </h3>
			</div>
		</div>
		<div class="row">
            @foreach($random as $item )
                <div class="col-xs-12 col-sm-3 prj-rcm-block">
                    <a class="prj-link" href="{{url('/project/'.$item->slug)}}"></a>
                    <div class="prj-rcm-thumb" style="background-image: url('/images/thum/{{$item->link_image}}');">
                        <div class="prj-rcm-hover">{{$item->short_des}}</div>
                    </div>
                    <a class="prj-rcm-title" href="{{url('/project/'.$item->slug)}}">{{$item->title}}</a>
                    <p>{{$item->address}}</p>
                </div>
            @endforeach
		</div>
	</div>

@endsection
@section('Author', 'Kon Studio')