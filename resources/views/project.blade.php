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
                  <th width="100">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($info as $item)
              <tr>
                  <td width="150">
                  	<a> <img width="145" style="display: block; margin-left: auto; margin-right: auto;" src="{{url('/thum/'.$item->link_image)}}" alt=""> </a>
                  </td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->short_des}}</td>
                  <td class="center" style="text-align: center;">
                  	<a href="{{url('/dashboard/project/edit/'.$item->id)}}" class="btn btn-primary btn-mini">Edit</a>
                  	<a href="{{url('/dashboard/project/delete/'.$item->id)}}" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure want to delete project?')">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
            {{ $info->links() }}
        </div>
      </div>
    </div>
@endsection