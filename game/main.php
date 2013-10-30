<?PHP
require('checkpost.php');
require('./score/getplayerscore.php');
require('assignments.php');
echo '<form method=post>';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$a.'">';
        echo 'A) '.$a;
    echo '</form>';    
    echo 'B) '.$b;
    echo 'C) '.$c;
    echo 'D) '.$d;
    echo 'E) '.$e;
    echo 'F) '.$f;
?>