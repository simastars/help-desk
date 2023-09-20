<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<?php
 session_start();
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "help_desk") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM messages WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];

   
 
    echo $replay;



}else{

     $_SESSION['message']  = $getMesg;

   
    
    echo "Sorry can't be able to understand you! please click here to forward your Request to our Main office <a href='login/email.php' class='btn btn-info'>Send Via Email</a>  ";

   

}

?>
