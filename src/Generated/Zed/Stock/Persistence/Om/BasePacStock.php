<?php


/**
 * Base class that represents a row from the 'pac_stock' table.
 *
 *
 *
 * @package    propel.generator.vendor/project-a/catalog-package/ProjectA/Zed/Stock/Persistence.om
 */
abstract class Generated_Zed_Stock_Persistence_Om_BasePacStock extends ProjectA_Zed_Library_Propel_BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectA_Zed_Stock_Persistence_PacStockPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectA_Zed_Stock_Persistence_PacStockPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_stock field.
     * @var        int
     */
    protected $id_stock;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the is_never_out_of_stock field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_never_out_of_stock;

    /**
     * @var        PropelObjectCollection|ProjectA_Zed_Stock_Persistence_PacStockAttributeValue[] Collection to store aggregation of ProjectA_Zed_Stock_Persistence_PacStockAttributeValue objects.
     */
    protected $collAttributeValues;
    protected $collAttributeValuesPartial;

    /**
     * @var        PropelObjectCollection|ProjectA_Zed_Stock_Persistence_PacStockProduct[] Collection to store aggregation of ProjectA_Zed_Stock_Persistence_PacStockProduct objects.
     */
    protected $collStockProducts;
    protected $collStockProductsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $attributeValuesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $stockProductsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_never_out_of_stock = false;
    }

    /**
     * Initializes internal state of Generated_Zed_Stock_Persistence_Om_BasePacStock object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_stock] column value.
     *
     * @return int
     */
    public function getIdStock()
    {
        return $this->id_stock;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [is_never_out_of_stock] column value.
     *
     * @return boolean
     */
    public function getIsNeverOutOfStock()
    {
        return $this->is_never_out_of_stock;
    }

    /**
     * Set the value of [id_stock] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function setIdStock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_stock !== $v) {
            $this->id_stock = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK;
        }


        return $this;
    } // setIdStock()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Stock_Persistence_PacStockPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Sets the value of the [is_never_out_of_stock] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function setIsNeverOutOfStock($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_never_out_of_stock !== $v) {
            $this->is_never_out_of_stock = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Stock_Persistence_PacStockPeer::IS_NEVER_OUT_OF_STOCK;
        }


        return $this;
    } // setIsNeverOutOfStock()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->is_never_out_of_stock !== false) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_stock = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->is_never_out_of_stock = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 3; // 3 = ProjectA_Zed_Stock_Persistence_PacStockPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProjectA_Zed_Stock_Persistence_PacStock object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Stock_Persistence_PacStockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectA_Zed_Stock_Persistence_PacStockPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAttributeValues = null;

            $this->collStockProducts = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Stock_Persistence_PacStockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectA_Zed_Stock_Persistence_PacStockQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Stock_Persistence_PacStockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // lumberjack behavior
                
                if ($affectedRows > 0) {
                    $blacklistedEntities = array (
                );
                
                    if (!in_array(get_class($this), $blacklistedEntities)) {
                        $id = $this->getPrimaryKey();
                        $id = is_null($id) ? 0 : $id;
                
                        // Fix an issue when having multiple primary keys
                        if (is_array($id)) {
                            $id = implode(',', $id);
                        }
                
                        $lumberjack = ProjectA_Shared_Lumberjack_Code_Lumberjack::getInstance();
                        $lumberjack->addField("entityData", $this->toArray());
                        $lumberjack->addField("entity", get_class($this));
                        $lumberjack->addField("entityId", $id);
                        $lumberjack->addField("affectedRows", $affectedRows);
                
                        $authIdentity = ProjectA_Zed_Auth_Component_Model_Auth::getInstance()->getIdentity();
                        if (isset($authIdentity) && $authIdentity instanceof ProjectA_Zed_Acl_Persistence_PacAclUser) {
                            $lumberjack->addField("aclUserName", $authIdentity->getUsername());
                        }
                
                        $subType = $isInsert ? "insert" : "update";
                        $lumberjack->send(ProjectA_Shared_Lumberjack_Code_Log_Types::SAVE, get_class($this) . " id:" . $id . " " . $subType, $subType);
                    }
                }

                ProjectA_Zed_Stock_Persistence_PacStockPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->attributeValuesScheduledForDeletion !== null) {
                if (!$this->attributeValuesScheduledForDeletion->isEmpty()) {
                    ProjectA_Zed_Stock_Persistence_PacStockAttributeValueQuery::create()
                        ->filterByPrimaryKeys($this->attributeValuesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->attributeValuesScheduledForDeletion = null;
                }
            }

            if ($this->collAttributeValues !== null) {
                foreach ($this->collAttributeValues as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->stockProductsScheduledForDeletion !== null) {
                if (!$this->stockProductsScheduledForDeletion->isEmpty()) {
                    ProjectA_Zed_Stock_Persistence_PacStockProductQuery::create()
                        ->filterByPrimaryKeys($this->stockProductsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->stockProductsScheduledForDeletion = null;
                }
            }

            if ($this->collStockProducts !== null) {
                foreach ($this->collStockProducts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK;
        if (null !== $this->id_stock) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK)) {
            $modifiedColumns[':p' . $index++]  = '`id_stock`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Stock_Persistence_PacStockPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Stock_Persistence_PacStockPeer::IS_NEVER_OUT_OF_STOCK)) {
            $modifiedColumns[':p' . $index++]  = '`is_never_out_of_stock`';
        }

        $sql = sprintf(
            'INSERT INTO `pac_stock` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_stock`':
                        $stmt->bindValue($identifier, $this->id_stock, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`is_never_out_of_stock`':
                        $stmt->bindValue($identifier, (int) $this->is_never_out_of_stock, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdStock($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ProjectA_Zed_Stock_Persistence_PacStockPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAttributeValues !== null) {
                    foreach ($this->collAttributeValues as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collStockProducts !== null) {
                    foreach ($this->collStockProducts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProjectA_Zed_Stock_Persistence_PacStockPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdStock();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getIsNeverOutOfStock();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['ProjectA_Zed_Stock_Persistence_PacStock'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProjectA_Zed_Stock_Persistence_PacStock'][$this->getPrimaryKey()] = true;
        $keys = ProjectA_Zed_Stock_Persistence_PacStockPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdStock(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getIsNeverOutOfStock(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collAttributeValues) {
                $result['AttributeValues'] = $this->collAttributeValues->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collStockProducts) {
                $result['StockProducts'] = $this->collStockProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProjectA_Zed_Stock_Persistence_PacStockPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdStock($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setIsNeverOutOfStock($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_FIELDNAME)
    {
        $keys = ProjectA_Zed_Stock_Persistence_PacStockPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdStock($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIsNeverOutOfStock($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Stock_Persistence_PacStockPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK)) $criteria->add(ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK, $this->id_stock);
        if ($this->isColumnModified(ProjectA_Zed_Stock_Persistence_PacStockPeer::NAME)) $criteria->add(ProjectA_Zed_Stock_Persistence_PacStockPeer::NAME, $this->name);
        if ($this->isColumnModified(ProjectA_Zed_Stock_Persistence_PacStockPeer::IS_NEVER_OUT_OF_STOCK)) $criteria->add(ProjectA_Zed_Stock_Persistence_PacStockPeer::IS_NEVER_OUT_OF_STOCK, $this->is_never_out_of_stock);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Stock_Persistence_PacStockPeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Stock_Persistence_PacStockPeer::ID_STOCK, $this->id_stock);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdStock();
    }

    /**
     * Generic method to set the primary key (id_stock column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdStock($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdStock();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ProjectA_Zed_Stock_Persistence_PacStock (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setIsNeverOutOfStock($this->getIsNeverOutOfStock());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAttributeValues() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAttributeValue($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getStockProducts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStockProduct($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdStock(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return ProjectA_Zed_Stock_Persistence_PacStock Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ProjectA_Zed_Stock_Persistence_PacStockPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectA_Zed_Stock_Persistence_PacStockPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('AttributeValue' == $relationName) {
            $this->initAttributeValues();
        }
        if ('StockProduct' == $relationName) {
            $this->initStockProducts();
        }
    }

    /**
     * Clears out the collAttributeValues collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     * @see        addAttributeValues()
     */
    public function clearAttributeValues()
    {
        $this->collAttributeValues = null; // important to set this to null since that means it is uninitialized
        $this->collAttributeValuesPartial = null;

        return $this;
    }

    /**
     * reset is the collAttributeValues collection loaded partially
     *
     * @return void
     */
    public function resetPartialAttributeValues($v = true)
    {
        $this->collAttributeValuesPartial = $v;
    }

    /**
     * Initializes the collAttributeValues collection.
     *
     * By default this just sets the collAttributeValues collection to an empty array (like clearcollAttributeValues());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAttributeValues($overrideExisting = true)
    {
        if (null !== $this->collAttributeValues && !$overrideExisting) {
            return;
        }
        $this->collAttributeValues = new PropelObjectCollection();
        $this->collAttributeValues->setModel('ProjectA_Zed_Stock_Persistence_PacStockAttributeValue');
    }

    /**
     * Gets an array of ProjectA_Zed_Stock_Persistence_PacStockAttributeValue objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ProjectA_Zed_Stock_Persistence_PacStock is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ProjectA_Zed_Stock_Persistence_PacStockAttributeValue[] List of ProjectA_Zed_Stock_Persistence_PacStockAttributeValue objects
     * @throws PropelException
     */
    public function getAttributeValues($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAttributeValuesPartial && !$this->isNew();
        if (null === $this->collAttributeValues || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAttributeValues) {
                // return empty collection
                $this->initAttributeValues();
            } else {
                $collAttributeValues = ProjectA_Zed_Stock_Persistence_PacStockAttributeValueQuery::create(null, $criteria)
                    ->filterByStock($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAttributeValuesPartial && count($collAttributeValues)) {
                      $this->initAttributeValues(false);

                      foreach($collAttributeValues as $obj) {
                        if (false == $this->collAttributeValues->contains($obj)) {
                          $this->collAttributeValues->append($obj);
                        }
                      }

                      $this->collAttributeValuesPartial = true;
                    }

                    $collAttributeValues->getInternalIterator()->rewind();
                    return $collAttributeValues;
                }

                if($partial && $this->collAttributeValues) {
                    foreach($this->collAttributeValues as $obj) {
                        if($obj->isNew()) {
                            $collAttributeValues[] = $obj;
                        }
                    }
                }

                $this->collAttributeValues = $collAttributeValues;
                $this->collAttributeValuesPartial = false;
            }
        }

        return $this->collAttributeValues;
    }

    /**
     * Sets a collection of AttributeValue objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $attributeValues A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function setAttributeValues(PropelCollection $attributeValues, PropelPDO $con = null)
    {
        $attributeValuesToDelete = $this->getAttributeValues(new Criteria(), $con)->diff($attributeValues);

        $this->attributeValuesScheduledForDeletion = unserialize(serialize($attributeValuesToDelete));

        foreach ($attributeValuesToDelete as $attributeValueRemoved) {
            $attributeValueRemoved->setStock(null);
        }

        $this->collAttributeValues = null;
        foreach ($attributeValues as $attributeValue) {
            $this->addAttributeValue($attributeValue);
        }

        $this->collAttributeValues = $attributeValues;
        $this->collAttributeValuesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ProjectA_Zed_Stock_Persistence_PacStockAttributeValue objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ProjectA_Zed_Stock_Persistence_PacStockAttributeValue objects.
     * @throws PropelException
     */
    public function countAttributeValues(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAttributeValuesPartial && !$this->isNew();
        if (null === $this->collAttributeValues || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAttributeValues) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getAttributeValues());
            }
            $query = ProjectA_Zed_Stock_Persistence_PacStockAttributeValueQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStock($this)
                ->count($con);
        }

        return count($this->collAttributeValues);
    }

    /**
     * Method called to associate a ProjectA_Zed_Stock_Persistence_PacStockAttributeValue object to this object
     * through the ProjectA_Zed_Stock_Persistence_PacStockAttributeValue foreign key attribute.
     *
     * @param    ProjectA_Zed_Stock_Persistence_PacStockAttributeValue $l ProjectA_Zed_Stock_Persistence_PacStockAttributeValue
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function addAttributeValue(ProjectA_Zed_Stock_Persistence_PacStockAttributeValue $l)
    {
        if ($this->collAttributeValues === null) {
            $this->initAttributeValues();
            $this->collAttributeValuesPartial = true;
        }
        if (!in_array($l, $this->collAttributeValues->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAttributeValue($l);
        }

        return $this;
    }

    /**
     * @param	AttributeValue $attributeValue The attributeValue object to add.
     */
    protected function doAddAttributeValue($attributeValue)
    {
        $this->collAttributeValues[]= $attributeValue;
        $attributeValue->setStock($this);
    }

    /**
     * @param	AttributeValue $attributeValue The attributeValue object to remove.
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function removeAttributeValue($attributeValue)
    {
        if ($this->getAttributeValues()->contains($attributeValue)) {
            $this->collAttributeValues->remove($this->collAttributeValues->search($attributeValue));
            if (null === $this->attributeValuesScheduledForDeletion) {
                $this->attributeValuesScheduledForDeletion = clone $this->collAttributeValues;
                $this->attributeValuesScheduledForDeletion->clear();
            }
            $this->attributeValuesScheduledForDeletion[]= clone $attributeValue;
            $attributeValue->setStock(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacStock is new, it will return
     * an empty collection; or if this PacStock has previously
     * been saved, it will retrieve related AttributeValues from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacStock.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectA_Zed_Stock_Persistence_PacStockAttributeValue[] List of ProjectA_Zed_Stock_Persistence_PacStockAttributeValue objects
     */
    public function getAttributeValuesJoinAttribute($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectA_Zed_Stock_Persistence_PacStockAttributeValueQuery::create(null, $criteria);
        $query->joinWith('Attribute', $join_behavior);

        return $this->getAttributeValues($query, $con);
    }

    /**
     * Clears out the collStockProducts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     * @see        addStockProducts()
     */
    public function clearStockProducts()
    {
        $this->collStockProducts = null; // important to set this to null since that means it is uninitialized
        $this->collStockProductsPartial = null;

        return $this;
    }

    /**
     * reset is the collStockProducts collection loaded partially
     *
     * @return void
     */
    public function resetPartialStockProducts($v = true)
    {
        $this->collStockProductsPartial = $v;
    }

    /**
     * Initializes the collStockProducts collection.
     *
     * By default this just sets the collStockProducts collection to an empty array (like clearcollStockProducts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStockProducts($overrideExisting = true)
    {
        if (null !== $this->collStockProducts && !$overrideExisting) {
            return;
        }
        $this->collStockProducts = new PropelObjectCollection();
        $this->collStockProducts->setModel('ProjectA_Zed_Stock_Persistence_PacStockProduct');
    }

    /**
     * Gets an array of ProjectA_Zed_Stock_Persistence_PacStockProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ProjectA_Zed_Stock_Persistence_PacStock is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ProjectA_Zed_Stock_Persistence_PacStockProduct[] List of ProjectA_Zed_Stock_Persistence_PacStockProduct objects
     * @throws PropelException
     */
    public function getStockProducts($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collStockProductsPartial && !$this->isNew();
        if (null === $this->collStockProducts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collStockProducts) {
                // return empty collection
                $this->initStockProducts();
            } else {
                $collStockProducts = ProjectA_Zed_Stock_Persistence_PacStockProductQuery::create(null, $criteria)
                    ->filterByStock($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collStockProductsPartial && count($collStockProducts)) {
                      $this->initStockProducts(false);

                      foreach($collStockProducts as $obj) {
                        if (false == $this->collStockProducts->contains($obj)) {
                          $this->collStockProducts->append($obj);
                        }
                      }

                      $this->collStockProductsPartial = true;
                    }

                    $collStockProducts->getInternalIterator()->rewind();
                    return $collStockProducts;
                }

                if($partial && $this->collStockProducts) {
                    foreach($this->collStockProducts as $obj) {
                        if($obj->isNew()) {
                            $collStockProducts[] = $obj;
                        }
                    }
                }

                $this->collStockProducts = $collStockProducts;
                $this->collStockProductsPartial = false;
            }
        }

        return $this->collStockProducts;
    }

    /**
     * Sets a collection of StockProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $stockProducts A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function setStockProducts(PropelCollection $stockProducts, PropelPDO $con = null)
    {
        $stockProductsToDelete = $this->getStockProducts(new Criteria(), $con)->diff($stockProducts);

        $this->stockProductsScheduledForDeletion = unserialize(serialize($stockProductsToDelete));

        foreach ($stockProductsToDelete as $stockProductRemoved) {
            $stockProductRemoved->setStock(null);
        }

        $this->collStockProducts = null;
        foreach ($stockProducts as $stockProduct) {
            $this->addStockProduct($stockProduct);
        }

        $this->collStockProducts = $stockProducts;
        $this->collStockProductsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ProjectA_Zed_Stock_Persistence_PacStockProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ProjectA_Zed_Stock_Persistence_PacStockProduct objects.
     * @throws PropelException
     */
    public function countStockProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collStockProductsPartial && !$this->isNew();
        if (null === $this->collStockProducts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStockProducts) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getStockProducts());
            }
            $query = ProjectA_Zed_Stock_Persistence_PacStockProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStock($this)
                ->count($con);
        }

        return count($this->collStockProducts);
    }

    /**
     * Method called to associate a ProjectA_Zed_Stock_Persistence_PacStockProduct object to this object
     * through the ProjectA_Zed_Stock_Persistence_PacStockProduct foreign key attribute.
     *
     * @param    ProjectA_Zed_Stock_Persistence_PacStockProduct $l ProjectA_Zed_Stock_Persistence_PacStockProduct
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function addStockProduct(ProjectA_Zed_Stock_Persistence_PacStockProduct $l)
    {
        if ($this->collStockProducts === null) {
            $this->initStockProducts();
            $this->collStockProductsPartial = true;
        }
        if (!in_array($l, $this->collStockProducts->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddStockProduct($l);
        }

        return $this;
    }

    /**
     * @param	StockProduct $stockProduct The stockProduct object to add.
     */
    protected function doAddStockProduct($stockProduct)
    {
        $this->collStockProducts[]= $stockProduct;
        $stockProduct->setStock($this);
    }

    /**
     * @param	StockProduct $stockProduct The stockProduct object to remove.
     * @return ProjectA_Zed_Stock_Persistence_PacStock The current object (for fluent API support)
     */
    public function removeStockProduct($stockProduct)
    {
        if ($this->getStockProducts()->contains($stockProduct)) {
            $this->collStockProducts->remove($this->collStockProducts->search($stockProduct));
            if (null === $this->stockProductsScheduledForDeletion) {
                $this->stockProductsScheduledForDeletion = clone $this->collStockProducts;
                $this->stockProductsScheduledForDeletion->clear();
            }
            $this->stockProductsScheduledForDeletion[]= clone $stockProduct;
            $stockProduct->setStock(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacStock is new, it will return
     * an empty collection; or if this PacStock has previously
     * been saved, it will retrieve related StockProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacStock.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectA_Zed_Stock_Persistence_PacStockProduct[] List of ProjectA_Zed_Stock_Persistence_PacStockProduct objects
     */
    public function getStockProductsJoinProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectA_Zed_Stock_Persistence_PacStockProductQuery::create(null, $criteria);
        $query->joinWith('Product', $join_behavior);

        return $this->getStockProducts($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_stock = null;
        $this->name = null;
        $this->is_never_out_of_stock = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collAttributeValues) {
                foreach ($this->collAttributeValues as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collStockProducts) {
                foreach ($this->collStockProducts as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAttributeValues instanceof PropelCollection) {
            $this->collAttributeValues->clearIterator();
        }
        $this->collAttributeValues = null;
        if ($this->collStockProducts instanceof PropelCollection) {
            $this->collStockProducts->clearIterator();
        }
        $this->collStockProducts = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectA_Zed_Stock_Persistence_PacStockPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
