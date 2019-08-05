<?php
if(isset($_GET['who'])){
    $who=$_GET['who'];
}
echo "<form action=\"photoBack.php\" method=\"post\" enctype=\"multipart/form-data\">
    <label for=\"file\">Filename:</label>
    <input type=\"file\" name=\"file\" id=\"file\" />
    <input type=\"hidden\" name=\"name\" value=\"$who\">
    <br />
    <input type=\"submit\" name=\"submit\" value=\"Submit\" />
</form>";

?>
