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
        canvas{border: 0px solid #bbb; width:700px;}
        .subdiv{width: 720px;}
        .text{margin: auto;}
    </style>
 
    <script type="text/javascript">

        var can, ctx, step = 50, steps = 255;
              delay = 130;
              var rgbstep = 50;
 
        function init() {
            //can = document.getElementById("MyCanvas1");
            //ctx= can.getContext("2d");
            //ctx.fillStyle = "blue";
            //ctx.font = "40pt Helvetica";
            //ctx.textAlign = "center";
            //ctx.textBaseline = "middle";
            setTimeout('answer()', 5000);
            //Textfadeup();
            
                             }
                             
        function answer() {
                var el = document.getElementById('insertHere');
                el.html = '<div>Print this after the script tag</div>';
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
    <script>
window.onload = function(){
  // Change this value to however many seconds you want to delay the text by.
  var theDelay = 5;
  var timer = setTimeout("showText()",theDelay*1000)
}
function showText(){
  document.getElementById("delayedText").style.visibility = "visible";
}
</script>
    
 <title>
    <?PHP
        echo 'What does "'.$question.'" do?';

    ?>
 </title>
</head>
<body <!--onload="init();"-->>
<h1>
<?PHP
    echo 'What does "'.$question.'" do?';
            echo '<br><br>';
        echo '<div id="delayedText" style="visibility:hidden">
This is some delayed text
</div>';
?>
    <div class="subdiv">
        <canvas id="MyCanvas1">
  This browser or document mode doesn't support canvas object</canvas>
          </div>
</body>
</html>