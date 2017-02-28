<?php
  //Test if there was query error
  function confirm_query($result_set){
    if(!$result_set){
      die("Database query failed.");
    }
  }

  function find_all_subjects(){
    global $connection;
    //sending query
    $query = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC";

    $subject_set = mysqli_query($connection, $query);
    confirm_query($subject_set);
    return $subject_set;

  }

  function find_pages_for_subjects($subject_id){
    global $connection;

    //sending query
    $query = "SELECT * ";
    $query .= "FROM pages ";
    $query .= "WHERE visible = 1 ";
    $query .= "AND subject_id = {$subject_id} ";
    $query .= "ORDER BY position ASC";

    $page_set = mysqli_query($connection, $query);
    confirm_query($page_set);
    return $page_set;
  }


  function find_subject_by_id($subject_id, $public=true) {
		global $connection;

		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);

		$query  = "SELECT * ";
		$query .= "FROM subjects ";
		$query .= "WHERE id = {$safe_subject_id} ";
		if ($public) {
			$query .= "AND visible = 1 ";
		}
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
	}


  function find_page_by_id($page_id, $public=true) {
		global $connection;

		$safe_page_id = mysqli_real_escape_string($connection, $page_id);

		$query  = "SELECT * ";
		$query .= "FROM pages ";
		$query .= "WHERE id = {$safe_page_id} ";
		if ($public) {
			$query .= "AND visible = 1 ";
		}
		$query .= "LIMIT 1";
		$page_set = mysqli_query($connection, $query);
		confirm_query($page_set);
		if($page = mysqli_fetch_assoc($page_set)) {
			return $page;
		} else {
			return null;
		}
	}

  function public_navigation($subject_array, $page_array) {
    $output = "<ul class=\"subjects\">";
    $subject_set = find_all_subjects();
    while($subject = mysqli_fetch_assoc($subject_set)) {
      $output .= "<li";
      if ($subject_array && $subject["id"] == $subject_array["id"]) {
        $output .= " class=\"selected\"";
      }
      $output .= ">";
      $output .= "<a href=\"index.php?subject=";
      $output .= urlencode($subject["id"]);
      $output .= "\">";
      $output .= htmlentities($subject["menu_name"]);
      $output .= "</a>";

      if ($subject_array["id"] == $subject["id"] ||
          $page_array["subject_id"] == $subject["id"]) {
        $page_set = find_pages_for_subject($subject["id"]);
        $output .= "<ul class=\"pages\">";
        while($page = mysqli_fetch_assoc($page_set)) {
          $output .= "<li";
          if ($page_array && $page["id"] == $page_array["id"]) {
            $output .= " class=\"selected\"";
          }
          $output .= ">";
          $output .= "<a href=\"index.php?page=";
          $output .= urlencode($page["id"]);
          $output .= "\">";
          $output .= htmlentities($page["menu_name"]);
          $output .= "</a></li>";
        }
        $output .= "</ul>";
        mysqli_free_result($page_set);
      }

      $output .= "</li>"; // end of the subject li
    }
    mysqli_free_result($subject_set);
    $output .= "</ul>";
    return $output;
  }
//navigation takes 2 arguments
// - the currently selected subject ID (if any)
// - the currently selected page ID (if any)
  // function navigation($subject_id, $page_id){
  //
  //     $output = "<ul class=\"subjects\">";
  //     $subject_set = find_all_subjects();
  //       //use returned data
  //     while($subject = mysqli_fetch_assoc($subject_set)){
  //       //output data from each row
  //           $output .= "<li";
  //           if($subject["id"] == $subject_id){
  //             $output .= " class=\"selected\" ";
  //           }
  //           $output .= ">";
  //           $output .= "<a href=\"manage_content.php?subject=";
  //           $output .= urlencode($subject["id"]);
  //           $output .= "\">";
  //           $output .= $subject["menu_name"];
  //           $output .= "</a>";
  //           $page_set = find_pages_for_subjects($subject["id"]);
  //
  //           $output .= "<ul class=\"pages\">";
  //
  //             //use returned data
  //           while($page = mysqli_fetch_assoc($page_set)){
  //             //output data from each row
  //               $output .= "<li";
  //               if($page["id"] == $page_id){
  //                 $output .= " class=\"selected\" ";
  //               }
  //               $output .= ">";
  //               $output .= "<a href=\"manage_content.php?page=";
  //               $output .= urlencode($page["id"]);
  //               $output .= "\">";
  //               $output .= $page["menu_name"];
  //               $output .= "</a></li>";
  //
  //           }
  //           //release returned data (to free space in memory once i have used the data)
  //           mysqli_free_result($page_set);
  //
  //           $output .= "</ul></li>";
  //
  //       }
  //       //release returned data (to free space in memory once i have used the data)
  //       mysqli_free_result($subject_set);
  //
  //       $output .= "</ul>";
  //       return $output;
  //  }
?>
