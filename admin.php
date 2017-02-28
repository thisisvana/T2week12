<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>

<?php
  //sending query
  $query = "SELECT * ";
  $query .= "FROM subjects ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";

  $result = mysqli_query($connection, $query);
  //Test if there was query error
  if(!$result){
    die("Database query failed.");
  }
?>


    <!-- Nav -->
      <div class="row">
          <div class="small-12 medium-6 large-5 columns">
            <h3>Welcome to the admin area</h3>
          </div>
      </div>
      <div class="row">
          <nav class="admin-nav small-12 medium-6 large-5 columns">

            <ul class="admin-menu">
                <li><a href="manage_content.php"><h3>Manage Website</h3></a></li>
                <li><a href="manage_admins.php"><h3>Manage Admins</h3></a></li>
                <li><a href="logout.php"><h3>Logout</h3></a></li>

            </ul>
          </nav>
    </div>
    <main>
      <div class="row">
        <div class="small-12 medium-6 large-5 columns">
          <h3></h3>
        </div>
      </div>

    <ul>
    <?php
    //use returned data
      while($subject = mysqli_fetch_assoc($result)){
    //output data from each row
    ?>
      <li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>

    <?php
    }
    ?>
    </ul>
    <?php
    //release returned data (to free space in memory once i have used the data)
    mysqli_free_result($result);
    ?>
   </main>
    <?php require_once("includes/layouts/footer.php"); ?>
  </body>
</htmml>
