<?PHP
require('mySQLconnect.php');
#echo 'checkpost';
#print_r($_POST);
function escape($str)
         {
                 $search=array("\\","\0","\n","\r","\x1a","'",'"');
                 $replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
                 return str_replace($search,$replace,$str);
         }
$submitted_type = $_POST['type'];
$submitted_answer = $_POST['answer'];
$submitted_question = $_POST['question'];
$submitted_type = escape($submitted_type);
$submitted_answer = escape($submitted_answer);
$submitted_question = escape($submitted_question);

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

if($submitted_type == 'reverseosi')
{
    $query = "SELECT question FROM osi where answer='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['question'];
    }
}
if($submitted_type == 'osi')
{
    $query = "SELECT answer FROM osi where question='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['answer'];
    }
}
if($submitted_type == 'reverseports')
{
    $query = "SELECT question FROM ports where answer='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['question'];
    }
}
if($submitted_type == 'ports')
{
    $query = "SELECT answer FROM ports where question='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['answer'];
    }
}

if($submitted_type == 'subnets')
{
    $query = "SELECT answer FROM subnet where question='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['answer'];
    }
}
if($submitted_type == 'reversesubnets')
{
    $query = "SELECT question FROM subnet where answer='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['question'];
    }
}
if($submitted_type == 'subnetmasks')
{
    $query = "SELECT netmask FROM subnet where question='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['netmask'];
    }
}
if($submitted_type == 'advcommands')
{
    $query = "SELECT answer FROM advcommands where question='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['answer'];
    }
}
if($submitted_type == 'reverseadvcommands')
{
    $query = "SELECT question FROM advcommands where answer='".$submitted_question."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['question'];
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