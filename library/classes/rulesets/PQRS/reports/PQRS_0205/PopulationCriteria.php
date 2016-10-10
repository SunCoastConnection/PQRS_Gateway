<?php
/**
 * PQRS Measure 0205 -- Population Criteria
 *
 * Copyright (C) 2016      Suncoast Connection
 * @package PQRS_Gateway 
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <bryan@suncoastconnection.com>
 * @author  Art Eaton <art@suncoastconnection.com>
 */
 
class PQRS_0205_PopulationCriteria implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_0205_InitialPatientPopulation();
    }
    
    public function createNumerators()
    {
        return new PQRS_0205_Numerator();
    }
    
    public function createDenominator()
    {
        return new PQRS_0205_Denominator();
    }
    
    public function createExclusion()
    {
        return new PQRS_0205_Exclusion();
    }
}

?>