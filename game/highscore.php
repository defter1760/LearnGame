<?PHP
#echo '##Highscores';
require('mySQLconnect.php');
    $counter = 0;
    echo '<table border=1>';
        echo '<tr>';
            
        $query = "SELECT username, score FROM userdata ORDER BY score DESC LIMIT 10;";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
        
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
        {
            $counter +=1;
            if($counter == 1)
            {
                echo '<td align="right" valign="top">';
            }
            if($counter == 6)
            {
                echo '</td>';
                echo '<td align="right" valign="top">';
            }
            echo '<strong style="font-size: 10px;">';
            echo $line['username'].' [ '.$line['score'].' ]<br>';
            echo '</strong>';
            #$topusers[]= $line['username'];
            #$topscores[]= $line['score'];
            if($counter == 10)
            {
                echo '</td>';
            }
        }
    echo '</tr>';
echo '</table>';
print_r($line);
?>