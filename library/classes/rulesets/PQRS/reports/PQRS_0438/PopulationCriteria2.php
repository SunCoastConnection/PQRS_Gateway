<?php
/**
 * PQRS Measure 0438 -- Population Criteria 2
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0438_PopulationCriteria2 implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria 2";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_0438_InitialPatientPopulation2();
    }
    
    public function createNumerators()
    {
        return new PQRS_0438_Numerator2();
    }
    
    public function createDenominator()
    {
        return new PQRS_0438_Denominator2();
    }
    
    public function createExclusion()
    {
        return new PQRS_0438_Exclusion2();
    }
}

?>