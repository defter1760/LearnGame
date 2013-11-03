<?php
require('mySQLconnect.php');
require('functions.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['loggedIn']))
{
    $_SESSION['loggedIn'] = false;
}
if (isset($_POST['username']))
{#echo 'Here<br><br>';
$pUser = $_POST['username'];
$pPass = $_POST['password'];
    getuserdetails($pUser,$pPass);

    if($exists == 'Y')
    {
        if (md5($_POST['password']) === $sniperpassmd5)
        {
            $_SESSION['loggedIn'] = true;
            $_SESSION['UserName'] = $pUser;
            $_SESSION['UserID'] = $userid;
            $_SESSION['Email'] = $email;
            $_SESSION['DefaultCoverletter'] = $defaultcoverletter;
            $_SESSION['PrefHourOfDay'] = $prefhourofday;
            decryptthis($_SESSION['UserName'],$emailpassmd5);
            $_SESSION['EmailMD5'] = $decryptedthis;
            $_SESSION['EmailDomain'] = $emaildomain;
            $_SESSION['ReplyToName'] = $replytoname;
        }
        else
        {
            die ('<h1>User exists but, Incorrect password!</h1>');
        }
    }
    else
    {
        echo '<h1>Adding user:<b> '.$_POST['username'];
        echo '</b></h1><h2>Ready to log in.</h2>';
        adduser($_POST['username'],$_POST['password']);
    }
    
}


if (!$_SESSION['loggedIn']):

?>

<?PHP
//echo md5($_POST['password']);
//         echo '<br><br><br>';
//         echo $sniperpassmd5;
//if (sha1('waffle') == '3c24bffe42f67e21d9d4d5dbc01a6eafd9019422')
//{
//    echo 'Woof';
//}

?>
	    <form method="post">
            <table >
                <tr>
                    <td>
                        User: 
                    </td>
                    <td>
                        <input type="password" name="username" size="5px">
                    </td>
                    <td>
                        Pass:
                        <td>
                            <input type="password" name="password" size="5px">
                        </td>
                <td>
                    
                </td>
                    <td align=right>
                        <input style="login" type="submit" name="submit" value="Login">   
                    </td>
                </tr>
                         
                        
                    </td>
                </tr>
            </table>
</form>
<?php
endif;

if ($_SESSION['loggedIn']):
    
    

        $query = "SELECT score FROM userdata where iduserdata = '".$_SESSION['UserID']."'";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());    
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
        {
            $oldscore= $line['score'];
        }
?>
            <table >
                <tr>
                    <td>
                        <?PHP
			    echo 'Logged in as: <b>'.$_SESSION['UserName'].'</b> [ '.$oldscore.' ]';
			?>
                    </td>
                </tr>
            </table>
<?PHP
endif;
?>