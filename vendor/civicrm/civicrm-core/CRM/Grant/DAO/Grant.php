<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Grant/Grant.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:a2e43b7f0fb8547daf5ed874bf6174c5)
 */

/**
 * Database access object for the Grant entity.
 */
class CRM_Grant_DAO_Grant extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.8';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_grant';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-money';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Grant id
   *
   * @var int
   */
  public $id;

  /**
   * Contact ID of contact record given grant belongs to.
   *
   * @var int
   */
  public $contact_id;

  /**
   * Date on which grant application was received by donor.
   *
   * @var date
   */
  public $application_received_date;

  /**
   * Date on which grant decision was made.
   *
   * @var date
   */
  public $decision_date;

  /**
   * Date on which grant money transfer was made.
   *
   * @var date
   */
  public $money_transfer_date;

  /**
   * Date on which grant report is due.
   *
   * @var date
   */
  public $grant_due_date;

  /**
   * Yes/No field stating whether grant report was received by donor.
   *
   * @var bool
   */
  public $grant_report_received;

  /**
   * Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.
   *
   * @var int
   */
  public $grant_type_id;

  /**
   * Requested grant amount, in default currency.
   *
   * @var float
   */
  public $amount_total;

  /**
   * Requested grant amount, in original currency (optional).
   *
   * @var float
   */
  public $amount_requested;

  /**
   * Granted amount, in default currency.
   *
   * @var float
   */
  public $amount_granted;

  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;

  /**
   * Grant rationale.
   *
   * @var text
   */
  public $rationale;

  /**
   * Id of Grant status.
   *
   * @var int
   */
  public $status_id;

  /**
   * FK to Financial Type.
   *
   * @var int
   */
  public $financial_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_grant';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Grants');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
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
        'grant_id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant ID'),
          'description' => ts('Unique Grant id'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_grant.id',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'grant_contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('Contact ID of contact record given grant belongs to.'),
          'required' => TRUE,
          'where' => 'civicrm_grant.contact_id',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'type' => 'EntityRef',
          ],
          'add' => '1.8',
        ],
        'grant_application_received_date' => [
          'name' => 'application_received_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Application received date'),
          'description' => ts('Date on which grant application was received by donor.'),
          'import' => TRUE,
          'where' => 'civicrm_grant.application_received_date',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
          'add' => '1.8',
        ],
        'grant_decision_date' => [
          'name' => 'decision_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Decision date'),
          'description' => ts('Date on which grant decision was made.'),
          'import' => TRUE,
          'where' => 'civicrm_grant.decision_date',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
          'add' => '1.8',
        ],
        'grant_money_transfer_date' => [
          'name' => 'money_transfer_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Money transfer date'),
          'description' => ts('Date on which grant money transfer was made.'),
          'import' => TRUE,
          'where' => 'civicrm_grant.money_transfer_date',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
          'add' => '1.8',
        ],
        'grant_due_date' => [
          'name' => 'grant_due_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Report Due Date'),
          'description' => ts('Date on which grant report is due.'),
          'import' => TRUE,
          'where' => 'civicrm_grant.grant_due_date',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
          'add' => '1.8',
        ],
        'grant_report_received' => [
          'name' => 'grant_report_received',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Grant report received'),
          'description' => ts('Yes/No field stating whether grant report was received by donor.'),
          'import' => TRUE,
          'where' => 'civicrm_grant.grant_report_received',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '1.8',
        ],
        'grant_type_id' => [
          'name' => 'grant_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Type'),
          'description' => ts('Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.'),
          'required' => TRUE,
          'where' => 'civicrm_grant.grant_type_id',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'grant_type',
            'optionEditPath' => 'civicrm/admin/options/grant_type',
          ],
          'add' => '1.8',
        ],
        'amount_total' => [
          'name' => 'amount_total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Total Amount'),
          'description' => ts('Requested grant amount, in default currency.'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_grant.amount_total',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.8',
        ],
        'amount_requested' => [
          'name' => 'amount_requested',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount Requested'),
          'description' => ts('Requested grant amount, in original currency (optional).'),
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_grant.amount_requested',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.8',
        ],
        'amount_granted' => [
          'name' => 'amount_granted',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount granted'),
          'description' => ts('Granted amount, in default currency.'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_grant.amount_granted',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.8',
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Grant Currency'),
          'description' => ts('3 character string, value from config setting or input via user.'),
          'required' => TRUE,
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'where' => 'civicrm_grant.currency',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
            'abbrColumn' => 'symbol',
          ],
          'add' => '3.2',
        ],
        'rationale' => [
          'name' => 'rationale',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Grant Rationale'),
          'description' => ts('Grant rationale.'),
          'rows' => 4,
          'cols' => 60,
          'import' => TRUE,
          'where' => 'civicrm_grant.rationale',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'grant_status_id' => [
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Status'),
          'description' => ts('Id of Grant status.'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_grant.status_id',
          'export' => FALSE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'grant_status',
            'optionEditPath' => 'civicrm/admin/options/grant_status',
          ],
          'add' => '1.8',
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type'),
          'description' => ts('FK to Financial Type.'),
          'where' => 'civicrm_grant.financial_type_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '4.3',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'grant', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'grant', $prefix, []);
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
      'index_grant_type_id' => [
        'name' => 'index_grant_type_id',
        'field' => [
          0 => 'grant_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_grant::0::grant_type_id',
      ],
      'index_status_id' => [
        'name' => 'index_status_id',
        'field' => [
          0 => 'status_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_grant::0::status_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}