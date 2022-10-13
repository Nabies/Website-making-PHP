<?php
    $con= mysqli_connect("localhost","root","","tutorial");
    $response=array();
    if($con)
    {
        $sql="select * from users";
        $result =mysqli_query($con,$sql);
        if($result)
        {
            $x=0;
            while($row = mysqli_fetch_assoc($result))
            {
                $response[$x]['id']=$row['id'];
                $response[$x]['firstname']=$row['firstname'];
                $response[$x]['email']=$row['email'];
                $response[$x]['password']=$row['password'];
                $x++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);//print data in page 
        }
    }
    else{
        echo "Database failed";
    }


?>