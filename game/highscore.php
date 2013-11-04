<?PHP
#echo '##Highscores';
require('mySQLconnect.php');
    $counter = 0;
    echo '<table border=0>';
        echo '<tr>';
            
        $query = "SELECT username, score FROM userdata WHERE score >0 ORDER BY score DESC LIMIT 30;";
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
                $counter = 0;
            }
            
        }
    echo '</tr>';
echo '</table>';
print_r($line);
?>