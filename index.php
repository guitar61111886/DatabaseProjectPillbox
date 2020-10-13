<html>
    <?php
        include "connect.php";
    ?>
    <head>
        <title>ChangeIt</title>
    </head>
    <style>
        table,th, td {
            border: 1px solid black;
        };
    </style>
    <body>
        <table style= "width:100%">
            <tr>
                <td>
                    <h1 align = 'center'> Warning</h1><h3 align = 'center' >Did you take medicine today?</h3>
                </td>
                <td>
                    <button><a href="insertProfile.php">User Setting</a></button><br>
                    <button><a href="insertMedicine.php">Add Medicine</a></button><br>
                    <button><a href="DeleteMedicine.php">Delete Medicine</a></button><br>
                    <button><a href="UpdateMedicine.php">Update Medicine</a></button>
                    <button><a href="insertRemind.php">Add Reminder</a></button><br>
                    <button><a href="DeleteRemind.php">Delete Remind</a></button><br>
                    <button><a href="UpdateRemind.php">Update Remind</a></button>
                </td>
            </tr>
        <table>

        <table style="width : 100%">
            <tr>
                <td>
                    <h1 align ="center" >WELCOME BACK</h1>
                </td>
                <?php
                    $sql = "select * from profile";
                    $rs = $conn->query($sql);
                    while($row = $rs->fetch_array()){
                        ?>    
                            <td align = "center"> <h1> ^HI^ </h1><h3> &nbsp; <?php echo $row['name'];?>  <?php echo $row['lastname'];?></h3> </td> 
                        <?php
                    }
                    $conn->close();
                ?>
            </tr>
        </table>
    </body>
</html>