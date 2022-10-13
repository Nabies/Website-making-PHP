<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))//submit is from contactUs.php to submit data
    {
        $conn= mysqli_connect('localhost','root','','contactus') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"]))//check is null or not in form
        {
            //creating a varabile to pick data from registation page
            $fullname= $_POST["fullname"];
            $email= $_POST["email"];
            $phone= $_POST["phone"];
            $message= $_POST["message"];

            $sql= "INSERT INTO `users`(`fullname`, `email`, `phone`, `message`) VALUES ('$fullname','$email','$phone','$message')";//Query

            //fetch the data to query to store in db
            $query= mysqli_query($conn,$sql);
            if($query)
            {
                echo "Entry Success!!";
            }
            else
            {
                echo "Error Occured";
            }
        }
    }

?>