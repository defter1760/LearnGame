<?PHP
require('mySQLconnect.php');
#echo 'checkpost';
#print_r($_POST);
$submitted_type = $_POST['type'];
$submitted_answer = $_POST['answer'];
$submitted_question = $_POST['question'];
$date = date('Y').'-'.date('m').'-'.date('d');
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

    if($truedescription == $submitted_answer)
    {
        if($_SESSION['loggedIn'] == true)
        {
            $oldscore += 1;
            $query = "UPDATE userdata set score='".$oldscore."' where iduserdata = '".$_SESSION['UserID']."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
            $query = "INSERT INTO answerhistory (correct, date, userid) VALUES ('y', '".$date."', '".$_SESSION['UserID']."')";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        echo 'Correct! '.$submitted_question.'='.$truedescription;
    }
    else
    {
        if($_SESSION['loggedIn'] == true)
        {
            $oldscore -= 1;
            if($oldscore < 0)
            {
                $oldscore = 0;
            }
            $query = "UPDATE userdata set score='".$oldscore."' where iduserdata = '".$_SESSION['UserID']."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
            $query = "INSERT INTO answerhistory (correct, date, userid) VALUES ('n', '".$date."', '".$_SESSION['UserID']."')";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        echo 'Wrong, '.$submitted_question.'='.$truedescription;
    }
}
if($_SESSION['loggedIn'] == true)
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