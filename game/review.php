<?PHP
    echo 'review';
?>

<html>
<head>
    <style>
        canvas{border: 1px solid #bbb;}
        .subdiv{width: 320px;}
        .text{margin: auto; width: 290px;}
    </style>
 
    <script type="text/javascript">
        var can, ctx, step = 50, steps = 255;
              delay = 30;
              var rgbstep = 50;
 
        function init() {
            can = document.getElementById("MyCanvas1");
            ctx= can.getContext("2d");
            ctx.fillStyle = "blue";
            ctx.font = "40pt Helvetica";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
                     Textfadedown();        }
 
          function Textfadeup() {
            rgbstep++;
            ctx.clearRect(0, 0, can.width, can.height);
            ctx.fillStyle = "rgb(" + rgbstep + "," + rgbstep + "," + rgbstep + ")"
            ctx.fillText("WELCOME", 150, 100);
            if (rgbstep < 255)
                var t = setTimeout('Textfadeup()', 1);
            if (rgbstep == 255) {
                Textfadedown();
            }
        }
        function Textfadedown() {
rgbstep=rgbstep-1;
            ctx.clearRect(0, 0, can.width, can.height);
            ctx.fillStyle = "rgb(" + rgbstep + "," + rgbstep + "," + rgbstep + ")"
            ctx.fillText("WELCOME", 150, 100);
            if (rgbstep > 80)
                var t = setTimeout('Textfadedown()', 20);
            if (rgbstep == 80) {
                Textfadeup();
            }
        }  
    </script>
 
</head>
<body onload="init();">
    <div class="subdiv">
        <canvas id="MyCanvas1" width="300" height="200">
  This browser or document mode doesn't support canvas object</canvas>
          </div>
</body>
</html>