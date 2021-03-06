<?PHP session_start(); ?>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45574302-1', 'in0.us');
  ga('send', 'pageview');

</script>
<title></title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
<style>

select, input[type="text"], textarea {   
    padding: 9px;  
    border: solid 1px #E5E5E5;  
    outline: 0;  
    font: normal 13px/100% Verdana, Tahoma, sans-serif;  
    width: 200px;  
    background: #FFFFFF url('bg_form.png') left top repeat-x;  
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));  
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);  
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    }  

input[type="checkbox"] {   
    padding: 6px;  
    border: solid 1px #E5E5E5;  
    outline: 0;  
    font: normal 13px/100% Verdana, Tahoma, sans-serif;  
    width: 20px;  
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));  
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);  
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    }  
  
input[type="text"],textarea {   
    width: 150px;  
    max-width: 400px;  
    height: 6em;  
    line-height: 150%;
    font: normal 10px/100% Verdana, Tahoma, sans-serif;
    }
    
textarea.index {   
    width: 650px;  
    max-width: 550px;  
    height: 20em;  
    line-height: 150%;
    font: normal 10px/100% Verdana, Tahoma, sans-serif;
    }
textarea.index2 {   
    width: 250px;  
    max-width: 550px;  
    height: 10em;  
    line-height: 100%;
    font: normal 8px/100% Verdana, Tahoma, sans-serif;
    padding: 9px;  
    border: solid 1px #E5E5E5;  
    outline: 0;   
    /*width: 200px;  */
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));  
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);  
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    }    
select.index{   
    padding: 9px;  
    border: solid 1px #E5E5E5;  
    outline: 0;  
    font: normal 13px/100% Verdana, Tahoma, sans-serif;  
    width: 5em;  
    background: #FFFFFF url('bg_form.png') left top repeat-x;  
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));  
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);  
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;  
    }    
input:hover, textarea:hover,  
input:focus, textarea:focus {   
    border-color: #C9C9C9;   
    -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;  
    }  
  
.form label {   
    margin-left: 10px;   
    color: #000;   
    }  
  
input.login[type="submit"] {  
    width: auto;  
    padding: 9px 15px;  
    background: #B20000;  
    border: 0;  
    font-size: 8px;  
    color: #FFFFFF;  
    -moz-border-radius: 5px;  
    -webkit-border-radius: 5px;  
    }

h1 {  
    width: auto;  
    padding: 0px 0px;  
    background: #B20000;  
    border: 0;  
    font-size: 16px;  
    color: #FFFFFF;  
    }
h2 {  
    width: auto;  
    padding: 15px 15px;  
    /*background: #B20000;  */
    border: 0;  
    font-size: 14px;  
    color: #000;  
    }
h3 {  
    width: auto;  
    padding: 0px 0px;  
    background: #000;  
    border: 0;  
    font-size: 12px;  
    color: #fff;  
    }
h4 {  
    width: auto;  
    padding: 3px 3px;  
    /*background: #B20000;  */
    border: 0;  
    font-size: 16px;  
    color: #000;  
    }    
body {
  font-family: 'Open Sans', serif;
    font-size: 10%; 
}
a:link {color:#fff;}      /* unvisited link */
a:visited {color:#fff;}  /* visited link */
a:hover {color:#fff;}  /* mouse over link */
a:active {color:#fff;}  /* selected link */

a.schedule:link {color:#000;}      /* unvisited link */
a.schedule:visited {color:#000;}  /* visited link */
a.schedule:hover {color:#000;}  /* mouse over link */
a.schedule:active {color:#000;}  /* selected link */
</style>

</head>
  <table style="border:1px solid black;" width=100%>
    <tr height="17px">
	<td>
	    <h1>Learning Game for System Administrators</h1>
        </td>
        <tr>
            <td>
                <h3>
                    <a href="http://in0.us/LearnGame/">Game</a>
        <?PHP #echo '<a href="http://in0.us/LearnGame?review=1&choice=1">Review</a>'; ?>
                    <a href=http://in0.us/LearnGame/logout.php>Log out</a>
                </h3>
            </td>
        </tr>