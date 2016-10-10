<?php
/**
 * PQRS Measure 0007 -- Initial Patient Population 1
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0007_InitialPatientPopulation1 implements PQRSFilterIF
{
    public function getTitle() 
    {
        return "Initial Patient Population";
    }
    
    public function test( PQRSPatient $patient, $beginDate, $endDate )
    {
		   $query =
"SELECT COUNT(b1.code) as count ". 
"  FROM billing AS b1".  
" INNER JOIN billing AS b2 ON (b1.pid = b2.pid)". 
" INNER JOIN billing AS b3 ON (b1.pid = b3.pid)".
" JOIN form_encounter AS fe ON (b2.encounter = fe.encounter)".  
" JOIN patient_data AS p ON (b1.pid = p.pid)".
" WHERE b1.pid = ? ". 
" AND fe.date >= '".$beginDate."' ".
" AND fe.date <= '".$endDate."' ".
" AND TIMESTAMPDIFF(YEAR,p.dob,fe.date) >= '18' ". 
" AND".
" ( b1.code IN".  
" ('I20.0','I20.1','I20.8','I20.9','I24.0','I24.1','I24.8','I24.9','I25.10','I25.110','I25.111',".
" 'I25.118','I25.119','I25.5','I25.6','I25.700','I25.701','I25.708','I25.709','I25.710','I25.711','I25.718','I25.719','I25.720','I25.721',".
" 'I25.728','I25.729','I25.730','I25.731','I25.738','I25.739','I25.750','I25.751','I25.758','I25.759','I25.760','I25.761','I25.768','I25.769',".
" 'I25.790','I25.791','I25.798','I25.799','I25.810','I25.811','I25.812','I25.82','I25.83','I25.89','I25.9','Z95.1','Z95.5','Z98.61')".
"OR(".
"b3.code IN".
" ('99201','99202','99203','99204','99205','99212','99213','99214','99215','99304','99305','99306','99307','99308','99309','99310','99324','99325','99326','99327','99328','99334','99335','99336','99337','99341','99342','99343','99344','99345','99347','99348','99349','99350')".
" AND b2.code IN". 
"('33140','33510','33511','33512','33513','33514','33516','33517','33518','33519','33521','33522','33523','33533','33534','33535','33536','92920','92924','92928','92933','92937','92941','92943')".
"));";

$result = sqlFetchArray(sqlStatementNoLog($query, array($patient->id)));
if ($result['count']> 0){ return true;} else {return false;}  
 
    }
}

?>
