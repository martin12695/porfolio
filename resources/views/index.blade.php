@extends('layouts.layout')
@section('page-title', 'Home')
@section('customJs', 'index.js')
@section('content')
	<div id="Filter"> 
		<select onchange="filter()" id="filter">
			<option value ='2' {{$filter == 2 ?  'selected' : ''}}>All</option>
			<option value="1" {{$filter == 1 ?  'selected' : ''}}>Completed</option>
			<option value="0" {{$filter == 0 ?  'selected' : ''}}>In progress</option>
		</select>
	</div>
	<div id="info-content">
		@foreach($info as $item)
		<div class="col-sm-4 col-md-3 col-xs-12">
			<div class="project">
				<a href="{{url('/project/'.$item->slug)}}">

					<div class="prv" style="background-image: url('/images/thum/{{$item->link_image}}');">&nbsp;</div>
				</a>
				<div class="info">
					<a href="{{url('/project/'.$item->slug)}}">
						<h1 class="title">
							{{$item->title}}
							<hr>
						</h1>
						<p class="short-des">
							{{$item->short_des}}
						</p>
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div id="loadingData" class="row" style="display: none;">
		<div class="col-xs-12">
			<h3>Loading...</h3>
		</div>
	</div>

	<script>
		var page = 1;
		var scroll = true;
		function filter() {
			var fitler = $('#filter').val();
			window.location.replace("/filter/project/" + fitler );
		}

		$(window).scroll(function() {
			if (window.location.pathname == '/') {
				if (scroll == true) {
					if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
						$('#loadingData').fadeIn();
						scroll = false;
						$.ajax({
							type: "GET",
							url: '/getmore/project/' + page,
							success: function (data) {
								page++;
								$.each(data, function (i, val) {
									$('#info-content').append(`
								<div class="col-sm-4 col-md-3 col-xs-12 data-append" style="display:none;">
									<div class="project">
										<a href="/project/` + val.slug + `">
											<div class="prv" style="background-image: url('./images/thum/` + val.link_image + `');">&nbsp;</div>
										</a>
										<div class="info">
											<a href="/project/` + val.slug + `">
												<h1 class="title">` +
											val.title +
											`<hr>
												</h1>
												<p class="short-des">` + val.short_des + `</p>
											</a>
										</div>
									</div>
								</div>`);
								});
								var $data = $('.data-append');
								$data.each(function () {
									var $this = $(this);
									$this.removeClass('data-append');
									$this.fadeIn();
								});
								$('#loadingData').fadeOut();
								if (data.lenght > 0)  scroll = true;
							},
						});
					}
				}
			}
		});
	</script>



@endsection
@section('Author', 'Kon Studio')