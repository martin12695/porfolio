@extends('layouts.adlayout')
@section('page-title', 'Change password')
@section('isHidden', 'hidden')

@section('content')

<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-ok"></i></span>
                <h5>Change password</h5>
            </div>
            <div class="widget-content">
                <form action="#" method="post" class="form-horizontal" id="changePassForm">
                    <div class="control-group">
                        <label class="control-label">Current password:</label>
                        <div class="controls">
                            <input name="currPass" type="password" class="span12" id="oldPass" placeholder="Current password" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">New password:</label>
                        <div class="controls">
                            <input name="newPass" type="password" id="newPass" minlength="8" class="span12" placeholder="New password" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Confirm password:</label>
                        <div class="controls">
                            <input name="confPass" id='confirmPass' minlength="8" type="password" class="span12" placeholder="Confirm password" required>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <button style="margin-top: 25px;" type="button" class="btn" onclick="resetform()">Reset</button>
                        <button style="margin-top: 25px;" type="button" onclick="submitForm(this)" class="btn btn-success"> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function resetform(){
        $('#changePassForm input').each(function(){
            var $this = $(this);
            $this.val('');
        });
    }

    function submitForm(obj){
        var $form = $('#changePassForm');
        if ($form.valid() ){
            var content = "Waiting...";
            $(obj).html(content);
            $(obj).attr('disabled', true);
            if ($('#confirmPass').val() == $('#newPass').val() ) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data : {
                        oldPass : $('#oldPass').val(),
                        newPass : $('#confirmPass').val()
                    } ,
                    url: '/dashboard/change-password',
                    success: function($response) {
                        alert($response);
                        console.log($response);
                        $(obj).html('Save');
                        $(obj).attr('disabled', false);
                    },
                });
            }
        }

    }


</script>

@endsection