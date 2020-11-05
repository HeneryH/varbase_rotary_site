<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Contact/GroupOrganization.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:dfe8edf8f786790af95f09f456d1cbe7)
 */

/**
 * Database access object for the GroupOrganization entity.
 */
class CRM_Contact_DAO_GroupOrganization extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '2.0';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_group_organization';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Relationship ID
   *
   * @var int
   */
  public $id;

  /**
   * ID of the group
   *
   * @var int
   */
  public $group_id;

  /**
   * ID of the Organization Contact
   *
   * @var int
   */
  public $organization_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_group_organization';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Group Organizations');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'group_id', 'civicrm_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'organization_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Organization ID'),
          'description' => ts('Relationship ID'),
          'required' => TRUE,
          'where' => 'civicrm_group_organization.id',
          'table_name' => 'civicrm_group_organization',
          'entity' => 'GroupOrganization',
          'bao' => 'CRM_Contact_BAO_GroupOrganization',
          'localizable' => 0,
          'add' => '2.0',
        ],
        'group_id' => [
          'name' => 'group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group'),
          'description' => ts('ID of the group'),
          'required' => TRUE,
          'where' => 'civicrm_group_organization.group_id',
          'table_name' => 'civicrm_group_organization',
          'entity' => 'GroupOrganization',
          'bao' => 'CRM_Contact_BAO_GroupOrganization',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Group',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '2.0',
        ],
        'organization_id' => [
          'name' => 'organization_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Organization'),
          'description' => ts('ID of the Organization Contact'),
          'required' => TRUE,
          'where' => 'civicrm_group_organization.organization_id',
          'table_name' => 'civicrm_group_organization',
          'entity' => 'GroupOrganization',
          'bao' => 'CRM_Contact_BAO_GroupOrganization',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '2.0',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'group_organization', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'group_organization', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_group_organization' => [
        'name' => 'UI_group_organization',
        'field' => [
          0 => 'group_id',
          1 => 'organization_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_group_organization::1::group_id::organization_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
