<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO medicine( name_drug , time_drug , detail_drug) values('" . $_REQUEST['name_drug']."','" . $_REQUEST['time_Drug']."','" . $_REQUEST['detail_drug']."')";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $name_drugs = $_REQUEST['name_drug'];
            $time_drugs = $_REQUEST['time_drug'];
            $detail_drugs = $_REQUEST['detail_drug'];
        }else{
            echo "<h2>add you datail complete!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Add drug information</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertMedicine.php" method="get">
        <table>

            <tr>
                <th>Name Medicine</th>
                <td><input type="text" name="name_drug" value="" /></td>
            </tr>
            
            <tr>
                <th>Time to Use</th>
                <td><input type="text" name="time_drug" value=""/></td>
            </tr>

            <tr>
                <th>Drug Description</th>
                <td><input type="text" name="detail_drug" value="" /></td>
            </tr>
            
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>