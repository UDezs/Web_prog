<?php 
 $data = $_SESSION; 
// törli a $_SESSION globális tömb adatait:
 unset($_SESSION["csn"]); 
 unset($_SESSION["un"]); 
 unset($_SESSION["login"]); ?> 
 <h1>Kilépett:</h1> <?= $data['csn']." ".$data['un']." (".$data['login'].")" ?>  
 
 