#QUERIES FOR ANDROID

#USER
INSERT INTO User
VALUES('1','Johnny Depp','1963-06-09','70','1.75','john01','12345');

#on login
SELECT User.idUser FROM User WHERE User.Username='' AND User.Password='';  

SELECT * FROM measurements_per_minute;

SELECT * FROM LOGIN;


SELECT * FROM result_of_measurement;

