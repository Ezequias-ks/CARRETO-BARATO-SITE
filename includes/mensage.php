<?php 
// SESSÃO MENSAGEM
if(isset($_SESSION['mensage'])){ 
?>
    <span class="mensage-notification"> <?php echo $_SESSION['mensage'];?> </span>
<?php
 }  
 //LIMPADO A SESSÃO
 session_unset();

