<?PHP

require('mySQLconnect.php');

if(isset($_GET['choice']))
{
    $min = '1';
    $max = '5';
    if(($min <= $_GET['choice']) && ($_GET['choice'] <= $max))
    {
        $choiceint = $_GET['choice'];
    }
}
else
{
    $choiceint = rand(1, 5);
}
    switch ($_GET['choice']) {
    case 1:
        $choiceint = '1';
        $choice = 'commands';
        break;
    case 2:
        $choiceint = '2';
        $choice = 'commandadv';
        break;
    case 3:
        $choiceint = '3';
        $choice = 'networking';
        break;
    case 4:
        $choiceint = '4';
        $choice = 'networkingadv';
        break;
    case 5:
        $choiceint = '5';
        $choice = 'scripting';
        break;
    }
    $typeint = rand(1, 2);
    {
        if($typeint == '1')
        {
            if($choice = 'commands')
            {
                $q_desc = 'command';
                $a_desc = 'description';
            }
            else
            {
                $q_desc = 'question';
                $a_desc = 'answer';
            }
        }
        else
        {
            if($choice = 'commands')
            {
                $q_desc = 'description';
                $a_desc = 'command';
            }
            else
            {
                $q_desc = 'answer';
                $a_desc = 'question';
            }
        }
    }

    $query = "SELECT count(*) as COUNT FROM ".$choice;
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $count= $line['COUNT'];
    }

    $selection = rand(1, $count);

    $query = "SELECT * FROM ".$choice." where id='".$selection."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $question= $line[$q_desc];
        $answer= $line[$a_desc];
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

    if($typeint == '1')
    {
        echo 'What does "'.$question.'" do?';
    }
    else
    {
        echo $question;
    }

    ?>
 </title>
</head>
<body>
<h2>
<?PHP

    switch ($choiceint) {
    case 1:
        echo 'Context: Linux commands<br><br>';
        break;
    case 2:
        echo 'Context: Linux commands Adv<br><br>';
        break;
    case 3:
        echo 'Context: Networknig<br><br>';
        break;
    case 4:
        echo 'Context: Networking Adv<br><br>';
        break;
    case 5:
        echo 'Context: Linux bash scripting<br><br>';
        break;
    }

    
?>
</h2>
<h1>
<?PHP

    switch ($choiceint) {
    case 1:
        if($typeint == '1')
        {
            echo 'What does "'.$question.'" do?';
        }
        else
        {
            echo 'Which command? '.$question;
        }
        break;
    case 2:
        if($typeint == '1')
        {
            echo 'What does "'.$question.'" do?';
        }
        else
        {
            echo 'Which command? '.$question;
        }
        break;
    case 3:
        echo 'Context: Networknig<br><br>';
        break;
    case 4:
        echo 'Context: Networking Adv<br><br>';
        break;
    case 5:
        echo 'Context: Linux bash scripting<br><br>';
        break;
    }


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