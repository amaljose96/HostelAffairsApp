<?php
session_start();
require('connect.php');


$messes=execute_MYSQL("SELECT DISTINCT MESS FROM MESS_REVIEW");
$messes_details=[];
while($mess=$messes->fetch_assoc()){
  $messname=$mess['MESS'];
  $mess_data["name"]=$mess['MESS'];
  $reviews=execute_MYSQL("SELECT AVG(FOOD_RATING) AS FR,AVG(STAFF_RATING) AS SR,AVG(EXTRA_RATING) AS ER FROM MESS_REVIEW WHERE MESS='$messname'");
  $review_average=$reviews->fetch_assoc();
  $mess_data["food"]=$review_average["FR"];
  $mess_data["staff"]=$review_average["SR"];
  $mess_data["extra"]=$review_average["ER"];
  $kl_reviews=execute_MYSQL("SELECT * FROM MESS_REVIEW WHERE MESS='$messname' AND RECOMMEND='KL'");
  $ap_reviews=execute_MYSQL("SELECT * FROM MESS_REVIEW WHERE MESS='$messname' AND RECOMMEND='AP'");
  $ni_reviews=execute_MYSQL("SELECT * FROM MESS_REVIEW WHERE MESS='$messname' AND RECOMMEND='NI'");
  $ot_reviews=execute_MYSQL("SELECT * FROM MESS_REVIEW WHERE MESS='$messname' AND RECOMMEND='OT'");
  $mess_data["kl"]=$kl_reviews->num_rows;
  $mess_data["ap"]=$ap_reviews->num_rows;
  $mess_data["ni"]=$ni_reviews->num_rows;
  $mess_data["ot"]=$ot_reviews->num_rows;





  array_push($messes_details,$mess_data);
}

echo json_encode($messes_details);

?>
