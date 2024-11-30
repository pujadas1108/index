<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="nutridb";
 $ch=mysqli_connect($servername,$username,$password,$database);


if($_REQUEST['submit'] == "Submit")
{

$add= "INSERT INTO mealplan SET
             
             breakfastop1 = '".$_REQUEST['breakfastop1']."',
             breakfastop2 = '".$_REQUEST['breakfastop2']."',
             breakfastop3 = '".$_REQUEST['breakfastop3']."',
             breakfastop4 = '".$_REQUEST['breakfastop4']."',
             breakfastnotes = '".$_REQUEST['breakfastnotes']."',
             msnaksop1 = '".$_REQUEST['msnaksop1']."',
             msnaksop2 = '".$_REQUEST['msnaksop2']."',
             msnaksnotes = '".$_REQUEST['msnaksnotes']."',
             afsnackop1 = '".$_REQUEST['afsnackop1']."',
             afsnackop2 = '".$_REQUEST['afsnackop2']."',
             afsnacknotes = '".$_REQUEST['afsnacknotes']."',
             lappetizerop1 = '".$_REQUEST['lappetizerop1']."',
             lappetizerop2 = '".$_REQUEST['lappetizerop2']."',
             lappetizerop3 = '".$_REQUEST['lappetizerop3']."',
             ldishop1 = '".$_REQUEST['ldishop1']."',
             ldishop2 = '".$_REQUEST['ldishop2']."',
             ldishop3 = '".$_REQUEST['ldishop3']."',
             ldishop4 = '".$_REQUEST['ldishop4']."',
             ldishop5 = '".$_REQUEST['ldishop5']."',
             ldishop6 = '".$_REQUEST['ldishop6']."',
             ldessert = '".$_REQUEST['ldessert']."',
             lbeverageop1 = '".$_REQUEST['lbeverageop1']."',
             lbeverageop2 = '".$_REQUEST['lbeverageop2']."',
             lbeveragenotes = '".$_REQUEST['lbeveragenotes']."',
             dappetizerop1 = '".$_REQUEST['dappetizerop1']."',
             dappetizerop2 = '".$_REQUEST['dappetizerop2']."',
             ddishop1 = '".$_REQUEST['ddishop1']."',
             ddishop2 = '".$_REQUEST['ddishop2']."',
             ddishop3 = '".$_REQUEST['ddishop3']."',
             ddishop4 = '".$_REQUEST['ddishop4']."',
             ddessertop1 = '".$_REQUEST['ddessertop1']."',
             ddessertop2 = '".$_REQUEST['ddessertop2']."',
             dbeverageop1 = '".$_REQUEST['dbeverageop1']."',
             dbeverageop2 = '".$_REQUEST['dbeverageop2']."',
             dbeveragenotes = '".$_REQUEST['dbeveragenotes']."'
		";
		
$result=mysqli_query($ch,$add);
if($result)
{
    echo "success";
}
else
{
    "not".mysqli_error($ch);
}

//header("location:nutrium_link.html");	

}
?>