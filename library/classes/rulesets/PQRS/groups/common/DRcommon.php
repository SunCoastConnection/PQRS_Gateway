<?php
/**
 * PQRS DR 
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */

$query =
"SELECT COUNT(b1.code) as count". 
"  FROM billing AS b1".  
" INNER JOIN billing AS b2 ON (b1.pid = b2.pid)".  
" JOIN form_encounter AS fe ON (b2.encounter = fe.encounter)".
" JOIN patient_data AS p ON (b1.pid = p.pid)". 
" WHERE b1.pid = ? ".  
" AND b1.code IN".  
"('E10.311', 'E10.319', 'E10.321', 'E10.329', 'E10.331', 'E10.339', 'E10.341', 'E10.349', 'E10.351,E10.359', 'E11.311', 'E11.319', 'E11.321', 'E11.329', 'E11.331', 'E11.339', 'E11.341', 'E11.349', 'E11.351', 'E11.359,E13.311', 'E13.319', 'E13.321', 'E13.329', 'E13.331', 'E13.339', 'E13.341', 'E13.349', 'E13.351', 'E13.359')".
" AND YEAR(fe.date) ='2016' ".
" AND (TIMESTAMPDIFF(YEAR,p.dob,fe.date) BETWEEN 18 AND 75)  ".  
" AND b2.code IN". 
"('92002', '92004', '92012', '92014', '99202', '99203', '99204',
'99205', '99212', '99213', '99214', '99215');";
?>