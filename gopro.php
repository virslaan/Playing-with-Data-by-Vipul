<body style="background-color:lightyellow;">
<?php
 $db = mysqli_connect("localhost", "root", "","test");
 
  $a = $_GET['item'];
  $b = $_GET['cost'];
 
  //echo " $a . 'and' . $b;

$sql = "INSERT INTO list VALUES ('$a','$b') ";

if ($db->query($sql)===TRUE)
 {
    echo "<h2>New record created successfully</h2><br>";
}
 else
 {
    echo "Error: " . $sql . "<br>" . $db->error;
}

?>
<center>
<table border="2" style="color:purple;background-color:FFF0F5;"  >
   <tr>
      <th>Name</th>
      <th>cost</th>
   </tr>

<?php
   
$sql="SELECT * FROM list";

if ($result=mysqli_query($db,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<tr><td>%s</td> <td>(%s)</td></tr>",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}
?>
</table>
</center>
</body>