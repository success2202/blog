<?php
include('core/db_connect.php');

function navigation(){
        global $con;
        $subj = "SELECT * FROM subjects ORDER BY position ASC";
        $chk = mysqli_query($con, $subj);
        $output =  "<ul class=\"subjects\">";
        while($subj_set = mysqli_fetch_assoc($chk)){
            $id = $subj_set['id'];
          $output .= "<li>".$subj_set['menu_name'];
          $output .= "<ul class=\"pages\">";
          $page = "SELECT * FROM pages WHERE subject_id = $id";
          $chks = mysqli_query($con, $page);
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