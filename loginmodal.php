<!-- Modal -->
<div id="loginModal" class="modal fade" data-keyboard="false" data-backdrop="static" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" style="margin-left:39%;">College Login</h4>
      </div>
      <div class="modal-body">
        
        <form role="form" autocomplete="off" action="loginpage.php" method="post">
          <div class="form-group">
            <p style="margin-left:10.2em;font-size:1.3em;">For Contingent Events</p>
            <label for="collegepassword" style="margin-left:0.8em;font-size:3em;">CL ID:</label>
            <input style="text-align:center;" type="text" class="form-control" id="clid" name="clid" autofocus>
            <label for="collegepassword" style="margin-left:0.8em;font-size:3em;">Password:</label>
            <input style="text-align:center;" type="text" class="form-control" id="collegepassword" name="collegepassword">
          </div>
          <input style="display:none;" type="text" id="hideModal" value="<?php echo $hideModal;?>">
          <button type="submit" class="btn btn-success" style="margin-left:43%;margin-top:1em;"><span class="glyphicon glyphicon-ok"></span> Submit</button>
          <button style="display:none;" id="goingSoloButton" class="btn btn-danger" style="margin-top:1em;margin-left:8em;" data-dismiss="modal">I'm Going Solo</button>
        </form>

      </div>
      <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    -->
    </div>

  </div>
</div>