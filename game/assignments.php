<?PHP
require('mySQLconnect.php');
$typeint = rand(1, 4);

if($typeint == '1')
{
    $type = 'command';

    $query = "SELECT count(*) as COUNT FROM commands";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $commandcount= $line['COUNT'];
    }
    
    $commandselection = rand(1, $commandcount);
    
    $query = "SELECT * FROM commands where id='".$commandselection."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $question= $line['command'];
        $answer= $line['description'];
    }
    
    $query = "SELECT description FROM commands where id != '".$commandselection."' ORDER BY RAND() LIMIT 7";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answers[]= $line['description'];
    }
    
    $a= $answers['1'];
    $b= $answers['2'];
    $c= $answers['3'];
    $d= $answers['4'];
    $e= $answers['5'];
    $f= $answers['6'];
    
    $correctint = rand(1, 6);
    
    switch ($correctint) {
        case 1:
            $a = $answer;
            break;
        case 2:
            $b = $answer;
            break;
        case 3:
            $c = $answer;
            break;
        case 4:
            $d = $answer;
            break;
        case 5:
            $e = $answer;
            break;
        case 6:
            $f = $answer;
            break;   
    }    
}

if($typeint == '2')
{
    $type = 'reversecommand';

    $query = "SELECT count(*) as COUNT FROM commands";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $commandcount= $line['COUNT'];
    }
    
    $commandselection = rand(1, $commandcount);
    
    $query = "SELECT * FROM commands where id='".$commandselection."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answer= $line['command'];
        $question= $line['description'];
    }
    
    $query = "SELECT command FROM commands where id != '".$commandselection."' ORDER BY RAND() LIMIT 7";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answers[]= $line['command'];
    }
    
    $a= $answers['1'];
    $b= $answers['2'];
    $c= $answers['3'];
    $d= $answers['4'];
    $e= $answers['5'];
    $f= $answers['6'];
    
    $correctint = rand(1, 6);
    
    switch ($correctint) {
        case 1:
            $a = $answer;
            break;
        case 2:
            $b = $answer;
            break;
        case 3:
            $c = $answer;
            break;
        case 4:
            $d = $answer;
            break;
        case 5:
            $e = $answer;
            break;
        case 6:
            $f = $answer;
            break;   
    }   
}
if($typeint == '3')
{
    
    $type = 'osi';
    
        
    $query = "SELECT count(*) as COUNT FROM osi";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $commandcount= $line['COUNT'];
    }
    
    $commandselection = rand(1, $commandcount);
    
    $query = "SELECT * FROM osi where osiid='".$commandselection."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answer= $line['answer'];
        $question= $line['question'];
    }
    
    $query = "SELECT answer FROM osi where osiid != '".$commandselection."' ORDER BY RAND() LIMIT 7";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answers[]= $line['answer'];
    }
    
    $a= $answers['1'];
    $b= $answers['2'];
    $c= $answers['3'];
    $d= $answers['4'];
    $e= $answers['5'];
    $f= $answers['6'];
    
    $correctint = rand(1, 6);
    
    switch ($correctint) {
        case 1:
            $a = $answer;
            break;
        case 2:
            $b = $answer;
            break;
        case 3:
            $c = $answer;
            break;
        case 4:
            $d = $answer;
            break;
        case 5:
            $e = $answer;
            break;
        case 6:
            $f = $answer;
            break;   
    } 
}
if($typeint == '4')
{
    $type = 'reverseosi';
    
    $query = "SELECT count(*) as COUNT FROM osi";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $commandcount= $line['COUNT'];
    }
    
    $commandselection = rand(1, $commandcount);
    
    $query = "SELECT * FROM osi where osiid='".$commandselection."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answer= $line['question'];
        $question= $line['answer'];
        $explanation = $line['explanation'];
    }
    
    $query = "SELECT question FROM osi where osiid != '".$commandselection."' ORDER BY RAND() LIMIT 7";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $answers[]= $line['question'];
    }
    
    $a= $answers['1'];
    $b= $answers['2'];
    $c= $answers['3'];
    $d= $answers['4'];
    $e= $answers['5'];
    $f= $answers['6'];
    
    $correctint = rand(1, 6);
    
    switch ($correctint) {
        case 1:
            $a = $answer;
            break;
        case 2:
            $b = $answer;
            break;
        case 3:
            $c = $answer;
            break;
        case 4:
            $d = $answer;
            break;
        case 5:
            $e = $answer;
            break;
        case 6:
            $f = $answer;
            break;   
    } 
    
}
if($typeint == '5')
{
    $type = 'networkingadv';
}
//$type = 'command';
//$question = 'cp';
//    $a = 'copy a file';
//    $b = 'b';
//    $c = 'c';
//    $d = 'd';
//    $e = 'e';
//    $f = 'f';
#$type = 'commandsadv';
#$type = 'networking';
?>