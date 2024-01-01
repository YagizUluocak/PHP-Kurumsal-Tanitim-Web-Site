<?php

if(isset($_POST["submit"]))
{
    $login = new Login();
    $girisyap = $login->girisYap();
}


?>