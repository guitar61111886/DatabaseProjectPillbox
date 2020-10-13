<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "DELETE FROM reminder WHERE( date_remind ) = ('" . $_REQUEST['date_remind']."')";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $date_reminds = $_REQUEST['date_remind'];
//            $time_reminds = $_REQUEST['time_remind'];

        }else{
            echo "<h2>Delete your reminder complete!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Delete Your Demind</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="DeleteReminder.php" method="get">
        <table>

            <tr>
                <th>Date Remind</th>
                <td><input type="text" name="" value="date_remind" /></td>
            </tr>



            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
