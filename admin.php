<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- making sure getting latest version of css and solving cache issue-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Admin Panel</title>
</head>

<body>
<?php require_once "loginprocess.php" ; ?>

 <?php include "sidebar.php" ?>
</body>
</html>



