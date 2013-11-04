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
            require('./game/access.php');
            #echo '[Login] [User] [*Pass]';
        echo '</td>';
    echo '</tr>';
            $underint = rand(1, 5);
            if($underint == '3')
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
            if($_GET['review'] == '1')
            {
                require('./game/review.php');
            }
            else
            {
                require('./game/main.php');  
            }
            echo '</td>';
            echo '<td >';
            $underint3 = rand(1, 2);
            if($underint3 == '1')
            {
                require('./ads/LGRightBar.php');
            }                        
            echo '</td>';
    echo '</tr>';

            $underint2 = rand(1, 3);
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