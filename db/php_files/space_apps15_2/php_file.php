
 <?php
 
 header('Content-Type: application/json charset=utf-8');
include 'dbconnection.php';
include 'timezone.php';
$conn->query("SET NAMES 'utf8'");
$conn->query("SET CHARACTER SET 'utf8'");





										
							
		                                    
       // Test if our data came through	
	   if (isset($_POST["add_user"])) {
	    // Decode our JSON into PHP objects we can use
	   $obj = json_decode($_POST["add_user"]);
		
		
		
									$stmt = $conn->prepare("INSERT INTO User (idUser,Name_Surname,Date_of_birth,Weight,Height,Username,Password)
VALUES(?,?,?,?,?,?,?)");
									$stmt->bind_param('sssssss',$a,$b,$c,$d,$e,$f,$g);
									$a=$obj->iduser;
									$b=$obj->name_surname;
									$c=$obj->date_of_birth;
									$d=$obj->weight;
									$e=$obj->height;
									$f=$obj->username;
									$g=$obj->password;
									
									
									/*$a='1';
									$b='fdfd';
									$c='2000-01-01';
									$d='12';
									$e='13';
									$f='ee';
									$g='dae';*/
									
									
									$stmt->execute();
									$stmt->close();
									
									$conn->close();
									
									echo json_encode("{status: 200}");
									
									
									
									
									
									
	   }
									
									
									else if (isset($_POST["check_credentials"])) {
	    								// Decode our JSON into PHP objects we can use
	    								$obj = json_decode($_POST["check_credentials"]);
									
									
									$sql = "SELECT User.idUser FROM User WHERE User.Username='".$obj->username."' AND User.Password='".$obj->password."';";
									$result = $conn->query($sql);
									
								
									if ($result->num_rows > 0) {
										$row = $result->fetch_assoc();
										$iduser=$row['idUser'];
										 		
    									
	 								$result->close();
									
									} else {
										$result->close();
										$conn->close();
										$x="-1";
    									echo json_encode($x);
										exit();
	
									}
	   
									
									
									
									
									$conn->close();
							
									echo json_encode($iduser);
									exit();
		
	 
	   
	   
	   } 
	   
	   
	   							else if (isset($_POST["check_journey"])) {
	    								// Decode our JSON into PHP objects we can use
	    								$obj = json_decode($_POST["check_journey"]);
									
									
									$sql = "SELECT Journey_has_User.Journey_idJourney,Journey_has_User.Start_date FROM Journey_has_User WHERE Journey_has_User.User_idUser='".$obj->iduser."' AND ISNULL(Journey_has_User.End_date);";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$row = $result->fetch_assoc();
										$idjourney=$row['Journey_idJourney'];
										$journey_start_date=$row['Start_date']; 		
    									
	 								$result->close();
									
									} else {
										$result->close();
										$conn->close();
    									echo json_encode("-1");
										exit();
	
									}
	   
									
									
									
									
									$conn->close();
									
									echo json_encode($idjourney."_".$journey_start_date);
									exit();
		
	 
	   
	   
	   }
	   
	   /*
	   
	   
	   else if (isset($_POST["end_journey_on_user"])) {
	    // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["end_journey_on_user"]);
		
		
									
			$stmt = $conn->prepare("UPDATE Journey_has_User SET Journey_has_User.End_date=? WHERE Journey_has_User.Journey_idJourney=? AND Journey_has_User.User_idUser=? AND Journey_idJourney.Start_date=?");
			$stmt->bind_param('ssss',$a,$b,$c,$d);
			$a=date('Y-m-d h:i:s');
			$b=$obj->idjourney;
			$c=$obj->iduser;
			$d=$obj->start_date;
			
			
			$stmt->execute();
			$stmt->close();
									
									
			$conn->close();
									
			echo json_encode('DONE');
															
									
									
									
	   }
	   
	   
	  else if (isset($_POST["fetch_journeys"])) {
	     // Decode our JSON into PHP objects we can use
	    
		
		
		
									$sql = "SELECT Journey.idJourney,Journey.name FROM Journey;";
									$result = $conn->query($sql);
									
									$rows = array();
									if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$rows[] = $row;
         								
    								}
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									$conn->close();
									
									echo json_encode($rows);
									
		
	 
	    // Access our object's data and array values.
	   
	   }*/
	   
	   
	   
	   
	       // Test if our data came through	
	   else if (isset($_POST["add_journey_on_user"])) {
	    // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["add_journey_on_user"]);
		
		
									$stmt = $conn->prepare("INSERT INTO Journey_has_User (Journey_idJourney,User_idUser,Start_date)
VALUES(?,?,?)");
									$stmt->bind_param('sss',$a,$b,$c);
									$a=$obj->idjourney;
									$b=$obj->iduser;
									$c=date('Y-m-d h:i:s'); 
									
									
									
									$stmt->execute();
									$stmt->close();
									
									$conn->close();
									
									echo json_encode($obj->idjourney."_".$obj->iduser."_".$c);
									
									
									
									
									
									
	   }
	   
	   /*
	   
	   
	   	  else if (isset($_POST["fetch_states"])) {
	     // Decode our JSON into PHP objects we can use
	    
		
		
		
									$sql = "SELECT Current_State.idCurrent_State,Current_State.Name FROM Current_State;";
									$result = $conn->query($sql);
									
									$rows = array();
									if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$rows[] = $row;
         								
    								}
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									$conn->close();
									
									echo json_encode($rows);
									
		
	 
	    // Access our object's data and array values.
	   
	   } */
	   
	   
	   
	   
	   
	       // Test if our data came through	
	   else if (isset($_POST["add_login"])) {
	    // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["add_login"]);
		
		
									$stmt = $conn->prepare("INSERT INTO Login (Start_session,Current_State_idCurrent_State,Journey_has_User_Journey_idJourney,Journey_has_User_User_idUser,Journey_has_User_Start_date)
VALUES(?,?,?,?,?)");
									$stmt->bind_param('sssss',$a,$b,$c,$d,$e);
									$a=date('Y-m-d h:i:s');
									$b=$obj->curr_state_id;
									$c=$obj->idjourney;
									$d=$obj->iduser;
									$e=$obj->start_date_journey;
									 
									
									
									$stmt->execute();
									$stmt->close();
									
									$last_login_id=$conn->insert_id;
									$conn->close();
									
									
									
									echo json_encode($a."_".$b."_".$c."_".$d."_".$e."_".$last_login_id);
									
									
									
									
									
									
	   }
	   
	   
	   
	   
	   
	   
	   
	   
	         // Test if our data came through	
	   else if (isset($_POST["add_current_measurements"])) {
	    // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["add_current_measurements"]);
		
		
									$stmt = $conn->prepare("INSERT INTO Measurements_per_minute (Login_idLogin,Date_taken,Current_temperature,Current_airflow,Current_blood_oxygen,Current_systolic_pressure,Current_diastolic_pressure,Current_muscle_intensity,Current_ecg,Current_contactivity,Current_pulse,Current_radiation)
VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
									$stmt->bind_param('ssssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l);
									$a=$obj->login_id;
									$b=date('Y-m-d h:i:s');
									$c=$obj->curr_temp;
									$d=$obj->curr_airflow;
									$e=$obj->curr_blood_oxyg;
									$f=$obj->curr_systolic_press;
									$g=$obj->curr_diastolic_press;
									$h=$obj->curr_muscl_intens;
									$i=$obj->curr_ecg;
									$j=$obj->curr_contactivity;
									$k=$obj->curr_pulse;
									$l=$obj->curr_radiation;
									 
									
									
									$stmt->execute();
									$stmt->close();
									
									$conn->close();
									
									echo json_encode($a."_".$b."_".$c."_".$d."_".$e."_".$f."_".$g."_".$h."_".$i."_".$j."_".$k."_".$l);
									
									
									
									
									
									
	   }
	   
	   
	   
	   
	   
	   
	   
	         // Test if our data came through	
	   else if (isset($_POST["add_current_measurements_and_result"])) {
	    // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["add_current_measurements_and_result"]);
		
		
									$stmt = $conn->prepare("INSERT INTO Measurements_per_minute (Login_idLogin,Date_taken,Current_temperature,Current_airflow,Current_blood_oxygen,Current_systolic_pressure,Current_diastolic_pressure,Current_muscle_intensity,Current_ecg,Current_contactivity,Current_pulse,Current_radiation)
VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
									$stmt->bind_param('ssssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l);
									$a=$obj->login_id;
									$b=date('Y-m-d h:i:s');
									$c=$obj->curr_temp;
									$d=$obj->curr_airflow;
									$e=$obj->curr_blood_oxyg;
									$f=$obj->curr_systolic_press;
									$g=$obj->curr_diastolic_press;
									$h=$obj->curr_muscl_intens;
									$i=$obj->curr_ecg;
									$j=$obj->curr_contactivity;
									$k=$obj->curr_pulse;
									$l=$obj->curr_radiation;
									 
									
									
									$stmt->execute();
									$stmt->close();
									
									
									
									
									
									
									
									
									
									
									//RESULTS
									
		
		//calculate results
									//temperature thresshold
									$sql = "SELECT Temperature_thressholds.name FROM Temperature_thressholds WHERE Temperature_thressholds.min_calc<='".$obj->curr_temp."' AND Temperature_thressholds.max_calc>='".$obj->curr_temp."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$temp_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$temp_thress_id='-1';
	
									}
									
									
									
									
									
									
									
												//airflow thresshold
									$sql = "SELECT Airflow_thressholds.name FROM Airflow_thressholds WHERE Airflow_thressholds.min_calc<='".$obj->curr_airflow."' AND Airflow_thressholds.max_calc>='".$obj->curr_airflow."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$airflow_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$airflow_thress_id='-1';
	
									}
		
		
		
		
					//blood oxygen thresshold
									$sql = "SELECT Blood_Oxygen_thressholds.name FROM Blood_Oxygen_thressholds WHERE Blood_Oxygen_thressholds.min_calc<='".$obj->curr_blood_oxyg."' AND Blood_Oxygen_thressholds.max_calc>='".$obj->curr_blood_oxyg."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$blood_oxygen_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$blood_oxygen_thress_id='-1';
	
									}
		
		
		
		//systolic pressure thresshold
									$sql = "SELECT Systolic_Pressure_thressholds.name FROM Systolic_Pressure_thressholds WHERE Systolic_Pressure_thressholds.min_calc<='".$obj->curr_systolic_press."' AND Systolic_Pressure_thressholds.max_calc>='".$obj->curr_systolic_press."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$systolic_press_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$systolic_press_thress_id='-1';
	
									}
									
									
									
									
									
									
									
									
		//diastolic pressure thresshold
									$sql = "SELECT Diastolic_Pressure_thressholds.name FROM Diastolic_Pressure_thressholds WHERE Diastolic_Pressure_thressholds.min_calc<='".$obj->curr_diastolic_press."' AND Diastolic_Pressure_thressholds.max_calc>='".$obj->curr_diastolic_press."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$diastolic_press_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$diastolic_press_thress_id='-1';
	
									}
									
									
									
									
									
									
									
									//muscle intensity thresshold
									$sql = "SELECT Muscle_Intensity_thressholds.name FROM Muscle_Intensity_thressholds WHERE Muscle_Intensity_thressholds.min_calc<='".$obj->curr_muscl_intens."' AND Muscle_Intensity_thressholds.max_calc>='".$obj->curr_muscl_intens."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$muscle_intensity_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$muscle_intensity_thress_id='-1';
	
									}
									
									
									
									
									
									//ECG thresshold
									$sql = "SELECT ECG_thressholds.name FROM ECG_thressholds WHERE ECG_thressholds.min_calc<='".$obj->curr_ecg."' AND ECG_thressholds.max_calc>='".$obj->curr_ecg."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$ecg_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$ecg_thress_id='-1';
	
									}
									
									
									
									
									
									
									//Conductivity thresshold
									$sql = "SELECT Contactivity_thressholds.name FROM Contactivity_thressholds WHERE Contactivity_thressholds.min_calc<='".$obj->curr_contactivity."' AND Contactivity_thressholds.max_calc>='".$obj->curr_contactivity."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$conductivity_thress_id=$row['name'];	
    								
	 								$result->close();
									}
									 else {
										
    									$conductivity_thress_id='-1';
	
									}
		
		
		
		
		
		
		//Pulse thresshold
									$sql = "SELECT Pulse_thressholds.name FROM Pulse_thressholds WHERE Pulse_thressholds.min_calc<='".$obj->curr_pulse."' AND Pulse_thressholds.max_calc>='".$obj->curr_pulse."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$pulse_thress_id=$row['name'];
    								
	 								$result->close();
									}
									 else {
										
    									$pulse_thress_id='-1';
	
									}
									
									
									
									
									
		//Radiation thresshold
									$sql = "SELECT Radiation_thressholds.name FROM Radiation_thressholds WHERE Radiation_thressholds.min_calc<='".$obj->curr_radiation."' AND Radiation_thressholds.max_calc>='".$obj->curr_radiation."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();
										$radiation_thress_id=$row['name'];
    								
	 								$result->close();
									}
									 else {
										
    									$radiation_thress_id='-1';
	
									}
		
		
		//insert results
		
									$stmt = $conn->prepare("INSERT INTO Result_of_measurement (Measurements_per_minute_Login_idLogin,Measurements_per_minute_Date_taken,Temperature_thressholds_id_thresshold,Airflow_thressholds_id_thresshold,Blood_Oxygen_thressholds_id_thresshold,Systolic_Pressure_thressholds_id_thresshold,Diastolic_Pressure_thressholds_id_thresshold,Muscle_Intensity_thressholds_id_thresshold,ECG_thressholds_id_thresshold,Contactivity_thressholds_id_thresshold,Pulse_thressholds_id_thresshold,Radiation_thressholds_id_thresshold)
VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
									$stmt->bind_param('ssssssssssss',$a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,$i1,$j1,$k1,$l1);
									$a1=$obj->login_id;
									$b1=$obj->date_taken;
									$c1=$temp_thress_id;
									$d1=$airflow_thress_id;
									$e1=$blood_oxygen_thress_id;
									$f1=$systolic_press_thress_id;
									$g1=$diastolic_press_thress_id;
									$h1=$muscle_intensity_thress_id;
									$i1=$ecg_thress_id;
									$j1=$conductivity_thress_id;
									$k1=$pulse_thress_id;
									$l1=$radiation_thress_id;
									 
									
									
									$stmt->execute();
									$stmt->close();
		
									
									
									
									
									
									
									
									
									$conn->close();
									
									echo json_encode($a."_".$b."_".$c."_".$d."_".$e."_".$f."_".$g."_".$h."_".$i."_".$j."_".$k."_".$l."####".$c1."_".$d1."_".$e1."_".$f1."_".$g1."_".$h1."_".$i1."_".$j1."_".$k1."_".$l1);
									
									
									
									
									
									
	   }
	   
	   
	   
	   
	   
	   
	   
	   
	   /*
	   
	    else if (isset($_POST["fetch_measurement"])) { //all measurements of a login
	     // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["fetch_measurement"]);
		
		
		
									$sql = "SELECT Measurements_per_minute.* FROM Measurements_per_minute WHERE Measurements_per_minute.Login_idLogin='".$obj->login_id."' AND Measurements_per_minute.Date_taken='".$obj->date_taken."';";
									$result = $conn->query($sql);
									
									$rows = array();
									if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$rows[] = $row;
         								
    								}
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									$conn->close();
									
									echo json_encode($rows);
									
		
	 
	    // Access our object's data and array values.
	   
	   }
	   
	   
	   
	   
	   
	   
	   
	         // Test if our data came through	
	   else if (isset($_POST["add_current_result_measurement"])) {
	    // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["add_current_result_measurement"]);//same as measurements. results will be calculated
		
		
		//calculate results
									//temperature thresshold
									$sql = "SELECT Temperature_thressholds.id_thresshold FROM Temperature_thressholds WHERE Temperature_thressholds.min_calc<='".$obj->curr_temp."' AND Temperature_thressholds.max_calc>='".$obj->curr_temp."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$temp_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									
									
									
									
												//airflow thresshold
									$sql = "SELECT Airflow_thressholds.id_thresshold FROM Airflow_thressholds WHERE Airflow_thressholds.min_calc<='".$obj->curr_airflow."' AND Airflow_thressholds.max_calc>='".$obj->curr_airflow."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$airflow_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
		
		
		
		
					//blood oxygen thresshold
									$sql = "SELECT Blood_Oxygen_thressholds.id_thresshold FROM Blood_Oxygen_thressholds WHERE Blood_Oxygen_thressholds.min_calc<='".$obj->curr_blood_oxyg."' AND Blood_Oxygen_thressholds.max_calc>='".$obj->curr_blood_oxyg."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$blood_oxygen_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
		
		
		
		//systolic pressure thresshold
									$sql = "SELECT Systolic_Pressure_thressholds.id_thresshold FROM Systolic_Pressure_thressholds WHERE Systolic_Pressure_thressholds.min_calc<='".$obj->curr_systolic_press."' AND Systolic_Pressure_thressholds.max_calc>='".$obj->curr_systolic_press."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$systolic_press_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									
									
									
									
									
		//diastolic pressure thresshold
									$sql = "SELECT Diastolic_Pressure_thressholds.id_thresshold FROM Diastolic_Pressure_thressholds WHERE Diastolic_Pressure_thressholds.min_calc<='".$obj->curr_diastolic_press."' AND Diastolic_Pressure_thressholds.max_calc>='".$obj->curr_diastolic_press."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$diastolic_press_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									
									
									
									
									//muscle intensity thresshold
									$sql = "SELECT Muscle_Intensity_thressholds.id_thresshold FROM Muscle_Intensity_thressholds WHERE Muscle_Intensity_thressholds.min_calc<='".$obj->curr_muscl_intens."' AND Muscle_Intensity_thressholds.max_calc>='".$obj->curr_muscl_intens."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$muscle_intensity_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									
									
									//ECG thresshold
									$sql = "SELECT ECG_thressholds.id_thresshold FROM ECG_thressholds WHERE ECG_thressholds.min_calc<='".$obj->curr_ecg."' AND ECG_thressholds.max_calc>='".$obj->curr_ecg."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$ecg_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									
									
									
									//Conductivity thresshold
									$sql = "SELECT Contactivity_thressholds.id_thresshold FROM Contactivity_thressholds WHERE Contactivity_thressholds.min_calc<='".$obj->curr_contactivity."' AND Contactivity_thressholds.max_calc>='".$obj->curr_contactivity."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$conductivity_thress_id=$row['id_thresshold'];	
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
		
		
		
		
		
		
		//Pulse thresshold
									$sql = "SELECT Pulse_thressholds.id_thresshold FROM Pulse_thressholds WHERE Pulse_thressholds.min_calc<='".$obj->curr_pulse."' AND Pulse_thressholds.max_calc>='".$obj->curr_pulse."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$pulse_thress_id=$row['id_thresshold'];
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									
									
		//Radiation thresshold
									$sql = "SELECT Radiation_thressholds.id_thresshold FROM Radiation_thressholds WHERE Radiation_thressholds.min_calc<='".$obj->curr_radiation."' AND Radiation_thressholds.max_calc>='".$obj->curr_radiation."';";
									$result = $conn->query($sql);
									
									
									if ($result->num_rows > 0) {
										$radiation_thress_id=$row['id_thresshold'];
    								
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
		
		
		//insert results
		
									$stmt = $conn->prepare("INSERT INTO Result_of_measurement (Measurements_per_minute_Login_idLogin,Measurements_per_minute_Date_taken,Temperature_thressholds_id_thresshold,Airflow_thressholds_id_thresshold,Blood_Oxygen_thressholds_id_thresshold,Systolic_Pressure_thressholds_id_thresshold,Diastolic_Pressure_thressholds_id_thresshold,Muscle_Intensity_thressholds_id_thresshold,ECG_thressholds_id_thresshold,Contactivity_thressholds_id_thresshold,Pulse_thressholds_id_thresshold,Radiation_thressholds_id_thresshold)
VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
									$stmt->bind_param('ssssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l);
									$a=$obj->login_id;
									$b=$obj->date_taken;
									$c=$temp_thress_id;
									$d=$airflow_thress_id;
									$e=$blood_oxygen_thress_id;
									$f=$systolic_press_thress_id;
									$g=$diastolic_press_thress_id;
									$h=$muscle_intensity_thress_id;
									$i=$ecg_thress_id;
									$j=$conductivity_thress_id;
									$k=$pulse_thress_id;
									$l=$radiation_thress_id;
									 
									
									
									$stmt->execute();
									$stmt->close();
									
									$conn->close();
									
									echo json_encode('DONE');
									
									
									
									
									
									
	   }
	    
	   
	   
	   
	   
	   
	     else if (isset($_POST["fetch_result_measurement_all"])) { //all results of measurements of a login
	     // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["fetch_result_measurement_all"]);
		
		
		
									$sql = "SELECT Result_of_measurement.* FROM Result_of_measurement WHERE Result_of_measurement.Measurements_per_minute_Login_idLogin='".$obj->login_id."' AND Result_of_measurement.Measurements_per_minute_Date_taken='".$obj->date_taken."';";
									$result = $conn->query($sql);
									
									$rows = array();
									if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$rows[] = $row;
         								
    								}
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									$conn->close();
									
									echo json_encode($rows);
									
		
	 
	    // Access our object's data and array values.
	   
	   }
	   
	   
	   
	 
	   
	    else if (isset($_POST["fetch_result_measurement_last"])) { //last result of measurements of a login
	     // Decode our JSON into PHP objects we can use
	    $obj = json_decode($_POST["fetch_result_measurement_last"]);
		
		
		
									$sql = "SELECT Result_of_measurement.* FROM Result_of_measurement WHERE Result_of_measurement.Measurements_per_minute_Login_idLogin='".$obj->login_id."' AND Result_of_measurement.Measurements_per_minute_Date_taken='".$obj->date_taken."' ORDER BY Result_of_measurement.Measurements_per_minute_Date_taken DESC LIMIT 1;";
									$result = $conn->query($sql);
									
									$rows = array();
									if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$rows[] = $row;
         								
    								}
	 								$result->close();
									}
									 else {
										
    									echo json_encode("0 results");
	
									}
									
									
									
									$conn->close();
									
									echo json_encode($rows);
									
		
	 
	    // Access our object's data and array values.
	   
	   }
	   
	   
	   */
	   
	   
	    
		

	 ?>
                                    
