<!DOCTYPE html>
<html>
<body>

<?php
   include("dbConfig.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
   
      $sql = "SELECT test_question_id, test_question_code, test_question_name FROM test_question";
     $result = mysqli_query($db,$sql);
	$row = $result->fetch_assoc();
	 if ($row["test_question_code"]=="I1"){
		 echo $row["test_question_name"];
	 }else{
		 echo('yeha');
	 }
	 
	 
//if ($result->num_rows > 0) {
    // output data of each row
  //  while($row = $result->fetch_assoc()) {
    //    echo "id: " . $row["test_question_id"]. " - Code: " . $row["test_question_code"]. " - Name " . $row["test_question_name"]. "<br>";
    //}
//} else {
//    echo "0 results";
//}
     
      // If result matched $myusername and $mypassword, table row must be 1 row
		

   }
?>
</body>
</html>
