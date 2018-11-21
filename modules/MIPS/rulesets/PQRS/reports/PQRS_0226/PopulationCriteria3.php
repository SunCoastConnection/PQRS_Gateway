<?php
/**
 * PQRS Measure 0226 -- Population Criteria 3
 *
 * Copyright (C) 2015 - 2017      Suncoast Connection
  * 
 * LICENSE: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0
 * See the Mozilla Public License for more details. 
 * If a copy of the MPL was not distributed with this file, You can obtain one at https://mozilla.org/MPL/2.0/.
 * 
 * @author  Art Eaton <art@suncoastconnection.com>
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @package LibreHealthEHR 
 * @link    http://suncoastconnection.com
 * @link    http://librehealth.io
 *
 * Please support this product by sharing your changes with the LibreHealth.io community.
 */
 
class PQRS_0226_PopulationCriteria3 implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria 3";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_0226_InitialPatientPopulation3();
    }
    
    public function createNumerators()
    {
        return new PQRS_0226_Numerator3();
    }
    
    public function createDenominator()
    {
        return new PQRS_0226_Denominator3();
    }
    
    public function createExclusion()
    {
        return new PQRS_0226_Exclusion3();
    }
}

?>