<?PHP

require('mySQLconnect.php');
    #echo 'review';
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
function longWordWrap($string) {
    $string = str_replace("\n", "\n ", $string); // add a space after newline characters, so that 2 words only seperated by \n are not considered as 1 word
    $words = explode(" ", $string); // now split by space
    foreach ($words as $word) {
        $outstring .= chunk_split($word, 12, " ") . " ";
    }
    return $outstring;
}
?>

<html>
<head>
    <style>
        canvas{border: 0px solid #bbb; width:720px; height: 400px;}
        .text{margin: auto; width: 10px;}
    </style>
 
    <script type="text/javascript">
        var can, ctx, step = 50, steps = 255;
              delay = 130;
              var rgbstep = 50;
 
        function init() {
            can = document.getElementById("MyCanvas1");
            ctx= can.getContext("2d");
            ctx.fillStyle = "blue";
            ctx.font = "10pt Helvetica";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            Textfadeup();
            
                             }
 
          function Textfadeup() {
            rgbstep = 255;
            ctx.clearRect(0, 0, can.width, can.height);
            ctx.fillStyle = "rgb(" + rgbstep + "," + rgbstep + "," + rgbstep + ")"
<?PHP
            echo 'ctx.fillText("'.longWordWrap($answer).'", 150, 100);';
?>
            //if (rgbstep < 255)
                //var t = setTimeout('Textfadeup()', 10);
            //if (rgbstep == 255) {
                setTimeout('Textfadedown()', 5000);
            //}
        }
        function Textfadedown() {
rgbstep=rgbstep-1;
            ctx.clearRect(0, 0, can.width, can.height);
            ctx.fillStyle = "rgb(" + rgbstep + "," + rgbstep + "," + rgbstep + ")"
<?PHP
            echo 'ctx.fillText("'.longWordWrap($answer).'", 150, 100);';
?>
            if (rgbstep > 80)
                var t = setTimeout('Textfadedown()', 6);
            if (rgbstep == 80) {
                window.setTimeout(function(){location.reload()},5000);
            }
        }  
    </script>
 
</head>
<body onload="init();">
<?PHP
    echo 'What does "'.$question.'" do?';
?>
    <div class="subdiv">
        <canvas id="MyCanvas1" width="300" height="200">
  This browser or document mode doesn't support canvas object</canvas>
          </div>
</body>
</html>