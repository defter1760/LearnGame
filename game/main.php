<?PHP
require('checkpost.php');
require('./game/score/getplayerscore.php');
require('assignments.php');
echo '<form method=post>';
    echo 'A) ';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$a.'"  style="background:none;border:0;color:#ff0000">';
    echo '</form><br>';    
    echo 'B) '.$b;
    echo 'C) '.$c;
    echo 'D) '.$d;
    echo 'E) '.$e;
    echo 'F) '.$f;
?>