<?php


/**
 * Base static class for performing query and update operations on the 'pac_sales_order_item_transition_log' table.
 *
 *
 *
 * @package propel.generator.vendor/project-a/sales-package/ProjectA/Zed/Sales/Persistence.om
 */
abstract class Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemTransitionLogPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zed';

    /** the table name for this class */
    const TABLE_NAME = 'pac_sales_order_item_transition_log';

    /** the related Propel class for this table */
    const OM_CLASS = 'PacSalesOrderItemTransitionLog';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Generated_Zed_Sales_Persistence_Map_PacSalesOrderItemTransitionLogTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id_sales_order_item_transition_log field */
    const ID_SALES_ORDER_ITEM_TRANSITION_LOG = 'pac_sales_order_item_transition_log.id_sales_order_item_transition_log';

    /** the column name for the fk_sales_order_item field */
    const FK_SALES_ORDER_ITEM = 'pac_sales_order_item_transition_log.fk_sales_order_item';

    /** the column name for the fk_sales_order field */
    const FK_SALES_ORDER = 'pac_sales_order_item_transition_log.fk_sales_order';

    /** the column name for the fk_acl_user field */
    const FK_ACL_USER = 'pac_sales_order_item_transition_log.fk_acl_user';

    /** the column name for the locked field */
    const LOCKED = 'pac_sales_order_item_transition_log.locked';

    /** the column name for the fk_sales_order_process field */
    const FK_SALES_ORDER_PROCESS = 'pac_sales_order_item_transition_log.fk_sales_order_process';

    /** the column name for the event field */
    const EVENT = 'pac_sales_order_item_transition_log.event';

    /** the column name for the hostname field */
    const HOSTNAME = 'pac_sales_order_item_transition_log.hostname';

    /** the column name for the module field */
    const MODULE = 'pac_sales_order_item_transition_log.module';

    /** the column name for the controller field */
    const CONTROLLER = 'pac_sales_order_item_transition_log.controller';

    /** the column name for the action field */
    const ACTION = 'pac_sales_order_item_transition_log.action';

    /** the column name for the params field */
    const PARAMS = 'pac_sales_order_item_transition_log.params';

    /** the column name for the source_state field */
    const SOURCE_STATE = 'pac_sales_order_item_transition_log.source_state';

    /** the column name for the target_state field */
    const TARGET_STATE = 'pac_sales_order_item_transition_log.target_state';

    /** the column name for the commands field */
    const COMMANDS = 'pac_sales_order_item_transition_log.commands';

    /** the column name for the conditions field */
    const CONDITIONS = 'pac_sales_order_item_transition_log.conditions';

    /** the column name for the error field */
    const ERROR = 'pac_sales_order_item_transition_log.error';

    /** the column name for the error_message field */
    const ERROR_MESSAGE = 'pac_sales_order_item_transition_log.error_message';

    /** the column name for the created_at field */
    const CREATED_AT = 'pac_sales_order_item_transition_log.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'pac_sales_order_item_transition_log.updated_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldNames[ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdSalesOrderItemTransitionLog', 'FkSalesOrderItem', 'FkSalesOrder', 'FkAclUser', 'Locked', 'FkSalesOrderProcess', 'Event', 'Hostname', 'Module', 'Controller', 'Action', 'Params', 'SourceState', 'TargetState', 'Commands', 'Conditions', 'Error', 'ErrorMessage', 'CreatedAt', 'UpdatedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idSalesOrderItemTransitionLog', 'fkSalesOrderItem', 'fkSalesOrder', 'fkAclUser', 'locked', 'fkSalesOrderProcess', 'event', 'hostname', 'module', 'controller', 'action', 'params', 'sourceState', 'targetState', 'commands', 'conditions', 'error', 'errorMessage', 'createdAt', 'updatedAt', ),
        BasePeer::TYPE_COLNAME => array (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::LOCKED, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::EVENT, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::HOSTNAME, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::MODULE, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CONTROLLER, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ACTION, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::PARAMS, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::SOURCE_STATE, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TARGET_STATE, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::COMMANDS, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CONDITIONS, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ERROR, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ERROR_MESSAGE, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CREATED_AT, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::UPDATED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_SALES_ORDER_ITEM_TRANSITION_LOG', 'FK_SALES_ORDER_ITEM', 'FK_SALES_ORDER', 'FK_ACL_USER', 'LOCKED', 'FK_SALES_ORDER_PROCESS', 'EVENT', 'HOSTNAME', 'MODULE', 'CONTROLLER', 'ACTION', 'PARAMS', 'SOURCE_STATE', 'TARGET_STATE', 'COMMANDS', 'CONDITIONS', 'ERROR', 'ERROR_MESSAGE', 'CREATED_AT', 'UPDATED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_sales_order_item_transition_log', 'fk_sales_order_item', 'fk_sales_order', 'fk_acl_user', 'locked', 'fk_sales_order_process', 'event', 'hostname', 'module', 'controller', 'action', 'params', 'source_state', 'target_state', 'commands', 'conditions', 'error', 'error_message', 'created_at', 'updated_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdSalesOrderItemTransitionLog' => 0, 'FkSalesOrderItem' => 1, 'FkSalesOrder' => 2, 'FkAclUser' => 3, 'Locked' => 4, 'FkSalesOrderProcess' => 5, 'Event' => 6, 'Hostname' => 7, 'Module' => 8, 'Controller' => 9, 'Action' => 10, 'Params' => 11, 'SourceState' => 12, 'TargetState' => 13, 'Commands' => 14, 'Conditions' => 15, 'Error' => 16, 'ErrorMessage' => 17, 'CreatedAt' => 18, 'UpdatedAt' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idSalesOrderItemTransitionLog' => 0, 'fkSalesOrderItem' => 1, 'fkSalesOrder' => 2, 'fkAclUser' => 3, 'locked' => 4, 'fkSalesOrderProcess' => 5, 'event' => 6, 'hostname' => 7, 'module' => 8, 'controller' => 9, 'action' => 10, 'params' => 11, 'sourceState' => 12, 'targetState' => 13, 'commands' => 14, 'conditions' => 15, 'error' => 16, 'errorMessage' => 17, 'createdAt' => 18, 'updatedAt' => 19, ),
        BasePeer::TYPE_COLNAME => array (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG => 0, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM => 1, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER => 2, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER => 3, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::LOCKED => 4, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS => 5, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::EVENT => 6, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::HOSTNAME => 7, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::MODULE => 8, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CONTROLLER => 9, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ACTION => 10, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::PARAMS => 11, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::SOURCE_STATE => 12, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TARGET_STATE => 13, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::COMMANDS => 14, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CONDITIONS => 15, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ERROR => 16, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ERROR_MESSAGE => 17, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CREATED_AT => 18, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::UPDATED_AT => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_SALES_ORDER_ITEM_TRANSITION_LOG' => 0, 'FK_SALES_ORDER_ITEM' => 1, 'FK_SALES_ORDER' => 2, 'FK_ACL_USER' => 3, 'LOCKED' => 4, 'FK_SALES_ORDER_PROCESS' => 5, 'EVENT' => 6, 'HOSTNAME' => 7, 'MODULE' => 8, 'CONTROLLER' => 9, 'ACTION' => 10, 'PARAMS' => 11, 'SOURCE_STATE' => 12, 'TARGET_STATE' => 13, 'COMMANDS' => 14, 'CONDITIONS' => 15, 'ERROR' => 16, 'ERROR_MESSAGE' => 17, 'CREATED_AT' => 18, 'UPDATED_AT' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id_sales_order_item_transition_log' => 0, 'fk_sales_order_item' => 1, 'fk_sales_order' => 2, 'fk_acl_user' => 3, 'locked' => 4, 'fk_sales_order_process' => 5, 'event' => 6, 'hostname' => 7, 'module' => 8, 'controller' => 9, 'action' => 10, 'params' => 11, 'source_state' => 12, 'target_state' => 13, 'commands' => 14, 'conditions' => 15, 'error' => 16, 'error_message' => 17, 'created_at' => 18, 'updated_at' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getFieldNames($toType);
        $key = isset(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldKeys[$fromType][$name]) ? ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::LOCKED);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::EVENT);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::HOSTNAME);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::MODULE);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CONTROLLER);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ACTION);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::PARAMS);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::SOURCE_STATE);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TARGET_STATE);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::COMMANDS);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CONDITIONS);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ERROR);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ERROR_MESSAGE);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::CREATED_AT);
            $criteria->addSelectColumn(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_order_item_transition_log');
            $criteria->addSelectColumn($alias . '.fk_sales_order_item');
            $criteria->addSelectColumn($alias . '.fk_sales_order');
            $criteria->addSelectColumn($alias . '.fk_acl_user');
            $criteria->addSelectColumn($alias . '.locked');
            $criteria->addSelectColumn($alias . '.fk_sales_order_process');
            $criteria->addSelectColumn($alias . '.event');
            $criteria->addSelectColumn($alias . '.hostname');
            $criteria->addSelectColumn($alias . '.module');
            $criteria->addSelectColumn($alias . '.controller');
            $criteria->addSelectColumn($alias . '.action');
            $criteria->addSelectColumn($alias . '.params');
            $criteria->addSelectColumn($alias . '.source_state');
            $criteria->addSelectColumn($alias . '.target_state');
            $criteria->addSelectColumn($alias . '.commands');
            $criteria->addSelectColumn($alias . '.conditions');
            $criteria->addSelectColumn($alias . '.error');
            $criteria->addSelectColumn($alias . '.error_message');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::populateObjects(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog $obj A ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdSalesOrderItemTransitionLog();
            } // if key === null
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) {
                $key = (string) $value->getIdSalesOrderItemTransitionLog();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$instances[$key])) {
                return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pac_sales_order_item_transition_log
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $className = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::OM_CLASS;
            $method = 'get' . $className;
            $cls = call_user_func(['Generated_Zed_Propel_EntityLoader', $method]);
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Order table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOrder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related OrderItem table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOrderItem(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related AclUser table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAclUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Process table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProcess(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with their ProjectA_Zed_Sales_Persistence_PacSalesOrder objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOrder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrder)
                $obj2->addTransitionLog($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with their ProjectA_Zed_Sales_Persistence_PacSalesOrderItem objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOrderItem(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItem)
                $obj2->addTransitionLog($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with their ProjectA_Zed_Acl_Persistence_PacAclUser objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAclUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to $obj2 (ProjectA_Zed_Acl_Persistence_PacAclUser)
                $obj2->addTransitionLog($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with their ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProcess(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess)
                $obj2->addTransitionLog($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectA_Zed_Acl_Persistence_PacAclUserPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrder rows

            $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrder)
                $obj2->addTransitionLog($obj1);
            } // if joined row not null

            // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderItem rows

            $key3 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj3 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItem)
                $obj3->addTransitionLog($obj1);
            } // if joined row not null

            // Add objects for joined ProjectA_Zed_Acl_Persistence_PacAclUser rows

            $key4 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj4 (ProjectA_Zed_Acl_Persistence_PacAclUser)
                $obj4->addTransitionLog($obj1);
            } // if joined row not null

            // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess rows

            $key5 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj5 (ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess)
                $obj5->addTransitionLog($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Order table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOrder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related OrderItem table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOrderItem(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related AclUser table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAclUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Process table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProcess(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with all related objects except Order.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOrder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Acl_Persistence_PacAclUserPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderItem rows

                $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItem)
                $obj2->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Acl_Persistence_PacAclUser rows

                $key3 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj3 (ProjectA_Zed_Acl_Persistence_PacAclUser)
                $obj3->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess rows

                $key4 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj4 (ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess)
                $obj4->addTransitionLog($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with all related objects except OrderItem.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOrderItem(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Acl_Persistence_PacAclUserPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrder rows

                $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrder)
                $obj2->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Acl_Persistence_PacAclUser rows

                $key3 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj3 (ProjectA_Zed_Acl_Persistence_PacAclUser)
                $obj3->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess rows

                $key4 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj4 (ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess)
                $obj4->addTransitionLog($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with all related objects except AclUser.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAclUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_PROCESS, ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::ID_SALES_ORDER_PROCESS, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrder rows

                $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrder)
                $obj2->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderItem rows

                $key3 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj3 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItem)
                $obj3->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess rows

                $key4 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderProcessPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj4 (ProjectA_Zed_Sales_Persistence_PacSalesOrderProcess)
                $obj4->addTransitionLog($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects pre-filled with all related objects except Process.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProcess(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectA_Zed_Acl_Persistence_PacAclUserPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER, ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::ID_SALES_ORDER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_SALES_ORDER_ITEM, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::ID_SALES_ORDER_ITEM, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::FK_ACL_USER, ProjectA_Zed_Acl_Persistence_PacAclUserPeer::ID_ACL_USER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrder rows

                $key2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj2 (ProjectA_Zed_Sales_Persistence_PacSalesOrder)
                $obj2->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Sales_Persistence_PacSalesOrderItem rows

                $key3 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Sales_Persistence_PacSalesOrderItemPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj3 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItem)
                $obj3->addTransitionLog($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Acl_Persistence_PacAclUser rows

                $key4 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProjectA_Zed_Acl_Persistence_PacAclUserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectA_Zed_Acl_Persistence_PacAclUserPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) to the collection in $obj4 (ProjectA_Zed_Acl_Persistence_PacAclUser)
                $obj4->addTransitionLog($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME)->getTable(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemTransitionLogPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new Generated_Zed_Sales_Persistence_Map_PacSalesOrderItemTransitionLogTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        $className = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::OM_CLASS;
        $method = 'get' . $className;
        return call_user_func(['Generated_Zed_Propel_EntityLoader', $method]);
    }




    /**
     * Performs an INSERT on the database, given a ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog or Criteria object.
     *
     * @param      mixed $values Criteria or ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object
        }

        if ($criteria->containsKey(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG) && $criteria->keyContainsValue(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog or Criteria object.
     *
     * @param      mixed $values Criteria or ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG);
            $value = $criteria->remove(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG);
            if ($value) {
                $selectCriteria->add(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);
            }

        } else { // $values is ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pac_sales_order_item_transition_log table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME, $con, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::clearInstancePool();
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog) { // it's a model object
            // invalidate the cache for this single object
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
            $criteria->add(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG, $pk);

        $v = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLog[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::DATABASE_NAME);
            $criteria->add(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::ID_SALES_ORDER_ITEM_TRANSITION_LOG, $pks, Criteria::IN);
            $objs = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemTransitionLogPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemTransitionLogPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemTransitionLogPeer::buildTableMap();

