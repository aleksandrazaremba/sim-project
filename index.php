<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>SIM project at FCT</title>
	<meta name="description" content="FCT SIM project" />
	<meta name="keywords" content="FCT SIM" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    
    <link rel="Stylesheet" type="text/css" href="style.css"/>
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
        </div>
    </section>
    <section class="content">
        <div class="menu-side pre-content">
            <ul>
                <li><a href="index.php?operation=homepage">Opcoes</a></li>
                <li><a href="#">Apresentacao</a></li>
                <li><a href="index.php?operation=loginpage">Login</a></li>
            </ul>

        </div>


        <?php 
            if(isset($_GET["operation"])){
                switch ($_GET["operation"]) {
                    case "homepage":
                        include("homepage.php");
                        break;
                    case "loginpage":
                        include("loginpage.php");;
                        break;
                }
            }else{
                include("homepage.php");
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