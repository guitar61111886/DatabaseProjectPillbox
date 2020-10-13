<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "DELETE FROM medicine WHERE( name_drug ) = ('" . $_REQUEST['name_drug']."')";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $name_drugs = $_REQUEST['name_drug'];
        }else{
            echo "<h2>Delete your data complete!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Delete Your Data</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="DeleteMedicine.php" method="get">
        <table>

            <tr>
                <th>Name Medicine</th>
                <td><input type="text" name="name_drug" value="" /></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
