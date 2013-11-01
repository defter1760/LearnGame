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

echo '<table border=2 width="100%">';
    echo '<tr>';
        echo '<td width="50px">';
            #echo '<a href="http://in0.us/LearnGame?review=1">[review]</a> <a href="http://in0.us/LearnGame/">[game]</a>';
        echo '</td>';
        echo '<td>';
        echo '</td>';
        echo '<td width="200px">';
            require('./game/access.php');
            #echo '[Login] [User] [*Pass]';
        echo '</td>';
    echo '</tr>';
        echo '<tr height="90px">';
            echo '<td>';
            echo '</td>';
            echo '<td>';
                echo '[highscores]';
            echo '</td>';
            echo '<td >';
            echo '</td>';
    echo '</tr>';
    echo '</tr>';
        echo '<tr height="90px">';
            echo '<td>';
            echo '</td>';
            echo '<td>';
                require('./ads/LGUnderHS.php');
                #echo '[ad]';
            echo '</td>';
            echo '<td >';
            echo '</td>';
    echo '</tr>';
    echo '</tr>';
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
                require('./ads/LGRightBar.php');
                #echo '[ad]';            
            echo '</td>';
    echo '</tr>';
    echo '</tr>';
        echo '<tr height="90px">';
            echo '<td>';
            echo '</td>';
            echo '<td>';
                require('./ads/LGUnderGame.php');
                #echo '[ad]';
            echo '</td>';
            echo '<td >';
            echo '</td>';
    echo '</tr>';
echo '<tr>';
    echo '<td>';
    echo '</td>';
    echo '<td>';
    //require("./game/pchart213/class/pData.class.php");
    //require("./game/pchart213/class/pDraw.class.php");
    //require("./game/pchart213/class/pImage.class.php");
    //require('./game/pchart213/examples/example.drawThreshold.labels.score_14_days.php');
    echo '<iframe src="http://in0.us/LearnGame/game/pchart213/examples/example.drawThreshold.labels.score_14_days.php?su='.$_SESSION['UserID'].'" seamless="seamless" width="728px" height="330px" scrolling="no"></iframe>';
    echo '</td>';
?>
</body>
</html>