<!DOCTYPE html>
<html>


<body>
  <form method="post">
    Enter text:<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="submit">
    
  </form>

</body>
</html>


<?php
        
$warning = <<<EOD
ENTER DATA

EOD;
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('text.txt', 'a');

if(empty($_POST['textdata'])){
  echo($warning);
}


fwrite($fp, $data);
fclose($fp);

echo "text file content"." ". file_get_contents("text.txt");


}
?>
