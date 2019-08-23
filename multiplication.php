

<?php
$servername="121.200.55.60:3307";
$username="2019UIT1129";
$password="2019UIT1129";
$dbname="2019UIT1129";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
 die("connection failed:".mysqli_connect_error());
}
echo "connected successful<br />";
$trunc="truncate table multiplication_table";
mysqli_query($conn,$trunc);
echo"table truncate <br />";
for($i=1;$i<=30;$i++)
{
$result=$i*5;
$sql="insert into multiplication_table(mulitiplicand,multiplier,result)values('$i',5,'$result')";
$res=mysqli_query($conn,$sql);
echo "success $res <br/>";
mysqli_close($con);

}
?>



