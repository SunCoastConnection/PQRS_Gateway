/*
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
ALTER TABLE `clinical_rules`
ADD `pqrs_2015_flag` tinyint;
INSERT INTO `clinical_rules` (`id`, `pid`, `active_alert_flag`, `passive_alert_flag`, `cqm_flag`, `cqm_2011_flag`, `cqm_2014_flag`, `cqm_nqf_code`, `cqm_pqri_code`, `amc_flag`, `amc_2011_flag`, `amc_2014_flag`, `amc_code`, `amc_code_2014`, `amc_2014_stage1_flag`, `amc_2014_stage2_flag`, `patient_reminder_flag`, `developer`, `funding_source`, `release_version`, `web_reference`, `access_control`, `pqrs_2015_flag`) VALUES
('PQRS_0001', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0005', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0006', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0007', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0008', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0012', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0014', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0019', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0021', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0022', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0023', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0024', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0032', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0033', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0039', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0040', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0041', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0043', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0044', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0046', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0047', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0048', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0050', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0051', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0052', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0053', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0054', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0065', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0066', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0067', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0068', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0069', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0070', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0071', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0072', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0076', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0081', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0082', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0091', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0093', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0099', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0100', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0102', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0104', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0109', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0110', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0111', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0112', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0113', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0116', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0117', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0118', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0119', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0121', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0122', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0126', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0127', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0128', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0130', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0131', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0134', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0137', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0138', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0140', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0141', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0143', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0144', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0145', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0146', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0147', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0154', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0155', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0156', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0163', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0164', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0165', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0166', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0167', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0168', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0172', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0173', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0178', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0181', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0182', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0185', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0187', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0191', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0192', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0193', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0194', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0195', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0204', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0205', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0217', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0218', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0219', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0220', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0221', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0222', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0223', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0224', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0225', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0226', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0236', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0238', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0242', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0243', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0249', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0250', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0251', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0254', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0255', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0257', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0258', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0259', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0260', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0261', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0262', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0263', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0264', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0265', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0268', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0270', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0271', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0274', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0275', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0303', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0304', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0317', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0320', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0322', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0323', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0324', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0325', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0326', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0327', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0328', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0329', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0330', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0331', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0332', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0333', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0334', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0335', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0336', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0337', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0342', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0343', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0344', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0345', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0346', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0347', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0348', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0349', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0358', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0383', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0384', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0385', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0386', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0387', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0388', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0389', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0390', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0391', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0392', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0393', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0394', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0395', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0396', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0397', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0398', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0399', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0400', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0401', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_0402', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1),
('PQRS_always_met', 0, 0, 0, 0, NULL, NULL, '', '', 0, 0, 0, '', '', 0, NULL, 0, '', '', '2015', '', 'patients:med', 1);


INSERT INTO `list_options` (`list_id`, `option_id`, `title`, `seq`, `is_default`, `option_value`, `mapping`, `notes`, `codes`, `toggle_setting_1`, `toggle_setting_2`, `activity`) VALUES
('clinical_rules', 'PQRS_0001', 'Measure PQRS_0001', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0005', 'Measure PQRS_0005', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0006', 'Measure PQRS_0006', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0007', 'Measure PQRS_0007', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0008', 'Measure PQRS_0008', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0012', 'Measure PQRS_0012', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0014', 'Measure PQRS_0014', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0019', 'Measure PQRS_0019', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0021', 'Measure PQRS_0021', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0022', 'Measure PQRS_0022', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0023', 'Measure PQRS_0023', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0024', 'Measure PQRS_0024', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0032', 'Measure PQRS_0032', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0033', 'Measure PQRS_0033', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0039', 'Measure PQRS_0039', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0040', 'Measure PQRS_0040', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0041', 'Measure PQRS_0041', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0043', 'Measure PQRS_0043', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0044', 'Measure PQRS_0044', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0046', 'Measure PQRS_0046', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0047', 'Measure PQRS_0047', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0048', 'Measure PQRS_0048', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0050', 'Measure PQRS_0050', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0051', 'Measure PQRS_0051', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0052', 'Measure PQRS_0052', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0053', 'Measure PQRS_0053', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0054', 'Measure PQRS_0054', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0065', 'Measure PQRS_0065', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0066', 'Measure PQRS_0066', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0067', 'Measure PQRS_0067', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0068', 'Measure PQRS_0068', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0069', 'Measure PQRS_0069', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0070', 'Measure PQRS_0070', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0071', 'Measure PQRS_0071', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0072', 'Measure PQRS_0072', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0076', 'Measure PQRS_0076', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0081', 'Measure PQRS_0081', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0082', 'Measure PQRS_0082', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0091', 'Measure PQRS_0091', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0093', 'Measure PQRS_0093', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0099', 'Measure PQRS_0099', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0100', 'Measure PQRS_0100', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0102', 'Measure PQRS_0102', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0104', 'Measure PQRS_0104', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0109', 'Measure PQRS_0109', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0110', 'Measure PQRS_0110', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0111', 'Measure PQRS_0111', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0112', 'Measure PQRS_0112', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0113', 'Measure PQRS_0113', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0116', 'Measure PQRS_0116', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0117', 'Measure PQRS_0117', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0118', 'Measure PQRS_0118', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0119', 'Measure PQRS_0119', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0121', 'Measure PQRS_0121', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0122', 'Measure PQRS_0122', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0126', 'Measure PQRS_0126', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0127', 'Measure PQRS_0127', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0128', 'Measure PQRS_0128', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0130', 'Measure PQRS_0130', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0131', 'Measure PQRS_0131', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0134', 'Measure PQRS_0134', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0137', 'Measure PQRS_0137', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0138', 'Measure PQRS_0138', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0140', 'Measure PQRS_0140', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0141', 'Measure PQRS_0141', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0143', 'Measure PQRS_0143', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0144', 'Measure PQRS_0144', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0145', 'Measure PQRS_0145', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0146', 'Measure PQRS_0146', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0147', 'Measure PQRS_0147', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0154', 'Measure PQRS_0154', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0155', 'Measure PQRS_0155', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0156', 'Measure PQRS_0156', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0163', 'Measure PQRS_0163', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0164', 'Measure PQRS_0164', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0165', 'Measure PQRS_0165', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0166', 'Measure PQRS_0166', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0167', 'Measure PQRS_0167', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0168', 'Measure PQRS_0168', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0172', 'Measure PQRS_0172', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0173', 'Measure PQRS_0173', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0178', 'Measure PQRS_0178', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0181', 'Measure PQRS_0181', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0182', 'Measure PQRS_0182', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0185', 'Measure PQRS_0185', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0187', 'Measure PQRS_0187', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0191', 'Measure PQRS_0191', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0192', 'Measure PQRS_0192', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0193', 'Measure PQRS_0193', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0194', 'Measure PQRS_0194', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0195', 'Measure PQRS_0195', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0204', 'Measure PQRS_0204', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0205', 'Measure PQRS_0205', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0217', 'Measure PQRS_0217', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0218', 'Measure PQRS_0218', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0219', 'Measure PQRS_0219', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0220', 'Measure PQRS_0220', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0221', 'Measure PQRS_0221', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0222', 'Measure PQRS_0222', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0223', 'Measure PQRS_0223', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0224', 'Measure PQRS_0224', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0225', 'Measure PQRS_0225', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0226', 'Measure PQRS_0226', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0236', 'Measure PQRS_0236', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0238', 'Measure PQRS_0238', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0242', 'Measure PQRS_0242', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0243', 'Measure PQRS_0243', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0249', 'Measure PQRS_0249', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0250', 'Measure PQRS_0250', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0251', 'Measure PQRS_0251', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0254', 'Measure PQRS_0254', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0255', 'Measure PQRS_0255', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0257', 'Measure PQRS_0257', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0258', 'Measure PQRS_0258', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0259', 'Measure PQRS_0259', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0260', 'Measure PQRS_0260', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0261', 'Measure PQRS_0261', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0262', 'Measure PQRS_0262', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0263', 'Measure PQRS_0263', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0264', 'Measure PQRS_0264', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0265', 'Measure PQRS_0265', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0268', 'Measure PQRS_0268', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0270', 'Measure PQRS_0270', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0271', 'Measure PQRS_0271', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0274', 'Measure PQRS_0274', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0275', 'Measure PQRS_0275', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0303', 'Measure PQRS_0303', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0304', 'Measure PQRS_0304', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0317', 'Measure PQRS_0317', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0320', 'Measure PQRS_0320', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0322', 'Measure PQRS_0322', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0323', 'Measure PQRS_0323', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0324', 'Measure PQRS_0324', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0325', 'Measure PQRS_0325', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0326', 'Measure PQRS_0326', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0327', 'Measure PQRS_0327', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0328', 'Measure PQRS_0328', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0329', 'Measure PQRS_0329', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0330', 'Measure PQRS_0330', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0331', 'Measure PQRS_0331', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0332', 'Measure PQRS_0332', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0333', 'Measure PQRS_0333', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0334', 'Measure PQRS_0334', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0335', 'Measure PQRS_0335', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0336', 'Measure PQRS_0336', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0337', 'Measure PQRS_0337', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0342', 'Measure PQRS_0342', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0343', 'Measure PQRS_0343', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0344', 'Measure PQRS_0344', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0345', 'Measure PQRS_0345', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0346', 'Measure PQRS_0346', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0347', 'Measure PQRS_0347', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0348', 'Measure PQRS_0348', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0349', 'Measure PQRS_0349', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0358', 'Measure PQRS_0358', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0383', 'Measure PQRS_0383', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0384', 'Measure PQRS_0384', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0385', 'Measure PQRS_0385', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0386', 'Measure PQRS_0386', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0387', 'Measure PQRS_0387', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0388', 'Measure PQRS_0388', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0389', 'Measure PQRS_0389', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0390', 'Measure PQRS_0390', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0391', 'Measure PQRS_0391', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0392', 'Measure PQRS_0392', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0393', 'Measure PQRS_0393', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0394', 'Measure PQRS_0394', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0395', 'Measure PQRS_0395', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0396', 'Measure PQRS_0396', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0397', 'Measure PQRS_0397', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0398', 'Measure PQRS_0398', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0399', 'Measure PQRS_0399', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0400', 'Measure PQRS_0400', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0401', 'Measure PQRS_0401', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_0402', 'Measure PQRS_0402', , 0, 0, '', '', 0, 0, 1),
('clinical_rules', 'PQRS_always_met', 'Measure PQRS_always_met', , 0, 0, '', '', 0, 0, 1);
