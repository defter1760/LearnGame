<?PHP
echo 'Learn the ins and outs of Linux while playing a game!';
echo date('M').' '.date('d').' '.date('Y');

echo '<table border=2 width="100%">';
    echo '<tr>';
        echo '<td width="200px">';
            echo '<a href="in0.us/LearnGame?review=1">[review]</a> <a href="in0.us/LearnGame/">[game]</a>';
        echo '</td>';
        echo '<td>';
        echo '</td>';
        echo '<td width="200px">';
            echo '[Login] [User] [*Pass]';
        echo '</td>';
    echo '</tr>';
        echo '<tr height="90px">';
            echo '<td>';
            echo '</td>';
            echo '<td>';
                echo '[highscores]';
            echo '</td>';
            echo '<td >';
            echo '</td>';
    echo '</tr>';
    echo '</tr>';
        echo '<tr height="90px">';
            echo '<td>';
            echo '</td>';
            echo '<td>';
                require('./ads/LGUnderHS.php');
                #echo '[ad]';
            echo '</td>';
            echo '<td >';
            echo '</td>';
    echo '</tr>';
    echo '</tr>';
        echo '<tr height="600px">';
            echo '<td>';
            echo '</td>';
            echo '<td valign="top">';
            if($_GET['review'] == '1')
            {
                require('./game/review.php');
            }
            else
            {
                require('./game/main.php');  
            }
            echo '</td>';
            echo '<td >';
                require('./ads/LGRightBar.php');
                #echo '[ad]';            
            echo '</td>';
    echo '</tr>';
    echo '</tr>';
        echo '<tr height="90px">';
            echo '<td>';
            echo '</td>';
            echo '<td>';
                require('./ads/LGUnderGame.php');
                #echo '[ad]';
            echo '</td>';
            echo '<td >';
            echo '</td>';
    echo '</tr>';    
?>