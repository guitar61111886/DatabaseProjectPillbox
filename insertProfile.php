<html lang="en">
<head>
    <title>User Information</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO profile( idname , password , name , lastname , e_mail , phone_number) values('" . $_REQUEST['idname']."','" . $_REQUEST['password']."','" . $_REQUEST['name']."','" . $_REQUEST['lastname']."','" . $_REQUEST['e_mail']."','".$_REQUEST['phone_number']."' )";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $idnames = $_REQUEST['idname'];
            $passwords = $_REQUEST['password'];
            $names = $_REQUEST['name'];
            $lastnames = $_REQUEST['lastname'];
            $e_mails = $_REQUEST['e_mail'];
            $phone_numbers = $_REQUEST['phone_number'];
        }else{
            echo "<h2>complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
        
    }
?>
 
</head>
<body>
    <h1>User Information</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertProfile.php" method="get">
        <table>

            <tr>
                <th>ID User</th>
                <td><input type="text" name="idname" value="" /></td>
            </tr>
            
            <tr>
                <th>Password</th>
                <td><input type="text" name="password" value=""/></td>
            </tr>
 
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" value="" /></td>
            </tr>
            
            <tr>
                <th>Lastname</th>
                <td><input type="text" name="lastname" value=""/></td>
            </tr>
 
            <tr>
                <th>E-mail</th>
                <td><input type="text" name="e_mail" value=""/></td>
            </tr>
 
            <tr>
                <th>Phone Number</th>
                <td><input type="text" name="phone_number" value=""/></td>
            </tr>
 
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>