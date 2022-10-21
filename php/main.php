<?PHP
$pagina_inicial = $_SESSION["pagina_inicial_session"];
if($pagina_inicial==""){
	$pagina_inicial = "right.php";
}
?>
<html> 
   <head> 
   <title>Sistema A&amp;A</title> 
   </head> 
   <frameset cols="15%,*" frameborder="0" border="0" framespacing="0"> 
     <frame name="fr1" id="fr1" src="left.php" marginwidth="10" marginheight="0" scrolling="auto" > </frame>
     <frame name="fr2" id="fr2" src="<?PHP echo $pagina_inicial?>" marginwidth="0" marginheight="0" scrolling="auto" > </frame>
   </frameset><noframes></noframes> 
</html>