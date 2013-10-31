<?PHP
require('mySQLconnect.php');
#echo 'checkpost';
print_r($_POST);
$submitted_type = $_POST['type'];
$submitted_answer = $_POST['answer'];
$submitted_question = $_POST['question'];

if($submitted_type == 'command')
{
    $query = "SELECT description FROM commands where command='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['description'];
    }

    $query = "SELECT score FROM userdata where iduserdata = '".$_SESSION['UserID']."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $oldscore= $line['score'];
    }
    

    if($truedescription == $submitted_answer)
    {
        
            $newscore = $oldscore++;
            $query = "UPDATE userdata set score='".$newscore."' where iduserdata = '".$_SESSION['UserID']."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        echo 'That\'s right! '.$submitted_question.'='.$truedescription;
    }
    else
    {
            $newscore = $oldscore--;
            $query = "UPDATE userdata set score='".$newscore."' where iduserdata = '".$_SESSION['UserID']."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        echo 'Wrong, '.$submitted_question.'='.$truedescription;
    }
$score = $newscore;
}

if(isset($score))
{
    echo '<br>Score: '.$score;
}


?>