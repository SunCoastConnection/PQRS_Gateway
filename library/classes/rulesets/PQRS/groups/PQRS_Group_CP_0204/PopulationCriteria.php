<?php
/**
 * PQRS Measure Group_CP_204 -- Population Criteria
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package OpenEMR
 * @link    http://suncoastconnection.com
 * @author  Bryan lee <leebc 11 at acm dot org>
 * @author  Suncoast Connection
 */
 
class PQRS_Group_CP_0204_PopulationCriteria implements PQRSPopulationCriteriaFactory
{
    public function getTitle()
    {
        return "Population Criteria";
    }
    
    public function createInitialPatientPopulation()
    {
        return new PQRS_Group_CP_0204_InitialPatientPopulation();
    }
    
    public function createNumerators()
    {
        return new PQRS_Group_CP_0204_Numerator();
    }
    
    public function createDenominator()
    {
        return new PQRS_Group_CP_0204_Denominator();
    }
    
    public function createExclusion()
    {
        return new PQRS_Group_CP_0204_Exclusion();
    }
}

?>
