<?PHP
echo '##Highscores';
require('mySQLconnect.php');
    $counter = 0;
    echo '<table border=1>';
        echo '<tr>';
            
    $query = "SELECT username, score FROM userdata ORDER BY score DESC LIMIT 10";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $counter +=1;
        if($counter == 1)
        {
            echo '<td>';
                echo $line['username'].' [ '.$line['score'].' ]<br>';
        }
        if($counter == 5)
        {
            echo '</td>';
            echo '<td>';
        }
        #$topusers[]= $line['username'];
        #$topscores[]= $line['score'];
        if($counter == 10)
        {
            echo '</td>';
        }
    }


?>