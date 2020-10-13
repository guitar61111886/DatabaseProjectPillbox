<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

        $sql = "UPDATE medicine SET detail_drug ='" . $_REQUEST['name_drug']."', detail ='" . $_REQUEST['detail_drug']."'  WHERE no=1";

        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $name_drugs = $_REQUEST['name_drug'];
            $detail_drugs = $_REQUEST['detail_drug'];
        }else{
            echo "<h2>Update you goal complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Update Your Medicine Information</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="UpdateMedicine.php" method="get">
        <table>
            <tr>
                <th>Name Medicine</th>
                <td><input type="text" name="name" value="" /></td>
            </tr>

            <tr>
                <th>Drug Description</th>
                <td><input type="text" name="detail_drug" value="" /></td>
            </tr>
        
            <tr>
                <th>Update where</th>
            </tr>
            <tr>
                <th>Name Medicine</th>
                <td><input type="text" name="Wname_drug" value="" /></td>
            </tr>

            <tr>
                <th>Drug Description</th>
                <td><input type="text" name="Wdetail_drug" value="" /></td>
            </tr>


            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>