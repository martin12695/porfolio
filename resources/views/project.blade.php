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
                <tr class="odd gradeX">
                  <td width="150">
                  	<a> <img width="145" style="display: block; margin-left: auto; margin-right: auto;" src="{{url('/images/1b698cd1-4de6-49a8-beb3-c194cb372fe8_rwc_0x-19x1185x791x1185.jpg')}}" alt=""> </a>
                  </td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center">
                  	<a href="#" class="btn btn-primary btn-mini">Edit</a>
                  	<a href="#" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
                <tr class="even gradeC">
                  <td width="150">
                  	<a> <img width="145" style="display: block; margin-left: auto; margin-right: auto;" src="{{url('/images/1b698cd1-4de6-49a8-beb3-c194cb372fe8_rwc_0x-19x1185x791x1185.jpg')}}" alt=""> </a>
                  </td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">
                  	<a href="#" class="btn btn-primary btn-mini">Edit</a>
                  	<a href="#" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
                <tr class="odd gradeA">
                  <td width="150">
                  	<a> <img width="145" style="display: block; margin-left: auto; margin-right: auto;" src="{{url('/images/1b698cd1-4de6-49a8-beb3-c194cb372fe8_rwc_0x-19x1185x791x1185.jpg')}}" alt=""> </a>
                  </td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">
                  	<a href="#" class="btn btn-primary btn-mini">Edit</a>
                  	<a href="#" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td width="150">
                  	<a> <img width="145" style="display: block; margin-left: auto; margin-right: auto;" src="{{url('/images/1b698cd1-4de6-49a8-beb3-c194cb372fe8_rwc_0x-19x1185x791x1185.jpg')}}" alt=""> </a>
                  </td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">
                  	<a href="#" class="btn btn-primary btn-mini">Edit</a>
                  	<a href="#" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection