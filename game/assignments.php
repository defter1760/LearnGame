<?PHP
require('mySQLconnect.php');
$typeint = rand(1, 1);

if($typeint == '1')
{
    $type = 'command';

    $query = "SELECT count(*) as COUNT
		FROM commands as";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $commandcount= $line['COUNT'];
    }
    echo 'COUNT:';
echo $commandcount;    
    $correctint = rand(1, 6);
}
if($typeint == '2')
{
    $type = 'context';
}
if($typeint == '3')
{
    $type = 'reversecommand';
}
if($typeint == '4')

$type = 'command';
$question = 'cp';
    $a = 'copy a file';
    $b = 'b';
    $c = 'c';
    $d = 'd';
    $e = 'e';
    $f = 'f';
?>