<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>SIM project at FCT</title>
	<meta name="description" content="FCT SIM project" />
	<meta name="keywords" content="FCT SIM" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    
    <link rel="Stylesheet" type="text/css" href="style.css"/>




    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://use.fontawesome.com/1e803d693b.js"></script>
</head>

<body>
    <section>
        <div class="header">
            <div class="header-logo">
                <a href="https://www.fct.unl.pt/">
                    <img src="images/fctlogo.png" alt="FCT logo">
                </a>
            </div>
            <div class="header_title">
                <h1>hospital sim - fct</h1>
             </div>
             <div>
                <?php
                    echo "Today is: " . date("F d") . "," . date("Y");
                ?>
             </div>
        </div>
    </section>
    <section class="content">
        <div class="menu-side pre-content">
            <ul>
                <li><a href="index.php?operation=homepage">Presentation</a></li>
                <li><a href="#">Options</a></li>



<li><a href="index.php?operation=account">My account</a></li>
<li><a href="index.php?operation=userlist">User list</a></li>



                <li id="logbutton">
                    <!-- <a href="index.php?operation=loginpage">Login</a> -->
                    <?php
                    if (isset($_SESSION['authuser']) && $_SESSION['authuser'] == 1) {
                        echo "<a href='logout.php'>Logout</a>";
                    } else {
                        echo "<a href='index.php?operation=loginpage'>Login</a>";
                    }
                    ?>
                </li>

            </ul>

        </div>

        <?php
            if (isset($_GET["operation"])) {
                switch ($_GET["operation"]) {
                    case "homepage":
                        include("homepage.php");
                        break;
                     case "account":
                         include("account.php");
                         break;
                     case "userlist":
                         include("userlist.php");
                         break;
                    // case "logout":
                    //     include("logout.php");
                    //     break;
                    case "loginpage":
                        include("loginpage.php");
                        break;
                }
            } else {
                if (isset($_SESSION['authuser']) && $_SESSION['authuser'] == 1) {
                    include("homepage.php");
                } else {
                    include("loginpage.php");
                }
            }
           
 
        ?>
      
    </section>
	<section class="footer">
        <div>
            <p><footer>&copy; Alunos 2018/1019</footer>
            </p>
        </div>
    </section>
</body>
</html>