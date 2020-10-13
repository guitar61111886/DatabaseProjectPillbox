<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO reminder( date_remind , meal_remind , time_remind, detail_remind, Status ) values('" . $_REQUEST['date_remind']."','" . $_REQUEST['meal_remind']."','" . $_REQUEST['time_remind']."','" . $_REQUEST['detail_remind']."','" . $_REQUEST['Status']."')";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $date_reminds = $_REQUEST['date_remind'];
            $meal_reminds = $_REQUEST['meal_remind'];
            $time_reminds = $_REQUEST['time_remind'];
            $detail_reminds = $_REQUEST['detail_remind'];
            $Statuss = $_REQUEST['Status'];

        }else{
            echo "<h2>add your remind complete!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Add Your Reminder</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertRemind.php" method="get">
        <table>

            <tr>
                <th>Date</th>
                <td><input type="text" name="date_remind" value="" /></td>
            </tr>
            
            <tr>
                <th>Meal Remind</th>
                <td><input type="text" name="meal_remind" value=""/></td>
            </tr>

            <tr>
                <th>Time Remind</th>
                <td><input type="text" name="time_remind" value="" /></td>
            </tr>

            <tr>
                <th>Detail</th>
                <td><input type="text" name="detail_remind" value="" /></td>
            </tr>
            
            <tr>
                <th>Status</th>
                <td><input type="text" name="Status" value="" /></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>