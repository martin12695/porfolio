@extends('layouts.adlayout')
@section('page-title', 'Edit project')
@section('activeSidebar', 'active')
@section('content')
	<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit project</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/dashboard/project/save" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input name="title" type="text" class="span11" placeholder="Title" value="{{$info->title}}">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Short description :</label>
              <div class="controls">
                <input name="short_des" type="text" class="span11" placeholder="Short description" value="{{$info->short_des}}">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Content :</label>
              <div class="controls">
                <textarea class="span11 textarea_editor" rows="6" name="content">{{$info->content}}</textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Thumbnail :</label>
              <div class="controls">
                <label id="fileUpload" for="Thumbnail">Browser</label>
                <input type="file" id="Thumbnail">
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      <style>
        #fileUpload{
          display: block;
          float: left;
          background-color: #5bc0de;
          padding: 4px 12px;
          margin-bottom: 0;
          font-size: 14px;
          line-height: 20px;
          color: #333;
          text-align: center;
          text-shadow: 0 1px 1px rgba(255,255,255,0.75);
          vertical-align: middle;
          cursor: pointer;
          margin-bottom: 10px;
          color: #fff;
        }
        #fileUpload:hover{
          background-color: #2f96b4;
        }
        #Thumbnail{
          display: none;
        }
      </style>
    </div>
@endsection