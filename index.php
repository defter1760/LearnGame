<html>
    <style>
        html, body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #111;
	background: #fff;
	margin: 0;
	padding: 0;
	text-align: left;
	height: 100%;
	overflow: auto;
}
    </style>
    <body>
<?PHP
if($_SERVER['REMOTE_ADDR'] == '75.115.139.95')
{
    $banned = 'y';
}
if($_SERVER['REMOTE_ADDR'] == '204.8.156.142')
{
    $banned = 'y';
}
if($_SERVER['REMOTE_ADDR'] == '83.244.243.210')
{
    $banned = 'y';
}
require('./game/head.php');

#require('style.php');
//echo 'Learn the ins and outs of Linux while playing a game!';
//echo date('M').' '.date('d').' '.date('Y');

echo '<table border=0 width="995px">';
    echo '<tr height="50px">';
        echo '<td width="50px">';
            #echo '<a href="http://in0.us/LearnGame?review=1">[review]</a> <a href="http://in0.us/LearnGame/">[game]</a>';
            echo 'Highscores:';
        echo '</td>';
        echo '<td>';
            require('./game/highscore.php');
        echo '</td>';
        echo '<td width="215px">';
        if($banned == 'y')
        {}
        else
        {
            require('./game/access.php');
        }
            
            #echo '[Login] [User] [*Pass]';
        echo '</td>';
    echo '</tr>';
            $underint = rand(1, 2);
            if($underint == '1')
            {
                echo '<tr height="90px">';
                    echo '<td>';
                    echo '</td>';
                    echo '<td>';
                        require('./ads/LGUnderHS.php');
                    echo '</td>';
                    echo '<td >';
                    echo '</td>';
                echo '</tr>';
            }
        echo '<tr height="600px">';
            echo '<td>';
            echo '</td>';
            echo '<td valign="top">';
            echo '<table style="border:solid 2px" border="2" width="100%">';
                echo '<tr>';
                    echo "<td>";
                        if($_GET['review'] == '1')
                        {
                            require('./game/review.php');
                        }
                        else
                        {
                            require('./game/main.php');  
                        }
                    echo '</td>';
                echo '</tr>';
            echo '</table>';
            echo '</td>';
            echo '<td >';
            $underint3 = rand(1, 2);
            if($underint3 == '1')
            {
                require('./ads/LGRightBar.php');
            }                        
            echo '</td>';
    echo '</tr>';

            $underint2 = rand(1, 2);
            if($underint2 == '2')
            {
                echo '<tr height="90px">';
                    echo '<td>';
                    echo '</td>';
                    echo '<td>';
                        require('./ads/LGUnderGame.php');
                    echo '</td>';
                    echo '<td >';
                    echo '</td>';
                echo '</tr>';
            }


    echo '<tr>';
        echo '<td>';
        echo '</td>';
        echo '<td>';
        if($_SESSION['loggedIn'] == true)
        {
            echo 'Your correct vs incorrect per day.';
        //require("./game/pchart213/class/pData.class.php");
        //require("./game/pchart213/class/pDraw.class.php");
        //require("./game/pchart213/class/pImage.class.php");
        //require('./game/pchart213/examples/example.drawThreshold.labels.score_14_days.php');
        echo '<iframe src="http://in0.us/LearnGame/game/pchart213/examples/example.drawThreshold.labels.score_14_days.php?su='.$_SESSION['UserID'].'" seamless="seamless" width="728px" height="330px" scrolling="no"></iframe>';
        }
        else
        {
            echo 'Log in for your score per day chart.';
        }
        echo '</td>';
        echo '<td >';
        echo '</td>';
    echo '</tr>';
echo '</table>';
echo 'Learn some Systems Administration stuff while playing a game! Study for the Red Hat Certified System Administrator (RHCSA) and Red Hat Certified Engineer (RHCE).';
?>
</body>
</html>