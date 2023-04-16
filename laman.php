<p>Welcome <?php echo $_POST["name"]; ?><br></p>
<p><?php 
 $ar1 = $_POST["R1"]; 
 $ar2 = $_POST["R2"];
 $ar3 = $_POST["R3"]; 
 $ar4 = $_POST["R4"]; 

$R = $ar1+$ar2+$ar3+$ar4;
$direct_text = 'R = ';

echo ($direct_text.$R);

?></p>
<p><?php  
 $ay1 = $_POST["I1"]; 
 $ay2 = $_POST["I2"]; 
 $ay3 = $_POST["I3"]; 
 $ay4 = $_POST["I4"]; 
 
 $I = $ay1+$ay2+$ay3+$ay4;
$direct_text = 'I = ';

echo ($direct_text.$I);
 
 ?></p>
<p><?php  $ey1 = $_POST["A1"]; 
 $ey2 = $_POST["A2"]; 
 $ey3 = $_POST["A3"]; 
 $ey4 = $_POST["A4"]; 
 
 $A = $ey1+$ey2+$ey3+$ey4;
$direct_text = 'A = ';

echo ($direct_text.$A);
 
 ?></p>
<p><?php  $es1 = $_POST["S1"]; 
 $es2 = $_POST["S2"]; 
 $es3 = $_POST["S3"]; 
 $es4 = $_POST["S4"];
 
 $S = $es1+$es2+$es3+$es4;
$direct_text = 'S = ';

echo ($direct_text.$S);
 
?></p>
<p><?php  $ih1 = $_POST["E1"]; 
 $ih2 = $_POST["E2"]; 
 $ih3 = $_POST["E3"]; 
 $ih4 = $_POST["E4"]; 
 
 $E = $ih1+$ih2+$ih3+$ih4;
$direct_text = 'E = ';

echo ($direct_text.$E);
 
 ?></p>
<p><?php  $si1 = $_POST["C1"]; 
 $si2 = $_POST["C2"]; 
 $si3 = $_POST["C3"]; 
 $si4 = $_POST["C4"]; 
 
 $C = $si1+$si2+$si3+$si4;
$direct_text = 'C = ';

echo ($direct_text.$C);
 
  ?></p>
