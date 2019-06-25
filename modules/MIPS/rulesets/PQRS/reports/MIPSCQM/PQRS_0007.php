<?php
/**
 * PQRS Measure 0007 -- Call to createPopulationCriteria()
 *
 * Copyright (C) 2015 - 2017      Suncoast Connection
  * 
 * LICENSE: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0
 * See the Mozilla Public License for more details. 
 * If a copy of the MPL was not distributed with this file, You can obtain one at https://mozilla.org/MPL/2.0/.
 * 
 * @author  Art Eaton <art@suncoastconnection.com>
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @package LibreEHR 
 * @link    http://suncoastconnection.com
 * @link    http://LibreEHR.org
 *
 * Please support this product by sharing your changes with the LibreEHR.org community.
 */

class PQRS_0007 extends AbstractPQRSReport
{   
    public function createPopulationCriteria()
    {
		$populationCriteria = array();
		$populationCriteria[] = new PQRS_0007_PopulationCriteria1();
		$populationCriteria[] = new PQRS_0007_PopulationCriteria2();   
		return $populationCriteria;    
    }
}

?>