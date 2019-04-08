<?php 
// SESSÃO MENSAGEM
session_start();
if(isset($_SESSION['mensage'])){ 
?>
    <script>
        alert('<?php echo $_SESSION['mensage'] ?>');
   </script>
<?php
 }  
 //LIMPADO A SESSÃO
session_unset();

 