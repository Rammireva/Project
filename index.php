<?php

include_once('includes/includes.php');
$getEventDetails = Project1DAO::getEventDetails();
$getSessionDetails = Project1DAO::getSessionDetails();
?>

<div id="page-content-wrapper" style="margin-top: 100px">
    <div class="container">
        <hr/>
        <div class="row">
            <div class="col-lg-6">
                <legend class="underline-text">Events Details</legend>
                <div style="height: auto;">
                    <table class="table table-responsive" style="font-size: 12px">
                        <thead>
                        <th>Event Name</th>
                        <th>Event Place</th>
                        <th>Event Date</th>
                        <th>Event Time</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach($getEventDetails as $data){
                            echo "<tr><td>".$data['event_name']."</td><td>".$data['event_city']."</td>
                            <td>".$data['event_date']."</td><td>".$data['event_time']."</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <legend class="underline-text">Session Details</legend>
                <div style="height: auto;">
                    <table class="table table-responsive" style="font-size: 12px">
                        <thead>
                        <th>Session Name</th>
                        <th>Event Name</th>
                        <th>Session Author</th>
                        <th>Session Duration</th>
                        <th>Session Vote</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach($getSessionDetails as $data){
                            echo "<tr><td>".$data['session_name']."</td><td>".$data['event_name']."</td>
                            <td>".$data['session_author']."</td><td>".$data['session_duration']."</td>
                            <td><button class='btn btn-primary up' value=".$data['session_id'].">Up</button><span>  " .$data['session_vote']. "  </span><button class='btn btn-primary down' value=".$data['session_id']."> Down </button></td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="application/javascript">
    $('li:contains("Home")').addClass('active1');
    $('.up').click(function (e) {
        e.preventDefault();
        var val = $(this).val();
        var vote = $(this).next('span').text();
        ++vote;
        $.get('api.php?update=1&vote='+vote+'&id='+val, function(){
        });
        $(this).next('span').text(vote);
    });
    $('.down').click(function (e) {
        e.preventDefault();
        var val = $(this).val();
        var vote = $(this).prev('span').text();
        --vote;
        $.get('api.php?update=1&vote='+vote+'&id='+val, function(){
        });
        if(vote > 0)
            $(this).prev('span').text(vote);
    });
</script>

