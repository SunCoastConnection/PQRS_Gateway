/* PATCH FILE to include Group Measures 
*  If you try to create another patch file, update the SEQ in the options_list


 * Copyright (C) 2016 Suncoast Connection
 *
 * LICENSE: This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://opensource.org/licenses/gpl-license.php>;.
 *
 * @package OpenEMR
 * @author  Suncoast Connection
 * @author  leebc
 * @link    http://suncoastconnection.com
 * @link    http://www.oemr.org
*/

/*  ALTER TABLE `clinical_rules` ADD `pqrs_2015_flag` tinyint; */
ALTER TABLE `clinical_rules` ADD `pqrs_code` varchar(35);
INSERT INTO `clinical_rules` (`id`, `pid`, `active_alert_flag`, `passive_alert_flag`, `cqm_flag`, `cqm_2011_flag`, `cqm_2014_flag`, `cqm_nqf_code`, `cqm_pqri_code`, `amc_flag`, `amc_2011_flag`, `amc_2014_flag`, `amc_code`, `amc_code_2014`, `amc_2014_stage1_flag`, `amc_2014_stage2_flag`, `patient_reminder_flag`, `developer`, `funding_source`, `release_version`, `web_reference`, `access_control`, `pqrs_code`, `pqrs_2015_flag`) VALUES
('PQRS_Group_AOE_0091', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0091', '1')
('PQRS_Group_AOE_0093', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0093', '1')
('PQRS_Group_AOE_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0130', '1')
('PQRS_Group_AOE_0131', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0131', '1')
('PQRS_Group_AOE_0154', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0154', '1')
('PQRS_Group_AOE_0155', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0155', '1')
('PQRS_Group_AOE_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0226', '1')
('PQRS_Group_AOE_0317', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_AOE_0317', '1')
('PQRS_Group_Asthma_0053', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Asthma_0053', '1')
('PQRS_Group_Asthma_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Asthma_0110', '1')
('PQRS_Group_Asthma_0128', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Asthma_0128', '1')
('PQRS_Group_Asthma_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Asthma_0130', '1')
('PQRS_Group_Asthma_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Asthma_0226', '1')
('PQRS_Group_Asthma_0402', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Asthma_0402', '1')
('PQRS_Group_CABG_0043', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0043', '1')
('PQRS_Group_CABG_0044', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0044', '1')
('PQRS_Group_CABG_0164', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0164', '1')
('PQRS_Group_CABG_0165', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0165', '1')
('PQRS_Group_CABG_0166', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0166', '1')
('PQRS_Group_CABG_0167', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0167', '1')
('PQRS_Group_CABG_0168', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CABG_0168', '1')
('PQRS_Group_CAD_0006', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CAD_0006', '1')
('PQRS_Group_CAD_0007', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CAD_0007', '1')
('PQRS_Group_CAD_0128', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CAD_0128', '1')
('PQRS_Group_CAD_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CAD_0130', '1')
('PQRS_Group_CAD_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CAD_0226', '1')
('PQRS_Group_CAD_0242', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CAD_0242', '1')
('PQRS_Group_Cataracts_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0130', '1')
('PQRS_Group_Cataracts_0191', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0191', '1')
('PQRS_Group_Cataracts_0192', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0192', '1')
('PQRS_Group_Cataracts_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0226', '1')
('PQRS_Group_Cataracts_0303', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0303', '1')
('PQRS_Group_Cataracts_0304', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0304', '1')
('PQRS_Group_Cataracts_0388', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0388', '1')
('PQRS_Group_Cataracts_0389', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Cataracts_0389', '1')
('PQRS_Group_CKD_0047', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CKD_0047', '1')
('PQRS_Group_CKD_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CKD_0110', '1')
('PQRS_Group_CKD_0121', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CKD_0121', '1')
('PQRS_Group_CKD_0122', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CKD_0122', '1')
('PQRS_Group_CKD_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CKD_0130', '1')
('PQRS_Group_CKD_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_CKD_0226', '1')
('PQRS_Group_COPD_0047', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0047', '1')
('PQRS_Group_COPD_0051', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0051', '1')
('PQRS_Group_COPD_0052', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0052', '1')
('PQRS_Group_COPD_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0110', '1')
('PQRS_Group_COPD_0111', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0111', '1')
('PQRS_Group_COPD_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0130', '1')
('PQRS_Group_COPD_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_COPD_0226', '1')
('PQRS_Group_Dementia_0047', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0047', '1')
('PQRS_Group_Dementia_0280', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0280', '1')
('PQRS_Group_Dementia_0281', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0281', '1')
('PQRS_Group_Dementia_0282', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0282', '1')
('PQRS_Group_Dementia_0283', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0283', '1')
('PQRS_Group_Dementia_0284', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0284', '1')
('PQRS_Group_Dementia_0285', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0285', '1')
('PQRS_Group_Dementia_0286', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0286', '1')
('PQRS_Group_Dementia_0287', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0287', '1')
('PQRS_Group_Dementia_0288', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Dementia_0288', '1')
('PQRS_Group_Diabetes_0001', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Diabetes_0001', '1')
('PQRS_Group_Diabetes_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Diabetes_0110', '1')
('PQRS_Group_Diabetes_0117', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Diabetes_0117', '1')
('PQRS_Group_Diabetes_0119', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Diabetes_0119', '1')
('PQRS_Group_Diabetes_0163', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Diabetes_0163', '1')
('PQRS_Group_Diabetes_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Diabetes_0226', '1')
('PQRS_Group_General_Surgery_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0130', '1')
('PQRS_Group_General_Surgery_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0226', '1')
('PQRS_Group_General_Surgery_0354', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0354', '1')
('PQRS_Group_General_Surgery_0355', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0355', '1')
('PQRS_Group_General_Surgery_0356', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0356', '1')
('PQRS_Group_General_Surgery_0357', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0357', '1')
('PQRS_Group_General_Surgery_0358', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Surgery_0358', '1')
('PQRS_Group_HepatitisC_0084', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0084', '1')
('PQRS_Group_HepatitisC_0085', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0085', '1')
('PQRS_Group_HepatitisC_0087', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0087', '1')
('PQRS_Group_HepatitisC_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0130', '1')
('PQRS_Group_HepatitisC_0183', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0183', '1')
('PQRS_Group_HepatitisC_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0226', '1')
('PQRS_Group_HepatitisC_0390', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0390', '1')
('PQRS_Group_HepatitisC_0401', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HepatitisC_0401', '1')
('PQRS_Group_HF_0005', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HF_0005', '1')
('PQRS_Group_HF_0008', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HF_0008', '1')
('PQRS_Group_HF_0047', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HF_0047', '1')
('PQRS_Group_HF_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HF_0110', '1')
('PQRS_Group_HF_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HF_0130', '1')
('PQRS_Group_HF_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HF_0226', '1')
('PQRS_Group_HIVAIDS_0047', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0047', '1')
('PQRS_Group_HIVAIDS_0134', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0134', '1')
('PQRS_Group_HIVAIDS_0160', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0160', '1')
('PQRS_Group_HIVAIDS_0205', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0205', '1')
('PQRS_Group_HIVAIDS_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0226', '1')
('PQRS_Group_HIVAIDS_0338', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0338', '1')
('PQRS_Group_HIVAIDS_0339', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0339', '1')
('PQRS_Group_HIVAIDS_0340', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_HIVAIDS_0340', '1')
('PQRS_Group_IBD_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0110', '1')
('PQRS_Group_IBD_0111', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0111', '1')
('PQRS_Group_IBD_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0226', '1')
('PQRS_Group_IBD_0270', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0270', '1')
('PQRS_Group_IBD_0271', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0271', '1')
('PQRS_Group_IBD_0274', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0274', '1')
('PQRS_Group_IBD_0275', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_IBD_0275', '1')
('PQRS_Group_Oncology_0071', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0071', '1')
('PQRS_Group_Oncology_0072', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0072', '1')
('PQRS_Group_Oncology_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0110', '1')
('PQRS_Group_Oncology_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0130', '1')
('PQRS_Group_Oncology_0143', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0143', '1')
('PQRS_Group_Oncology_0144', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0144', '1')
('PQRS_Group_Oncology_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Oncology_0226', '1')
('PQRS_Group_OPEIR_0359', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_OPEIR_0359', '1')
('PQRS_Group_OPEIR_0360', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_OPEIR_0360', '1')
('PQRS_Group_OPEIR_0361', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_OPEIR_0361', '1')
('PQRS_Group_OPEIR_0362', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_OPEIR_0362', '1')
('PQRS_Group_OPEIR_0363', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_OPEIR_0363', '1')
('PQRS_Group_OPEIR_0364', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_OPEIR_0364', '1')
('PQRS_Group_Parkinsons_0047', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0047', '1')
('PQRS_Group_Parkinsons_0289', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0289', '1')
('PQRS_Group_Parkinsons_0290', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0290', '1')
('PQRS_Group_Parkinsons_0291', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0291', '1')
('PQRS_Group_Parkinsons_0292', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0292', '1')
('PQRS_Group_Parkinsons_0293', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0293', '1')
('PQRS_Group_Parkinsons_0294', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Parkinsons_0294', '1')
('PQRS_Group_Preventive_0039', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0039', '1')
('PQRS_Group_Preventive_0048', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0048', '1')
('PQRS_Group_Preventive_0110', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0110', '1')
('PQRS_Group_Preventive_0111', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0111', '1')
('PQRS_Group_Preventive_0112', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0112', '1')
('PQRS_Group_Preventive_0113', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0113', '1')
('PQRS_Group_Preventive_0128', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0128', '1')
('PQRS_Group_Preventive_0134', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0134', '1')
('PQRS_Group_Preventive_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Preventive_0226', '1')
('PQRS_Group_RA_0108', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0108', '1')
('PQRS_Group_RA_0128', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0128', '1')
('PQRS_Group_RA_0131', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0131', '1')
('PQRS_Group_RA_0176', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0176', '1')
('PQRS_Group_RA_0177', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0177', '1')
('PQRS_Group_RA_0178', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0178', '1')
('PQRS_Group_RA_0179', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0179', '1')
('PQRS_Group_RA_0180', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_RA_0180', '1')
('PQRS_Group_Sinusitis_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sinusitis_0130', '1')
('PQRS_Group_Sinusitis_0131', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sinusitis_0131', '1')
('PQRS_Group_Sinusitis_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sinusitis_0226', '1')
('PQRS_Group_Sinusitis_0331', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sinusitis_0331', '1')
('PQRS_Group_Sinusitis_0332', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sinusitis_0332', '1')
('PQRS_Group_Sinusitis_0333', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sinusitis_0333', '1')
('PQRS_Group_Sleep_Apnea_0128', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0128', '1')
('PQRS_Group_Sleep_Apnea_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0130', '1')
('PQRS_Group_Sleep_Apnea_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0226', '1')
('PQRS_Group_Sleep_Apnea_0276', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0276', '1')
('PQRS_Group_Sleep_Apnea_0277', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0277', '1')
('PQRS_Group_Sleep_Apnea_0278', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0278', '1')
('PQRS_Group_Sleep_Apnea_0279', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_Sleep_Apnea_0279', '1')
('PQRS_Group_TKR_0130', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_TKR_0130', '1')
('PQRS_Group_TKR_0226', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_TKR_0226', '1')
('PQRS_Group_TKR_0350', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_TKR_0350', '1')
('PQRS_Group_TKR_0351', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_TKR_0351', '1')
('PQRS_Group_TKR_0352', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_TKR_0352', '1')
('PQRS_Group_TKR_0353', '0', '0', '0', '0', NULL, NULL, '', '', '0', '0', '0', '', '', '0', NULL, '0', '', '', '2015', '', 'patients:med', 'PQRS_Group_TKR_0353', '1');



INSERT INTO `list_options` (`list_id`, `option_id`, `title`, `seq`, `is_default`, `option_value`, `mapping`, `notes`, `codes`, `toggle_setting_1`, `toggle_setting_2`, `activity`) VALUES
('clinical_rules', 'PQRS_Group_AOE_0091', 'Measure PQRS_Group_AOE_0091', '6760', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0093', 'Measure PQRS_Group_AOE_0093', '6770', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0130', 'Measure PQRS_Group_AOE_0130', '6780', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0131', 'Measure PQRS_Group_AOE_0131', '6790', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0154', 'Measure PQRS_Group_AOE_0154', '6800', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0155', 'Measure PQRS_Group_AOE_0155', '6810', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0226', 'Measure PQRS_Group_AOE_0226', '6820', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_AOE_0317', 'Measure PQRS_Group_AOE_0317', '6830', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Asthma_0053', 'Measure PQRS_Group_Asthma_0053', '6840', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Asthma_0110', 'Measure PQRS_Group_Asthma_0110', '6850', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Asthma_0128', 'Measure PQRS_Group_Asthma_0128', '6860', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Asthma_0130', 'Measure PQRS_Group_Asthma_0130', '6870', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Asthma_0226', 'Measure PQRS_Group_Asthma_0226', '6880', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Asthma_0402', 'Measure PQRS_Group_Asthma_0402', '6890', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0043', 'Measure PQRS_Group_CABG_0043', '6900', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0044', 'Measure PQRS_Group_CABG_0044', '6910', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0164', 'Measure PQRS_Group_CABG_0164', '6920', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0165', 'Measure PQRS_Group_CABG_0165', '6930', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0166', 'Measure PQRS_Group_CABG_0166', '6940', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0167', 'Measure PQRS_Group_CABG_0167', '6950', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CABG_0168', 'Measure PQRS_Group_CABG_0168', '6960', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CAD_0006', 'Measure PQRS_Group_CAD_0006', '6970', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CAD_0007', 'Measure PQRS_Group_CAD_0007', '6980', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CAD_0128', 'Measure PQRS_Group_CAD_0128', '6990', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CAD_0130', 'Measure PQRS_Group_CAD_0130', '7000', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CAD_0226', 'Measure PQRS_Group_CAD_0226', '7010', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CAD_0242', 'Measure PQRS_Group_CAD_0242', '7020', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0130', 'Measure PQRS_Group_Cataracts_0130', '7030', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0191', 'Measure PQRS_Group_Cataracts_0191', '7040', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0192', 'Measure PQRS_Group_Cataracts_0192', '7050', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0226', 'Measure PQRS_Group_Cataracts_0226', '7060', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0303', 'Measure PQRS_Group_Cataracts_0303', '7070', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0304', 'Measure PQRS_Group_Cataracts_0304', '7080', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0388', 'Measure PQRS_Group_Cataracts_0388', '7090', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Cataracts_0389', 'Measure PQRS_Group_Cataracts_0389', '7100', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CKD_0047', 'Measure PQRS_Group_CKD_0047', '7110', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CKD_0110', 'Measure PQRS_Group_CKD_0110', '7120', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CKD_0121', 'Measure PQRS_Group_CKD_0121', '7130', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CKD_0122', 'Measure PQRS_Group_CKD_0122', '7140', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CKD_0130', 'Measure PQRS_Group_CKD_0130', '7150', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_CKD_0226', 'Measure PQRS_Group_CKD_0226', '7160', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0047', 'Measure PQRS_Group_COPD_0047', '7170', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0051', 'Measure PQRS_Group_COPD_0051', '7180', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0052', 'Measure PQRS_Group_COPD_0052', '7190', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0110', 'Measure PQRS_Group_COPD_0110', '7200', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0111', 'Measure PQRS_Group_COPD_0111', '7210', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0130', 'Measure PQRS_Group_COPD_0130', '7220', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_COPD_0226', 'Measure PQRS_Group_COPD_0226', '7230', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0047', 'Measure PQRS_Group_Dementia_0047', '7240', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0280', 'Measure PQRS_Group_Dementia_0280', '7250', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0281', 'Measure PQRS_Group_Dementia_0281', '7260', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0282', 'Measure PQRS_Group_Dementia_0282', '7270', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0283', 'Measure PQRS_Group_Dementia_0283', '7280', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0284', 'Measure PQRS_Group_Dementia_0284', '7290', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0285', 'Measure PQRS_Group_Dementia_0285', '7300', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0286', 'Measure PQRS_Group_Dementia_0286', '7310', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0287', 'Measure PQRS_Group_Dementia_0287', '7320', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Dementia_0288', 'Measure PQRS_Group_Dementia_0288', '7330', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Diabetes_0001', 'Measure PQRS_Group_Diabetes_0001', '7340', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Diabetes_0110', 'Measure PQRS_Group_Diabetes_0110', '7350', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Diabetes_0117', 'Measure PQRS_Group_Diabetes_0117', '7360', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Diabetes_0119', 'Measure PQRS_Group_Diabetes_0119', '7370', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Diabetes_0163', 'Measure PQRS_Group_Diabetes_0163', '7380', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Diabetes_0226', 'Measure PQRS_Group_Diabetes_0226', '7390', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0130', 'Measure PQRS_Group_General_Surgery_0130', '7400', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0226', 'Measure PQRS_Group_General_Surgery_0226', '7410', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0354', 'Measure PQRS_Group_General_Surgery_0354', '7420', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0355', 'Measure PQRS_Group_General_Surgery_0355', '7430', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0356', 'Measure PQRS_Group_General_Surgery_0356', '7440', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0357', 'Measure PQRS_Group_General_Surgery_0357', '7450', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_General_Surgery_0358', 'Measure PQRS_Group_General_Surgery_0358', '7460', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0084', 'Measure PQRS_Group_HepatitisC_0084', '7470', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0085', 'Measure PQRS_Group_HepatitisC_0085', '7480', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0087', 'Measure PQRS_Group_HepatitisC_0087', '7490', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0130', 'Measure PQRS_Group_HepatitisC_0130', '7500', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0183', 'Measure PQRS_Group_HepatitisC_0183', '7510', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0226', 'Measure PQRS_Group_HepatitisC_0226', '7520', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0390', 'Measure PQRS_Group_HepatitisC_0390', '7530', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HepatitisC_0401', 'Measure PQRS_Group_HepatitisC_0401', '7540', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HF_0005', 'Measure PQRS_Group_HF_0005', '7550', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HF_0008', 'Measure PQRS_Group_HF_0008', '7560', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HF_0047', 'Measure PQRS_Group_HF_0047', '7570', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HF_0110', 'Measure PQRS_Group_HF_0110', '7580', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HF_0130', 'Measure PQRS_Group_HF_0130', '7590', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HF_0226', 'Measure PQRS_Group_HF_0226', '7600', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0047', 'Measure PQRS_Group_HIVAIDS_0047', '7610', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0134', 'Measure PQRS_Group_HIVAIDS_0134', '7620', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0160', 'Measure PQRS_Group_HIVAIDS_0160', '7630', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0205', 'Measure PQRS_Group_HIVAIDS_0205', '7640', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0226', 'Measure PQRS_Group_HIVAIDS_0226', '7650', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0338', 'Measure PQRS_Group_HIVAIDS_0338', '7660', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0339', 'Measure PQRS_Group_HIVAIDS_0339', '7670', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_HIVAIDS_0340', 'Measure PQRS_Group_HIVAIDS_0340', '7680', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0110', 'Measure PQRS_Group_IBD_0110', '7690', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0111', 'Measure PQRS_Group_IBD_0111', '7700', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0226', 'Measure PQRS_Group_IBD_0226', '7710', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0270', 'Measure PQRS_Group_IBD_0270', '7720', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0271', 'Measure PQRS_Group_IBD_0271', '7730', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0274', 'Measure PQRS_Group_IBD_0274', '7740', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_IBD_0275', 'Measure PQRS_Group_IBD_0275', '7750', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0071', 'Measure PQRS_Group_Oncology_0071', '7760', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0072', 'Measure PQRS_Group_Oncology_0072', '7770', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0110', 'Measure PQRS_Group_Oncology_0110', '7780', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0130', 'Measure PQRS_Group_Oncology_0130', '7790', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0143', 'Measure PQRS_Group_Oncology_0143', '7800', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0144', 'Measure PQRS_Group_Oncology_0144', '7810', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Oncology_0226', 'Measure PQRS_Group_Oncology_0226', '7820', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_OPEIR_0359', 'Measure PQRS_Group_OPEIR_0359', '7830', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_OPEIR_0360', 'Measure PQRS_Group_OPEIR_0360', '7840', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_OPEIR_0361', 'Measure PQRS_Group_OPEIR_0361', '7850', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_OPEIR_0362', 'Measure PQRS_Group_OPEIR_0362', '7860', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_OPEIR_0363', 'Measure PQRS_Group_OPEIR_0363', '7870', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_OPEIR_0364', 'Measure PQRS_Group_OPEIR_0364', '7880', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0047', 'Measure PQRS_Group_Parkinsons_0047', '7890', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0289', 'Measure PQRS_Group_Parkinsons_0289', '7900', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0290', 'Measure PQRS_Group_Parkinsons_0290', '7910', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0291', 'Measure PQRS_Group_Parkinsons_0291', '7920', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0292', 'Measure PQRS_Group_Parkinsons_0292', '7930', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0293', 'Measure PQRS_Group_Parkinsons_0293', '7940', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Parkinsons_0294', 'Measure PQRS_Group_Parkinsons_0294', '7950', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0039', 'Measure PQRS_Group_Preventive_0039', '7960', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0048', 'Measure PQRS_Group_Preventive_0048', '7970', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0110', 'Measure PQRS_Group_Preventive_0110', '7980', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0111', 'Measure PQRS_Group_Preventive_0111', '7990', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0112', 'Measure PQRS_Group_Preventive_0112', '8000', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0113', 'Measure PQRS_Group_Preventive_0113', '8010', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0128', 'Measure PQRS_Group_Preventive_0128', '8020', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0134', 'Measure PQRS_Group_Preventive_0134', '8030', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Preventive_0226', 'Measure PQRS_Group_Preventive_0226', '8050', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0108', 'Measure PQRS_Group_RA_0108', '8060', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0128', 'Measure PQRS_Group_RA_0128', '8070', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0131', 'Measure PQRS_Group_RA_0131', '8080', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0176', 'Measure PQRS_Group_RA_0176', '8090', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0177', 'Measure PQRS_Group_RA_0177', '8100', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0178', 'Measure PQRS_Group_RA_0178', '8110', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0179', 'Measure PQRS_Group_RA_0179', '8120', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_RA_0180', 'Measure PQRS_Group_RA_0180', '8130', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sinusitis_0130', 'Measure PQRS_Group_Sinusitis_0130', '8140', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sinusitis_0131', 'Measure PQRS_Group_Sinusitis_0131', '8150', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sinusitis_0226', 'Measure PQRS_Group_Sinusitis_0226', '8160', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sinusitis_0331', 'Measure PQRS_Group_Sinusitis_0331', '8170', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sinusitis_0332', 'Measure PQRS_Group_Sinusitis_0332', '8180', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sinusitis_0333', 'Measure PQRS_Group_Sinusitis_0333', '8190', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0128', 'Measure PQRS_Group_Sleep_Apnea_0128', '8200', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0130', 'Measure PQRS_Group_Sleep_Apnea_0130', '8210', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0226', 'Measure PQRS_Group_Sleep_Apnea_0226', '8220', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0276', 'Measure PQRS_Group_Sleep_Apnea_0276', '8230', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0277', 'Measure PQRS_Group_Sleep_Apnea_0277', '8240', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0278', 'Measure PQRS_Group_Sleep_Apnea_0278', '8250', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_Sleep_Apnea_0279', 'Measure PQRS_Group_Sleep_Apnea_0279', '8260', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_TKR_0130', 'Measure PQRS_Group_TKR_0130', '8270', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_TKR_0226', 'Measure PQRS_Group_TKR_0226', '8280', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_TKR_0350', 'Measure PQRS_Group_TKR_0350', '8290', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_TKR_0351', 'Measure PQRS_Group_TKR_0351', '8300', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_TKR_0352', 'Measure PQRS_Group_TKR_0352', '8310', '0', '0', '', '', '', '0', '0', '1'),
('clinical_rules', 'PQRS_Group_TKR_0353', 'Measure PQRS_Group_TKR_0353', '8320', '0', '0', '', '', '', '0', '0', '1');
