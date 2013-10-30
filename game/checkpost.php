<?PHP
require('mySQLconnect.php');
echo 'checkpost';
print_r($_POST);
$submitted_type = $_POST['type'];
$submitted_answer = $_POST['answer'];
$submitted_question = $_POST['question'];

if($submitted_type == 'command')
{
    $query = 'SELECT description FROM commands where command='.$submitted_question;
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $truedescription= $line['description'];
    }
    if($truedescription == $submitted_answer)
    {
        echo 'That\'s right!'.$submitted_question.'='.$truedescription;
    }
    else
    {
        echo 'Wrong,'.$submitted_question.'='.$truedescription;
    }
}

?>