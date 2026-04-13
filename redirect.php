<?php
    
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $req_type = '$_GET';
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $req_type = '$_POST';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-wrapper">
    <h2>Data is sent here, and it is store at <?php echo $req_type; ?> variable</h2>
    <div class="flex-table">
        <div class="flex-row">
            <div class="flex-cell" width="120">First Name:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['fname'] : $_POST['fname']; ?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Middle Name:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['mname'] : $_POST['mname']; ?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Last Name:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['lname'] : $_POST['lname'];?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Age:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['age'] : $_POST['age'];?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Gender:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['gender'] : $_POST['gender'];?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Email:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['email'] : $_POST['email'];?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Address:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['address'] : $_POST['address'];?>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-cell">Phone Number:</div>
            <div class="flex-cell" style="text-decoration: underline">
                <!-- Use ternary operator to check if the request type is GET or POST -->
                <?php echo ($req_type == '$_GET') ? $_GET['phone'] : $_POST['phone'];?>
            </div>
        </div>
    </div>
    <br><br>
    <a href="./">Return to Main Form</a>
    </div>
</body>
</html>