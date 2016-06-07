<?php include_once "common/header-simple.php"; ?>

      <div id="main" class="center-align">
        <!-- IF NOT IN QUEUE -->
        <div class="row">
            <div class="col s6 offset-s3">
                    <img class="responsive-img push-s4" src="images/ticket.png" alt="delicountr logo"/>
            </div>
        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="name" type="text">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input id="description" type="text">
                        <label for="description">Description</label>
                    </div>
                </div>
            </form>
        </div>    
        <div class="row">
            <div class="col s6 offset-s3 waves-effect waves-light btn-large tooltipped" data-position="bottom" data-delay="50" data-tooltip="Get your ticket" href="#" onclick="Materialize.toast('Ticket successfully added', 4000)">
                <i class="material-icons left">warning</i>button
            </div>
        </div>
      
         <!-- IF IN QUEUE -->
      
                <!-- Alternate content here -->
      </div>


<?php include_once "common/footer.php"; ?>