INSERT INTO `civicrm_mapping` (`id`, `name`, `description`, `mapping_type_id`) VALUES (149, NULL, NULL, NULL);

INSERT INTO `civicrm_mapping_field` (`id`, `mapping_id`, `name`, `contact_type`, `column_number`, `location_type_id`, `phone_type_id`, `im_provider_id`, `relationship_type_id`, `relationship_direction`, `grouping`, `operator`, `value`, `website_type_id`) VALUES (3538, 149, 'email', 'Individual', 0, NULL, NULL, NULL, NULL, NULL, 1, '', '', NULL);
INSERT INTO `civicrm_mapping_field` (`id`, `mapping_id`, `name`, `contact_type`, `column_number`, `location_type_id`, `phone_type_id`, `im_provider_id`, `relationship_type_id`, `relationship_direction`, `grouping`, `operator`, `value`, `website_type_id`) VALUES (3539, 149, 'on_hold', 'Individual', 1, NULL, NULL, NULL, NULL, NULL, 1, '=', '1', NULL);

INSERT INTO `civicrm_saved_search` (`id`, `form_values`, `mapping_id`, `search_custom_id`) VALUES (75, 'a:7:{s:5:"qfKey";s:32:"30ba24b74dd8ceb5710384b962004599";s:6:"mapper";a:2:{i:1;a:2:{i:0;a:3:{i:0;s:10:"Individual";i:1;s:5:"email";i:2;s:1:" ";}i:1;a:3:{i:0;s:10:"Individual";i:1;s:7:"on_hold";i:2;s:1:" ";}}i:2;a:1:{i:0;a:1:{i:0;s:0:"";}}}s:8:"operator";a:2:{i:1;a:2:{i:0;s:11:"IS NOT NULL";i:1;s:1:"=";}i:2;a:1:{i:0;s:0:"";}}s:5:"value";a:2:{i:1;a:2:{i:0;s:0:"";i:1;s:1:"1";}i:2;a:1:{i:0;s:0:"";}}s:4:"task";s:2:"13";s:8:"radio_ts";s:6:"ts_all";s:11:"uf_group_id";s:0:"";}', 149, NULL);

INSERT INTO `civicrm_group` (`id`, `name`, `title`, `description`, `source`, `saved_search_id`, `is_active`, `visibility`, `where_clause`, `select_tables`, `where_tables`, `group_type`, `cache_date`, `refresh_date`, `parents`, `children`, `is_hidden`, `is_reserved`, `created_id`) VALUES (242, '_Integrity__emails_on_hold', '@ Integrity - emails on hold', NULL, NULL, 75, 1, 'User and User Admin Only', ' ( `civicrm_group_contact_cache_242`.group_id = 242 ) ', 'a:10:{s:15:"civicrm_contact";i:1;s:15:"civicrm_address";i:1;s:22:"civicrm_state_province";i:1;s:15:"civicrm_country";i:1;s:13:"civicrm_email";i:1;s:13:"civicrm_phone";i:1;s:10:"civicrm_im";i:1;s:19:"civicrm_worldregion";i:1;s:33:"`civicrm_group_contact_cache_242`";s:136:" LEFT JOIN civicrm_group_contact_cache `civicrm_group_contact_cache_242` ON contact_a.id = `civicrm_group_contact_cache_242`.contact_id ";s:6:"gender";i:1;}', 'a:2:{s:15:"civicrm_contact";i:1;s:33:"`civicrm_group_contact_cache_242`";s:136:" LEFT JOIN civicrm_group_contact_cache `civicrm_group_contact_cache_242` ON contact_a.id = `civicrm_group_contact_cache_242`.contact_id ";}', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL);
