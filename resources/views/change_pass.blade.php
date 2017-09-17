@extends('layouts.adlayout')
@section('page-title', 'Change password')
@section('isHidden', 'hidden')

@section('content')

<div class="row-fluid">
    <div class="span12">
        <div id="err-success" style="display: none;" class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="icon-ok"></i> Success!</h4> 
            <span>Your password is changed.</span>
        </div>
        <div id="err-fail" style="display: none;" class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="icon-remove-sign"></i> Error!</h4>
            <span>Your old password you enter not valid!</span>
        </div>
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
                        <div id="err-fail-confirm" style="display: none;" class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                            <h4 class="alert-heading"><i class="icon-remove-sign"></i> Error!</h4>
                            <span>Confirm password not match</span>
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
            if ($('#confirmPass').val() == $('#newPass').val() ) {
                var content = "Waiting...";
                $(obj).html(content);
                $(obj).attr('disabled', true);
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
                        if ($response == 1) {
                            $('#err-success').fadeIn();
                        }
                        if ($response == 2) {
                            var err = 'Your old password you enter does not valid!';
                            $('#err-fail span').html(err);
                            $('#err-fail').fadeIn();
                        }

                        if ($response == 3) {
                            var err = 'Something is happened!';
                            $('#err-fail span').html(err);
                            $('#err-fail').fadeIn();
                        }
                        $(obj).html('Save');
                        $(obj).attr('disabled', false);
                    },
                });
            } else {
                var err = 'Your confirm password does not valid!';
                $('#err-fail span').html(err);
                $('#err-fail').fadeIn();
            }
        }

    }


</script>

@endsection