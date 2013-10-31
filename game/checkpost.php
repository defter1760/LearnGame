<?PHP
require('mySQLconnect.php');
#echo 'checkpost';
#print_r($_POST);
$submitted_type = $_POST['type'];
$submitted_answer = $_POST['answer'];
$submitted_question = $_POST['question'];
if(empty($submitted_type))
{
    unset($submitted_type);
}

if($submitted_type == 'command')
{
    $query = "SELECT description FROM commands where command='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['description'];
    }


}    
if($submitted_type == 'reversecommand')
{
    $query = "SELECT command FROM commands where description='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['command'];
    }
}
if(isset($submitted_type))
{
    if(isset($_SESSION['UserID']))
    {
        $query = "SELECT score FROM userdata where iduserdata = '".$_SESSION['UserID']."'";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
        {
            $oldscore= $line['score'];
        }
    }
    if($truedescription == $submitted_answer)
    {
        
            $oldscore += 1;
            $query = "UPDATE userdata set score='".$oldscore."' where iduserdata = '".$_SESSION['UserID']."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        echo 'That\'s right! '.$submitted_question.'='.$truedescription;
    }
    else
    {
            $oldscore -= 1;
            if($oldscore < 0)
            {
                $oldscore = 0;
            }
            $query = "UPDATE userdata set score='".$oldscore."' where iduserdata = '".$_SESSION['UserID']."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        echo 'Wrong, '.$submitted_question.'='.$truedescription;
    }
}
if(isset($_SESSION['UserID']))
{
    $score = $oldscore;
    if(isset($score))
    {
        echo '<br>Score: '.$score;
    }
}
else
{
    echo '<br> Log in to keep score.';
}



?>