<?PHP
require(__DIR__.'/../../sql/mySQLconnect.php');
echo 'checkpost';
print_r($_POST);
$submitted_type = $_POST['type'];
$submitted_answer = $_POST['answer'];
$submitted_question = $_POST['question'];
?>