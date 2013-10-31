<?PHP

require('mySQLconnect.php');
    #echo 'review';
        $query = "SELECT count(*) as COUNT FROM commands";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $commandcount= $line['COUNT'];
    }

$commandselection = rand(1, $commandcount);

    $query = "SELECT * FROM commands where id='".$commandselection."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $question= $line['command'];
        $answer= $line['description'];
    }
?>

<html>
<head>

    <script>
window.onload = function(){
  // Change this value to however many seconds you want to delay the text by.
  var theDelay = 5;
  var timer = setTimeout("showText()",theDelay*1000)
}
function showText(){
  document.getElementById("delayedText").style.visibility = "visible";
  window.setTimeout(function(){location.reload()},5000);
}
</script>
    
 <title>
    <?PHP
        echo 'What does "'.$question.'" do?';

    ?>
 </title>
</head>
<body>
<h1>
<?PHP
    echo 'What does "'.$question.'" do?';
            echo '<br><br>';
        echo '<div id="delayedText" style="visibility:hidden">
'.$answer.'
</div>';
?>
    <div class="subdiv">
        <canvas id="MyCanvas1">
  This browser or document mode doesn't support canvas object</canvas>
          </div>
</body>
</html>