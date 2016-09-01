<?php

include_once('includes/includes.php');
$getEventName = Project1DAO::getEventName();
?>

<div id="page-content-wrapper" style="margin-top: 100px">
    <div class="container">
        <hr/>
        <legend></legend>
        <legend class="text-center">Add Sessions Details</legend>
        <form class="form-horizontal">
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <div class="form-group">
                        <label class="control-label col-md-3 text-right">Session Name:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 text-right">Select Event:</label>
                        <div class="col-md-9">
                        <select class="form-control" name="event">
                            <?php foreach($getEventName as $name) {
                                echo "<option value='".$name['event_id']."'>" . $name['event_name'] . "</option>";
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 text-right">Session Author:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="author" id="author">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 text-right">Session Duration:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="duration" id="duration">
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
    $('li:contains("Add Sessions")').addClass('active1');
    $('#cancel').click(function(e){
        e.preventDefault();
        $('form')[0].reset();
    });
    $('form').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'api.php?insert_session=1',
            data: formData,
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                $('legend').text('Session Added');
                window.setTimeout(function(){
                    window.location.href = 'index.php';
                }, 2000);
            }
        })
    })
</script>

