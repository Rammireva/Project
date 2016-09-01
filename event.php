<?php

include_once('includes/includes.php');
?>

<div id="page-content-wrapper" style="margin-top: 100px">
    <div class="container">
        <hr/>
        <legend></legend>
        <legend class="text-center">Add Event Details</legend>
        <form class="form-horizontal">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="form-group">
                    <label class="control-label col-md-3 text-right">Event Name:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-right">Event Address:</label>
                    <div class="col-md-9">
                        <textarea type="text" class="form-control" name="address" id="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-right">City:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-right">Pincode:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="pin" id="pin">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-right">Date:</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 text-right">Time:</label>
                    <div class="col-md-9">
                        <input type="time" class="form-control" name="time" id="time">
                    </div>
                </div>
                <div class="col-md-offset-6">
                    <input type="submit" class="btn btn-primary" name="submit" id="submit">
                    <button class="btn btn-primary" name="cancel" id="cancel">Cancel</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<script type="application/javascript">
    $('li:contains("Add Events")').addClass('active1');
    $('#cancel').click(function(e){
        e.preventDefault();
        $('form')[0].reset();
    });
    $('form').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'api.php?insert_event=1',
            data: formData,
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                $('legend').text('Event Added');
                window.setTimeout(function(){
                    window.location.href = 'index.php';
                }, 2000);
            }
        })
    })
</script>

