<?PHP
require('checkpost.php');
#require('./game/score/getplayerscore.php');
require('assignments.php');
echo '<br><br>';
if($type == 'command')
{
    echo 'What does "'.$question.'" do?';
}
if($type == 'reversecommand')
{
    echo 'Choose the correct command: "'.$question.'" ?';
}
if($type == 'osi')
{
    echo 'Which layer is "'.$question.'"?';
}
if($type == 'reverseosi')
{
    echo 'Choose the correct layer: "'.$explanation.'" ?';
}

if($type == 'ports')
{
    echo 'Which port does "'.$question.'" use?';
}
if($type == 'reverseports')
{
    echo 'Which service uses port "'.$question.'" ?';
}
if($type == 'subnets')
{
    echo 'How many addresses does a "'.$question.'" CIDR network have?';
}
if($type == 'reversesubnets')
{
    echo 'Which CIDR network type has "'.$question.'" addresses ('.($question - 2).' hosts) ?';
}
if($type == 'subnetmasks')
{
    echo 'Which netmask does a "'.$question.' CIDR network require?" ?';
}
echo '<form method=post>';
    echo 'A) ';
    echo '<input type=hidden name=type value="'.$type.'">';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$a.'"  style="background:none;border:0;color:#000000">';
    echo '</form><br>';    
echo '<form method=post>';
    echo 'B) ';
    echo '<input type=hidden name=type value="'.$type.'">';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$b.'"  style="background:none;border:0;color:#000000">';
    echo '</form><br>';
echo '<form method=post>';
    echo 'C) ';
    echo '<input type=hidden name=type value="'.$type.'">';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$c.'"  style="background:none;border:0;color:#000000">';
    echo '</form><br>';
echo '<form method=post>';
    echo 'D) ';
    echo '<input type=hidden name=type value="'.$type.'">';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$d.'"  style="background:none;border:0;color:#000000">';
    echo '</form><br>';
 echo '<form method=post>';
    echo 'E) ';
    echo '<input type=hidden name=type value="'.$type.'">';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$e.'"  style="background:none;border:0;color:#000000">';
    echo '</form><br>';     
echo '<form method=post>';
    echo 'F) ';
    echo '<input type=hidden name=type value="'.$type.'">';
    echo '<input type=hidden name=question value="'.$question.'">';
    echo '<input type=submit name=answer value="'.$f.'"  style="background:none;border:0;color:#000000">';
    echo '</form><br>';          
?>