<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyles.css">
    <title>Admin Panel</title>
</head>
<body>
<?php require_once "loginprocess.php" ; ?>
    <div class="container">


        <div class="navbar">
            <ul>
                <li>Hesap</li>
                <li>Destek</li>
            </ul>
        </div>

        <div class="side-panel">
            <div class="side-panel-content">
                <div class="w-spacer">
                    <div class="brand">
                        <h1>HOSPITAL, <?php echo $_SESSION["username"]; ?></h1>
                    </div>
                </div>
                <uL>
                    <li>Visits</li>
                    <li>Medications</li>
                    <li>Treatments</li>
                    <li>Medya Yönetimi</li>
                    <li>Kullanıcılar</li>
                </uL>
            </div>
        </div>
        <div class="footer">
            <div class="footer-content">
            <p>© 2019 Kocaeli Üniversitesi. Bütün hakları saklıdır</p>
            </div>
        </div>
    </div>
</body>
</html>



