<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

        $sql = "UPDATE reminder SET Status ='" . $_REQUEST['Status']."', date_remind ='" . $_REQUEST['date_remind']."'  WHERE no=1";

        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $Statuss = $_REQUEST['Status'];

        }else{
            echo "<h2>Update you reminder complete!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Update Your Remind</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="UpdateReminder.php" method="get">
        <table>
            <tr>
                <th>Date Reminder</th>
                <td><input type="text" name="Date Reminder" value="" /></td>
            </tr>

            <tr>
                <th>Status</th>
                <td><input type="text" name="Status" value="" /></td>
            </tr>
        
            <tr>
                <th>Update where</th>
            </tr>
            <tr>
                <th>Date Reminder</th>
                <td><input type="text" name="Wdate_remind" value="" /></td>
            </tr>

            <tr>
                <th>Status</th>
                <td><input type="text" name="WStatus" value="" /></td>
            </tr>


            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>