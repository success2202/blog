<?php
include('core/db_connect.php');

function get_all_subjects(){
  global $con;
  $subj = "SELECT * FROM subjects ORDER BY position ASC";
  $chk = mysqli_query($con, $subj);
  return $chk;
}
function get_pages_for_subject($id){
  global $con;
  $page = "SELECT * FROM pages WHERE subject_id = $id";
      $chks = mysqli_query($con, $page);
    return $chks;
}

function navigation(){
        global $con;
       
        $output =  "<ul class=\"subjects\">";
        $chk = get_all_subjects();
        while($subj_set = mysqli_fetch_assoc($chk)){
            $id = $subj_set['id'];
          $output .= "<li>".$subj_set['menu_name'];
          $output .= "<ul class=\"pages\">";
          $chks = get_pages_for_subject($id);
            while($pages = mysqli_fetch_assoc($chks)){
                $output .= "<li>". $pages['menu_name']."</li>";
            }
          $output .="</ul>";
           $output .= "</li>";
}
$output .= "</ul>";
         return $output;
}


    

?>