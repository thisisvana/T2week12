<?php require_once("includes/db_connection.php"); ?>
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
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vanarts <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Arapey|Oranienbaum" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://use.fontawesome.com/1845926a10.js"></script>
    </head>
    <body>
    <body class="bg">
        <header class="page-header">

            <div class="row-expand">
                  <!-- Logo -->
                <div class="small-6 medium-2 large-2 columns">
                    <div class="logo">
                        <img src="img/tga-logo.svg" alt="boutique hotel logo">
                    </div>
                </div>

                <!-- Nav -->
                <!-- <nav class="navbar small-6 medium-10 large-10 columns">

                      <ul class="main-menu">
                          <li><a href="rooms.php">Rooms</a></li>
                          <li><a href="gallery.php">Gallery</a></li>
                          <li><a href="packages.php">Packages</a></li>

                      </ul>

                </nav> -->
            </div>
        </header>
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
    </body>
</htmml>
<?php
  // Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
