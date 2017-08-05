@extends('layouts.adlayout')
@section('page-title', 'Project manage')
@section('activeSidebar', 'active')
@section('content')
	<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Project list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Thumbnail</th>
                  <th>Title</th>
                  <th>Short Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($info as $item)
              <tr>
                  <td width="150">
                  	<a> <img width="145" style="display: block; margin-left: auto; margin-right: auto;" src="{{url('/images/'.$item->link_image)}}" alt=""> </a>
                  </td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->short_des}}</td>
                  <td class="center">
                  	<a href="./edit/{{$item->id}}" class="btn btn-primary btn-mini">Edit</a>
                  	<a href="#" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection