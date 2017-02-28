<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>

  <?php
    if(isset($_GET["subject"])) {
      $selected_subject_id = $_GET["subject"];
      $current_subject = find_subject_by_id($selected_subject_id);
      $selected_page_id = null;
      $current_page = null;
    }
    else if(isset($_GET["page"])) {
      $selected_subject_id = null;
      $current_subject = null;
      $current_page = find_page_by_id($selected_page_id);
      $selected_page_id = $_GET["page"];

    }
    else{
      $selected_subject_id = null;
      $current_subject = null;
      $current_page = null;
      $selected_page_id = null;

    }

   ?>

  <main>

    <div class="row">
      <div class="navigation small-6 medium-5 large-4 columns">

        <ul class="subjects">
          <?php
            $subject_set = find_all_subjects();
          ?>
          <?php
          //use returned data
            while($subject = mysqli_fetch_assoc($subject_set)){
          //output data from each row
          ?>
            <li><a href="manage_content.php?subject=<?php echo urlencode($subject["id"]); ?>"><?php echo $subject["menu_name"]; ?></a>
              <?php
                $page_set = find_pages_for_subjects($subject["id"]);

              ?>
              <ul class="pages">
                <?php
                //use returned data
                  while($page = mysqli_fetch_assoc($page_set)){
                //output data from each row
                ?>
                    <li><a href="manage_content.php?page=<?php echo urlencode($page["id"]); ?>"><?php echo $page["menu_name"]; ?></a></li>
                  <?php
                  }
                  ?>
                  <?php
                    //release returned data (to free space in memory once i have used the data)
                    mysqli_free_result($page_set);
                  ?>
              </ul>

            </li>

          <?php
          }
          ?>
          <?php
            //release returned data (to free space in memory once i have used the data)
            mysqli_free_result($subject_set);
          ?>
        </ul>
      </div>

        <div class="small-6 medium-7 large-8 columns">

          <?php if($current_subject) { ?>
            <h3>Manage Subject</h3>

            Menu Name: <?php echo $current_subject["menu_name"]; ?><br>
          <?php  } else if($current_page){ ?>
            <h3>Manage Page</h3>

            Menu Name: <?php echo $current_page["menu_name"]; ?><br>
          <?php } else { ?>
            Please select a subject or a page.
          <?php } ?>



        </div>
    </div>

  </main>



    <?php require_once("includes/layouts/footer.php"); ?>
</body>
</htmml>
