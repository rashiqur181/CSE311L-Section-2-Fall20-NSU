<?php

$link = mysqli_connect("localhost","root","","cselab311_section_2_fall_20");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO Employees (Employee_Id, First_Name, Last_Name, Email, Phone_Number, Hire_Date, Job_Id, Salary, Commission_pct, Manager_id, Department_id) VALUES (100,'Steven','King','SKING','515.123.4567','2006-06-17','AD_PRESS',24000,NULL,NULL,90),
(101,'Neena','Kochar','NKOCHAR','515.123.4568','2008-09-21','AD_VP',17000,NULL,100,90),
(102,'Lex','De haan','DEHAAN','515.123.4569','2009-01-13','AD_VP',17000,NULL,100,90),
(103,'Alexander','Hunold','AHUNOLD','590.423.4567','2008-01-03','IT_PROG',9000,NULL,102,60),
(104,'Bruce','Ernst','BERNST','590.423.4568','2009-05-21','IT_PROG',6000,NULL,103,60),
(107,'Diana','Lorentz','DLORENTZ','590.423.5567','2008-02-07','IT_PROG',4200,NULL,103,60),
(124,'Kevin','Mourgos','KMORGOS','650.123.5234','2012-11-16','ST_MAN',5800,NULL,100,50),
(141,'Treena','Rajs','RRAJS','650.121.5234','2004-10-17','ST_CLERK',3500,NULL,124,50),
(142,'Curtis','Davies','CDAVIES','121.123.5234','2007-01-29','ST_CLERK',3100,NULL,124,50),
(143,'Randall','Matos','RMATOS','121.123.5234','2008-03-15','ST_CLERK',2600,NULL,124,50),
(144,'Peter','Vargas','PVARGAS','121.123.5234','2008-07-09','ST_CLERK',2500,NULL,124,50),
(149,'Eleni','Zlotkey','EZLOTKEY','44.1344.429018','2014-01-29','SA_MAN',10500,.2,100,80),
(174,'Ellen','Abel','EABEL','44.1644.429017','2004-05-11','SA_REP',11000,.3,149,80),
(176,'Jnathon','Taylor','JTAILOR','44.1644.429021','2008-03-24','SA_MAN',8600,.2,149,80),
(178,'Kimberely','Grant','KGRANT','44.1644.429023','2009-05-24','SA_MAN',7000,.15,149,NULL),
(200,'Jennifer','Whalem','JWHALEN','515.123.4444','2003-09-17','AD_ASST',4400,NULL,101,10),
(201,'Michael','Hartstein','MHARSTEIN','515.123.5555','2008-02-17','MK_MAN',13000,NULL,100,20),
(202,'Pat','Fay','PFAY','603.123.6666','2010-08-17','MK_REP',6000,NULL,201,20),
(205,'Shelley','Higgins','SHIGGINS','515.123.8050','2007-06-07','AC_MGR',12000,NULL,101,110),
(206,'William','Gietz','WGIETZ','515.123.8181','2007-06-07','AC_ACCOUNT',8300,NULL,205,110)";



if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>