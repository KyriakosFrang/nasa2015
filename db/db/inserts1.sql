#INSERT JOURNEY
INSERT INTO Journey
VALUES('1','Mars');

INSERT INTO Journey
VALUES('2','Mercury');

INSERT INTO Journey
VALUES('3','Pluto');



#INSERT CURRENT STATE
INSERT INTO Current_State (name)
VALUES('Sleeping');

INSERT INTO Current_State (name)
VALUES('Gymnastics');

INSERT INTO Current_State (name)
VALUES('Outside of Space Station');

INSERT INTO Current_State (name)
VALUES('Relaxing');


###############################INSERT THRESSHOLDS###########################################################################

#INSERT Temperature thressholds
INSERT INTO Temperature_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hypothermia','-2000','34.9','°C');

INSERT INTO Temperature_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','35','37.5','°C');

INSERT INTO Temperature_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Fever or Hyperthermia','37.6','38.3','°C');

INSERT INTO Temperature_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hyperpyrexia','38.4','2000','°C');





#INSERT Airflow thressholds///////////////////////////////////////////////////
INSERT INTO Airflow_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Low','-2000','14.9','bpm');

INSERT INTO Airflow_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','15','30','bpm');

INSERT INTO Airflow_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('High','30.1','2000','bpm');





#INSERT Blood Oxygen thressholds
INSERT INTO Blood_Oxygen_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hypoxic Drive Problem','-2000','94','%');

INSERT INTO Blood_Oxygen_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','94.1','99','%');

INSERT INTO Blood_Oxygen_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Carbon Monoxide Poisoning','99.1','2000','%');




#INSERT Systolic Pressure thressholds
INSERT INTO Systolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hypotension','-2000','89.9','mm Hg');

INSERT INTO Systolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Desired','90','119','mm Hg');

INSERT INTO Systolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Prehypertension','119.1','139','mm Hg');

INSERT INTO Systolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Stage1 Hypertension','139.1','159','mm Hg');

INSERT INTO Systolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Stage2 Hypertension','159.1','179','mm Hg');

INSERT INTO Systolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hypertensive Crisis','179.1','2000','mm Hg');





#INSERT Diastolic Pressure thressholds
INSERT INTO Diastolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hypotension','-2000','59.9','mm Hg');

INSERT INTO Diastolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Desired','60','79','mm Hg');

INSERT INTO Diastolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Prehypertension','79.1','89','mm Hg');

INSERT INTO Diastolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Stage1 Hypertension','89.1','99','mm Hg');

INSERT INTO Diastolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Stage2 Hypertension','99.1','109','mm Hg');

INSERT INTO Diastolic_Pressure_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Hypertensive Crisis','109.1','2000','mm Hg');





#INSERT Muscle intensity thressholds///////////////////////////////////////////////////
INSERT INTO Muscle_Intensity_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Low','-2000','14.9','%');

INSERT INTO Muscle_Intensity_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','15','30','%');

INSERT INTO Muscle_Intensity_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('High','30.1','2000','%');



#INSERT ECG thressholds///////////////////////////////////////////////////
INSERT INTO ECG_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Low','-2000','14.9','cpm');

INSERT INTO ECG_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','15','30','cpm');

INSERT INTO ECG_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('High','30.1','2000','cpm');




#INSERT Contactivity thressholds///////////////////////////////////////////////////
INSERT INTO Contactivity_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Low','-2000','14.9','μs');

INSERT INTO Contactivity_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','15','30','μs');

INSERT INTO Contactivity_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('High','30.1','2000','μs');


#INSERT Pulse thressholds///////////////////////////////////////////////////
INSERT INTO Pulse_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Low','-2000','14.9','ppm');

INSERT INTO Pulse_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','15','30','ppm');

INSERT INTO Pulse_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('High','30.1','2000','ppm');


#INSERT Radiation thressholds///////////////////////////////////////////////////
INSERT INTO Radiation_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Acceptable','10.1','1000','μSv');

INSERT INTO Radiation_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('Normal','-2000','10','μSv');

INSERT INTO Radiation_thressholds (name,min_calc,max_calc,measurement_units)
VALUES('High','1000.1','10000','μSv');




##########################################################################################################################