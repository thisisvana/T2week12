<?php include "partials/header.php"; ?>

<<<<<<< HEAD

<div class="main-wrapper">
    <div class="row">

=======
<div class="small-12 medium-12 large-12 columns">
  <div class="sidebar">
    <div class="row-expand">
      <div class="small-12 medium-12 large-3 columns">
          <div class="sidebar-contact">
            <h1>Contact</h1>
          </div>
      </div>
      <div class="contact-page small-12 medium-12 large-9 columns">

        <form class="contact-form" action="post">
          <!--  General -->
          <div class="form-group">
            <h2 class="heading">Booking & contact</h2>
            <div class="controls">
              <input type="text" id="name" class="floatLabel" name="name">
              <label for="name">Name</label>
            </div>
            <div class="controls">
              <input type="text" id="email" class="floatLabel" name="email">
              <label for="email">Email</label>
            </div>

          </div>
          <!--  Details -->
          <div class="form-group">
            <h2 class="heading">Details</h2>
            <div class="grid">
            <div class="col-1-4 col-1-4-sm">
              <div class="controls">
                <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
              </div>
            </div>
            <div class="col-1-4 col-1-4-sm">
              <div class="controls">
                <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
                <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
              </div>
            </div>
              </div>
              <div class="grid">
            <div class="col-1-3 col-1-3-sm">
              <div class="controls">
                <!-- <i class="fa fa-sort"></i> -->
                <select class="floatLabel">
                  <option value="blank"></option>
                  <option value="1">1</option>
                  <option value="2" selected>2</option>
                  <option value="3">3</option>
                </select>
                <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
              </div>
            </div>
            <div class="col-1-3 col-1-3-sm">
              <div class="controls">
                <!-- <i class="fa fa-sort"></i> -->
                <select class="floatLabel">
                  <option value="romance">Romance</option>
                  <option value="deluxe" selected>Deluxe</option>
                  <option value="standard">Standard</option>
                </select>
                <label for="fruit">Room</label>
               </div>
            </div>

            <!-- <div class="col-1-3 col-1-3-sm">
              <div class="controls">

                <select class="floatLabel">
                  <option value="blank"></option>
                  <option value="single-bed">Zweibett</option>
                  <option value="double-bed" selected>Doppelbett</option>
                </select>
                <label for="fruit">Bedding</label>
              </div>
            </div>

             </div>
              <div class="grid">
                <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
                <br>
                <div class="controls">
                  <textarea name="comments" class="floatLabel" id="comments"></textarea>
                  <label for="comments">Comments</label>
                  </div>
                    <button type="submit" value="Submit" class="col-1-4 btn">Submit</button>
              </div> -->
          <!-- </div>  /.form-group -->
        </form>
      </div>
    </div>
  </div>
</div>

<div class="main-wrapper">
    <div class="row">
      <div class="heading-para">
          <h2>Directions</h2>
          <p>Take the first one left, walk for 5 blocks,at the traffic light turn right. Walk 100 miles, turn back, walk another 1000 miles,
            jump off a couple bridges, swim a 3 rivers, and good luck finding us.
         </p>
      </div>
>>>>>>> origin/master


    </div>
</div>

<?php include "partials/footer.php"; ?>
