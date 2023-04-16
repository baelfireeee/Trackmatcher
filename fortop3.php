<?php 
								 $ar1 = $_POST["R1"]; 
								 $ar2 = $_POST["R2"];
								$ar3 = $_POST["R3"]; 
								 $ar4 = $_POST["R4"];
								$ar5 = $_POST["R5"]; 
								 $ar6 = $_POST["R6"];
								$ar7 = $_POST["R7"]; 
								 $ar8 = $_POST["R8"];								 

								$R1 = $ar1+$ar2+$ar3+$ar4+$ar5+$ar6+$ar7+$ar8;
								$direct_text = 'R = ';
								 $R = $R1*2.5;
						
  
								 $ay1 = $_POST["I1"]; 
								 $ay2 = $_POST["I2"]; 
								$ay3 = $_POST["I3"]; 
								 $ay4 = $_POST["I4"];
								 $ay5 = $_POST["I5"]; 
								 $ay6 = $_POST["I6"]; 
								$ay7 = $_POST["I7"]; 
								 $ay8 = $_POST["I8"];
								 
								 $I1 = $ay1+$ay2+$ay3+$ay4+$ay5+$ay6+$ay7+$ay8;
								$direct_text = 'I = ';
								 $I = $I1*2.5;
								 
								 $ey1 = $_POST["A1"]; 
								 $ey2 = $_POST["A2"]; 
								 $ey3 = $_POST["A3"]; 
								 $ey4 = $_POST["A4"];
								 $ey5 = $_POST["A5"]; 
								 $ey6 = $_POST["A6"]; 
								 $ey7 = $_POST["A7"]; 
								 $ey8 = $_POST["A8"];
								 
								 $A1 = $ey1+$ey2+$ey3+$ey4+$ey5+$ey6+$ey7+$ey8;
								$direct_text = 'A = ';
								 $A = $A1*2.5;
								
								 $es1 = $_POST["S1"]; 
								 $es2 = $_POST["S2"]; 
								 $es3 = $_POST["S3"]; 
								 $es4 = $_POST["S4"];
								 $es5 = $_POST["S5"]; 
								 $es6 = $_POST["S6"]; 
								 $es7 = $_POST["S7"]; 
								 $es8 = $_POST["S8"];
								 
								 $S1 = $es1+$es2+$es3+$es4+$es5+$es6+$es7+$es8;
								$direct_text = 'S = ';
								 $S = $S1*2.5;
								
								 $ih1 = $_POST["E1"]; 
								 $ih2 = $_POST["E2"]; 
								 $ih3 = $_POST["E3"]; 
								 $ih4 = $_POST["E4"];
								 $ih5 = $_POST["E5"]; 
								 $ih6 = $_POST["E6"]; 
								 $ih7 = $_POST["E7"]; 
								 $ih8 = $_POST["E8"];

								 
								 $E1 = $ih1+$ih2+$ih3+$ih4+$ih5+$ih6+$ih7+$ih8;
								$direct_text = 'E = ';
								 $E = $E1*2.5;
								
								 
								 $si1 = $_POST["C1"]; 
								 $si2 = $_POST["C2"]; 
								 $si3 = $_POST["C3"]; 
								 $si4 = $_POST["C4"];
								 $si5 = $_POST["C5"]; 
								 $si6 = $_POST["C6"]; 
								 $si7 = $_POST["C7"]; 
								 $si8 = $_POST["C8"];								 
								 
								 $C1 = $si1+$si2+$si3+$si4+$si5+$si6+$si7+$si8;
								 $C = $C1*2.5;
								
								$direct_text = 'C = ';
								  $n = array($R,$I,$A,$S,$E,$C);
								  
								  
								  ?>
								  <?php 
								  arsort($n);
									$top3 = array_keys($n);
									$uno = $n[$top3[0]];
									$dos = $n[$top3[1]];
									$tres = $n[$top3[2]];
									
									/*for triple*/
									if ($uno == $dos && $dos == $tres){
										if ($uno == $R && $dos == $I && $tres == $A){
											$result1 = 'R';
											$result2 = 'I';
											$result3 = 'A';
											$result = 'RIA';
											
										}else if ($uno == $R && $dos == $I && $tres == $S){
											$result = 'RIS';
											$result1 = 'R';
											$result2 = 'I';
											$result3 = 'S';
											
										}else if ($uno == $R && $dos == $I && $tres == $E){
											$result = 'RIE';
											$result1 = 'R';
											$result2 = 'I';
											$result3 = 'E';
											
										}else if ($uno == $R && $dos == $I && $tres == $C){
											$result = 'RIC';
											$result1 = 'R';
											$result2 = 'I';
											$result3 = 'C';
											
										}else if ($uno == $R && $dos == $A && $tres == $S){
											$result = 'RAS';
											$result1 = 'R';
											$result2 = 'A';
											$result3 = 'S';
											
										}else if ($uno == $R && $dos == $A && $tres == $E){
											$result = 'RAE';
											$result1 = 'R';
											$result2 = 'A';
											$result3 = 'E';
											
										}else if ($uno == $R && $dos == $A && $tres == $C){
											$result = 'RAC';
											$result1 = 'R';
											$result2 = 'A';
											$result3 = 'C';
											
										}else if ($uno == $R && $dos == $S && $tres == $E){
											$result = 'RSE';
											$result1 = 'R';
											$result2 = 'S';
											$result3 = 'E';
											
										}else if ($uno == $R && $dos == $S && $tres == $C){
											$result = 'RSC';
											$result1 = 'R';
											$result2 = 'S';
											$result3 = 'C';
											
										}else if ($uno == $R && $dos == $E && $tres == $C){
											$result = 'REC';
											$result1 = 'R';
											$result2 = 'E';
											$result3 = 'C';
											
										}else if ($uno == $I && $dos == $A && $tres == $S){
											$result = 'IAS';
											$result1 = 'I';
											$result2 = 'A';
											$result3 = 'S';
											
										}else if ($uno == $I && $dos == $A && $tres == $E){
											$result = 'IAE';
											$result1 = 'I';
											$result2 = 'A';
											$result3 = 'E';
											
										}else if ($uno == $I && $dos == $A && $tres == $C){
											$result = 'IAC';
											$result1 = 'I';
											$result2 = 'A';
											$result3 = 'C';
											
										}else if ($uno == $I && $dos == $S && $tres == $E){
											$result = 'ISE';
											$result1 = 'I';
											$result2 = 'S';
											$result3 = 'E';
											
										}else if ($uno == $I && $dos == $S && $tres == $C){
											$result = 'ISC';
											$result1 = 'I';
											$result2 = 'S';
											$result3 = 'C';
											
										}else if ($uno == $I && $dos == $E && $tres == $C){
											$result = 'IEC';
											$result1 = 'I';
											$result2 = 'E';
											$result3 = 'C';
											
										}else if ($uno == $A && $dos == $S && $tres == $E){
											$result = 'ASE';
											$result1 = 'A';
											$result2 = 'S';
											$result3 = 'E';
											
										}else if ($uno == $A && $dos == $S && $tres == $C){
											$result = 'ASC';
											$result1 = 'A';
											$result2 = 'S';
											$result3 = 'C';
											
										}else if ($uno == $A && $dos == $E && $tres == $C){
											$result = 'AEC';
											$result1 = 'A';
											$result2 = 'E';
											$result3 = 'C';
											
										}
									}else if ($uno == $dos && $dos != $tres){
										if($uno == $R && $dos == $I){
											$result1 = 'R';
											$result2 = 'I';
										}else if($uno == $R && $dos == $A){
											$result1 = 'R';
											$result2 = 'A';
										}else if($uno == $R && $dos == $S){
											$result1 = 'R';
											$result2 = 'S';
										}else if($uno == $R && $dos == $E){
											$result1 = 'R';
											$result2 = 'E';
										}else if($uno == $R && $dos == $C){
											$result1 = 'R';
											$result2 = 'C';
										}else if($uno == $I && $dos == $A){
											$result1 = 'I';
											$result2 = 'A';
										}else if($uno == $I && $dos == $S){
											$result1 = 'I';
											$result2 = 'S';
										}else if($uno == $I && $dos == $E){
											$result1 = 'I';
											$result2 = 'E';
										}else if($uno == $I && $dos == $C){
											$result1 = 'I';
											$result2 = 'C';
										}else if($uno == $A && $dos == $S){
											$result1 = 'A';
											$result2 = 'S';
										}else if($uno == $A && $dos == $E){
											$result1 = 'A';
											$result2 = 'E';
										}else if($uno == $A && $dos == $C){
											$result1 = 'A';
											$result2 = 'C';
										}else if($uno == $S && $dos == $E){
											$result1 = 'S';
											$result2 = 'E';
										}else if($uno == $S && $dos == $C){
											$result1 = 'S';
											$result2 = 'C';
										}else if($uno == $E && $dos == $C){
											$result1 = 'E';
											$result2 = 'C';
										}
										
												if ($tres == $R){
												$result3 = 'R';
											}else if ($tres == $I){
												$result3 = 'I';
											}else if ($tres == $A){
												$result3 = 'A';
											}else if ($tres == $S){
												$result3 = 'S';
											}else if ($tres == $E){
												$result3 = 'E';
											}else if ($tres == $C){
												$result3 = 'C';
											}
											$result = $result1.$result2.$result3;
										
									}else if ($uno != $dos && $dos == $tres){
											if ($uno == $R){
												$result1 = 'R';
											}else if ($uno == $I){
												$result1 = 'I';
											}else if ($uno == $A){
												$result1 = 'A';
											}else if ($uno == $S){
												$result1 = 'S';
											}else if ($uno == $E){
												$result1 = 'E';
											}else if ($uno == $C){
												$result1 = 'C';
											}
										
										if($dos == $R && $tres == $I){
											$result2 = 'RI';
										}else if($dos == $R && $tres == $A){
											$result2 = 'RA';
										}else if($dos == $R && $tres == $S){
											$result2 = 'RS';
										}else if($dos == $R && $tres == $E){
											$result2 = 'RE';
										}else if($dos == $R && $tres == $C){
											$result2 = 'RC';
										}else if($dos == $I && $tres == $A){
											$result2 = 'IA';
										}else if($dos == $I && $tres == $S){
											$result2 = 'IS';
										}else if($dos == $I && $tres == $E){
											$result2 = 'IE';
										}else if($dos == $I && $tres == $C){
											$result2 = 'IC';
										}else if($dos == $A && $tres == $S){
											$result2 = 'AS';
										}else if($dos == $A && $tres == $E){
											$result2 = 'AE';
										}else if($dos == $A && $tres == $C){
											$result2 = 'AC';
										}else if($dos == $S && $tres == $E){
											$result2 = 'SE';
										}else if($dos == $S && $tres == $C){
											$result2 = 'SC';
										}else if($dos == $E && $tres == $C){
											$result2 = 'EC';
										}
										$result = $result1.$result2;
										
										
									}else if($uno != $dos && $dos != $tres){
											if ($uno == $R){
												$result1 = 'R';
											}else if ($uno == $I){
												$result1 = 'I';
											}else if ($uno == $A){
												$result1 = 'A';
											}else if ($uno == $S){
												$result1 = 'S';
											}else if ($uno == $E){
												$result1 = 'E';
											}else if ($uno == $C){
												$result1 = 'C';
											}
											
											if ($dos == $R){
												$result2 = 'R';
											}else if ($dos == $I){
												$result2 = 'I';
											}else if ($dos == $A){
												$result2 = 'A';
											}else if ($dos == $S){
												$result2 = 'S';
											}else if ($dos == $E){
												$result2 = 'E';
											}else if ($dos == $C){
												$result2 = 'C';
											}
											
											if ($tres == $R){
												$result3 = 'R';
											}else if ($tres == $I){
												$result3 = 'I';
											}else if ($tres == $A){
												$result3 = 'A';
											}else if ($tres == $S){
												$result3 = 'S';
											}else if ($tres == $E){
												$result3 = 'E';
											}else if ($tres == $C){
												$result3 = 'C';
											}
											$result = $result1.$result2.$result3;
									}
									?> 