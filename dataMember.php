    <?php
$conn = mysqli_connect("localhost","root","","uasmember");

$result = mysqli_query($conn, "SELECT * FROM datamember");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Register</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="dataHeader">Ini list Registered Members</h1>
    <table class="getData" 
        bgcolor="#f7dfef" 
        bordercolor="#013f69"
        
        border="1" 
        cellpading="20" 
        cellsapcing="" >

    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Username</td>
        <td>Password</td>
        <td>Gender</td>
        <td>DOB</td>
    </tr>

    <?php
    while($row = mysqli_fetch_assoc($result)):?>
    </tr>
    <td><?= $row["Name"]?></td>
    <td><?= $row["Email"]?></td>
    <td><?= $row["Username"]?></td>
    <td><?= $row["Password"]?></td>
    <td><?= $row["Gender"]?></td>
    <td><?= $row["DOB"]?></td>
    <tr>
    <?php endwhile;?> 

    </table>
</body>
</html>