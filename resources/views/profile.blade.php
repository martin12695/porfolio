@extends('layouts/layout');
@section('page-title', 'Profile')
@section('customJs', 'index.js')
@section('customCss', '/css/profile.css')
@section('content')

<div class="profile-wrap">
	<article>
		<p>
			{!! $profile->profile !!}
		</p>
	</article>
</div>

@endsection