<?php
$servername="localhost";
$username="root";
$password="";
$database="nutridb";
$ch=mysqli_connect($servername,$username,$password,$database);

if($_REQUEST['submit'] == "Submit")
{

$add= "INSERT INTO measurements SET
	           
             Anthropometricweight = '".$_REQUEST['Anthropometricweight']."',
             Anthropometricheight = '".$_REQUEST['Anthropometricheight']."',
             Anthropometricas = '".$_REQUEST['Anthropometricas']."',
             Anthropometriccs = '".$_REQUEST['Anthropometriccs']."',
             Anthropometricfts = '".$_REQUEST['Anthropometricfts']."',
             Anthropometrichc = '".$_REQUEST['Anthropometrichc']."',
             Anthropometricms = '".$_REQUEST['Anthropometricms']."',
             Anthropometricsub = '".$_REQUEST['Anthropometricsub']."',
             Anthropometricsup = '".$_REQUEST['Anthropometricsup']."',
             Anthropometricts = '".$_REQUEST['Anthropometricts']."',
             Anthropometricwc = '".$_REQUEST['Anthropometricwc']."',
             Analyticaldbp = '".$_REQUEST['Analyticaldbp']."',
             Analyticalsbp = '".$_REQUEST['Analyticalsbp']."',
             AnalyticalHDL = '".$_REQUEST['AnalyticalHDL']."',
             AnalyticalLDL = '".$_REQUEST['AnalyticalLDL']."',
             Analyticaltc = '".$_REQUEST['Analyticaltc']."',
             Analyticaltri = '".$_REQUEST['Analyticaltri']."',
             Bodybfp = '".$_REQUEST['Bodybfp']."',
             Bodyfm = '".$_REQUEST['Bodyfm']."',
             Bodymm = '".$_REQUEST['Bodymm']."',
             Bodymmp = '".$_REQUEST['Bodymmp']."',
             Measurementsdate1 = '".$_REQUEST['Measurementsdate1']."',
             Measurementsdate2 = '".$_REQUEST['Measurementsdate2']."',
             Goalsname1 = '".$_REQUEST['Goalsname1']."',
             Goalsname2 = '".$_REQUEST['Goalsname2']."'
		";
		
 $result=mysqli_query($ch,$add);
 if($result)
 {
    echo "success";
 }
 else
{
    echo "not this is a error".mysqli_error($ch);
}

}
?>