<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    session_unset();//delete session
    header('Location:index.php');
