<?php
include "connection.php";
$id=$_GET["id"];
$Brand="";
$Name="";
$Quantity="";
$Price="";

$res=mysqli_query($link,"select * from table1 where id=$id");
while ($row=mysqli_fetch_array($res))
{
    $Brand=$row["Brand"];
    $Name=$row["Name"];
    $Quantity=$row["Quantity"];
    $Price=$row["Price"];

}
header("location.index.php");
?>

<html lang="en" xmlns="">
<head>
    <title>User Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <!-- short column display for forms rows -->
    <!--visit https://www.w3schools.com/bootstrap/bootstrap_forms.asp search for forms template and use it.-->
    <div class="col-lg-4">
        <h2>User data form</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="Brand">Brand:</label>
                <input type="text" class="form-control" id="Brand" placeholder="Enter brand name" name="Brand" value="<?php echo $Brand; ?>">
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name" value="<?php echo $Name; ?>">
            </div>
            <div class="form-group">
                <label for="Quantity">Quantity:</label>
                <input type="text" class="form-control" id="Quantity" placeholder="Enter Quantity" name="Quantity" value="<?php echo $Quantity; ?>">
            </div>
            <div class="form-group">
                <label for="Price">Price:</label>
                <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price" value="<?php echo $Price; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-default">Update</button>

        </form>
    </div>
</div>

</body>

<?php
if(isset($_POST["update"]))
    {
        mysqli_query($link,"update table1 set Brand='$_POST[Brand]',Name='$_POST[Name]',Quantity='$_POST[Quantity]',Price='$_POST[Price]' where id=$id");

        ?>
        <script type="text/javascript">
            window.location="index.php";
        </script>
        <?php
    }
?>

</html>