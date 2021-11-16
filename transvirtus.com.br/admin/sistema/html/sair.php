            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->

<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("Location: http://localhost/transvirtus.com.br/");
?>