<html>
    <body>
        <?php
            session_start();
            $username=$_POST["name"];
            
            $pwd=$_POST["password"];
            $conn=mysqli_connect("127.0.0.1","root","","Signup");
            $sql="select * from signup where username='$username' AND password='$pwd';";
            $result=mysqli_query($conn,$sql);
            $no_of_rows=mysqli_num_rows($result);
            
            if($no_of_rows>0){
                echo "Hii";
                while($row=mysqli_fetch_assoc($result)){
                    echo "Byee";
                    $_SESSION["name"]=$row["name"];
                }
                echo "Hellooooo";
                header("Location:home.html");
            }
            else{
                echo "Hiiikol";
                header("Location:alertt.html");
               
            }
        ?>
    </body>
</html>
