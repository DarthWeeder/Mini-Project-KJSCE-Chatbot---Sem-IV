<?php
// connecting to database
$server = 'localhost';
$username = 'user';
$password = '1234';
$database = 'ai_chatbot';
$conn = new mysqli($server, $username, $password, $database) or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT response FROM questions WHERE question LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching reply from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing reply to a variable which we'll send to ajax
    $replay = $fetch_data['response'];
    //output the reply in an HTML anchor tag
    echo "<a href='$replay' style='color:white'>$replay</a>";
}else{
    echo "Sorry can't be able to understand you!";
}

?>