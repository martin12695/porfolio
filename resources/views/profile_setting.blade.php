@extends('layouts.adlayout')
@section('page-title', 'Edit Profile')
@section('isHidden', 'hidden')

@section('content')

<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon icon-cog"></i></span>
                <h5>Setting</h5>
            </div>
            <div class="widget-content">
                <form id="Setting" action="/dashboard/edit/profile-overview" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label">Facebook:</label>
                        <div class="controls">
                            <input name="facebook" type="text" class="span12" placeholder="Facebook" value="{{$data->facebook}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Instagram:</label>
                        <div class="controls">
                            <input name="insta" type="text" class="span12" placeholder="Instagram" value="{{$data->instagram}}">
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <button style="margin-top: 25px;" type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon icon-cog"></i></span>
                <h5>Edit profile</h5>
            </div>
            <div class="widget-content">
                <form  method="post" class="form-horizontal" action="/dashboard/edit/profile-detail">
                    {{ csrf_field() }}
                    <textarea name="profile" id="Profile" rows="10" class="span12 textarea_editor content ckeditor">{{$data->profile}}</textarea>
                    <div style="text-align: right;">
                        <button style="margin-top: 25px;" type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script language="javascript" src="/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script language="javascript" src="/js/ckeditor/config.js" type="text/javascript"></script>
@endsection