<?php
if (isset($_POST["btn_consulta"])){
    if (!empty($_POST["ftl_empl"])){
        echo $_POST["ftl_empl"] . "<br/>";
    }
    if (!empty($_POST["ftl_eval"])){
        echo $_POST["ftl_eval"] . "<br/>";
    }
    if (!empty($_POST["ini_cal"])){
        echo $_POST["ini_cal"] . "<br/>";
    }
    if (!empty($_POST["fin_cal"])){
        echo $_POST["fin_cal"] . "<br/>";
    }
}
?>
