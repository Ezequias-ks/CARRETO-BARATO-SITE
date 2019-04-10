<?php
 // SESSÃO MENSAGEM
if(isset($_SESSION['msg'])){ 
?>
   <script> alert("<?php echo $_session['msg']; ?>");</script>
<?php
 }  
 //LIMPADO A SESSÃO
 session_unset();

