<?php   
 /* CAT:Misc */

 /* pChart library inclusions */
 include("../class/pData.class.php");
 include("../class/pDraw.class.php");
 include("../class/pImage.class.php");
$date = date('Y').'-'.date('m').'-'.date('d');

$tomorrow = mktime(0, 0, 0, date("m"), date("d")-14, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-13, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-12, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-11, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-10, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-9, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-8, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-7, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-6, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-5, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-4, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-3, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-2, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")-1, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;
$today = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
$today= date("Y-m-d", $today);
$datearray[] = $today;
$tomorrow = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
$tomorrow= date("Y-m-d", $tomorrow);
$datearray[] = $tomorrow;

$link = mysql_connect('localhost', 'ian', 'maniacman669')
    or die('Could not connect: ' . mysql_error());
#echo 'Connected successfully';
mysql_select_db('LearnGame') or die('Could not select database');

foreach($datearray as $key => $value)
{
	$currentdate = $value;
	$query2 = "SELECT count(*) as COUNT FROM answerhistory where date='$currentdate' and userid= '".$_SESSION['UserID']."'";            
	$results2 = sqlsrv_query($conn,$query2);
	while($row2 = sqlsrv_fetch_array($results2))
	{
		$countarray[] = $row2['COUNT'];
	}
	$query3 = "SELECT count(*) as COUNT FROM answerhistory where date='$currentdate' and userid= '".$_SESSION['UserID']."' and correct='y'";              
	
	$results3 = sqlsrv_query($conn,$query3);
	while($row3 = sqlsrv_fetch_array($results3))
	{
		$docusignarray[] = $row3['COUNT'];
	}
	
	$query4 = "SELECT count(*) as COUNT FROM answerhistory where date='$currentdate' and userid= '".$_SESSION['UserID']."' and correct='n'";              
	            
	
	$results4 = sqlsrv_query($conn,$query4);
	while($row4 = sqlsrv_fetch_array($results4))
	{
		$notdocusigntarray[] = $row4['COUNT'];
	}
}





	
 /* Create and populate the pData object */
$MyData = new pData();  
$MyData->addPoints($correctarray,"Correct");
$MyData->addPoints($incorrectarray,"Incorrect");

 $MyData->setAxisName(0,"Score");
 $MyData->addPoints($datearray,"Labels");
 $MyData->setSerieDescription("Labels","Months");
 $MyData->setAbscissa("Labels");

 /* Create the pChart object */
 $myPicture = new pImage(1200,630,$MyData);
 $myPicture->drawGradientArea(0,0,1200,630,DIRECTION_VERTICAL,array("StartR"=>100,"StartG"=>100,"StartB"=>100,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>100));
 $myPicture->drawGradientArea(0,0,1200,630,DIRECTION_HORIZONTAL,array("StartR"=>100,"StartG"=>100,"StartB"=>100,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>20));
 $myPicture->drawGradientArea(0,0,60,630,DIRECTION_HORIZONTAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>100));

 /* Do some cosmetics */
 $myPicture->drawLine(60,0,60,630,array("R"=>70,"G"=>70,"B"=>70));
 $myPicture->drawRectangle(0,0,1199,629,array("R"=>0,"G"=>0,"B"=>0));
 $myPicture->setFontProperties(array("FontName"=>"../fonts/Forgotte.ttf","FontSize"=>11));
 $myPicture->drawText(35,115,"Score",array("R"=>255,"G"=>255,"B"=>255,"FontSize"=>20,"Angle"=>90,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE));

 /* Prepare the chart area */
 $myPicture->setGraphArea(100,30,1180,590);
 $myPicture->drawFilledRectangle(100,30,1180,590,array("R"=>255,"G"=>255,"B"=>255,"Alpha"=>20));
 $myPicture->setFontProperties(array("R"=>255,"G"=>255,"B"=>255,"FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>6));
 $myPicture->drawScale(array("AxisR"=>255,"AxisG"=>255,"AxisB"=>255,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE));

 /* Draw one static X threshold area */
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>30));
 $myPicture->setShadow(FALSE);

 /* Draw the chart */
 $myPicture->drawSplineChart();
 $myPicture->drawPlotChart(array("PlotSize"=>5,"PlotBorder"=>TRUE));

 /* Write the data bounds */
 $myPicture->writeBounds();

 /* Write the chart legend */ 
 $myPicture->drawLegend(100,615,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));

 /* Render the picture (choose the best way) */
 $myPicture->autoOutput("pictures/example.drawThreshold.labels.png");
?>