<?php


/**
 * Base class that represents a row from the 'pac_tracking_exclusivity' table.
 *
 *
 *
 * @package    propel.generator.vendor/project-a/marketing-package/ProjectA/Zed/Tracking/Persistence.om
 */
abstract class Generated_Zed_Tracking_Persistence_Om_BasePacTrackingExclusivity extends ProjectA_Zed_Library_Propel_BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tracking_exclusivity field.
     * @var        int
     */
    protected $id_tracking_exclusivity;

    /**
     * The value for the fk_tracking_exclusivity_group field.
     * @var        int
     */
    protected $fk_tracking_exclusivity_group;

    /**
     * The value for the fk_tracking_instance field.
     * @var        int
     */
    protected $fk_tracking_instance;

    /**
     * @var        PacTrackingExclusivityGroup
     */
    protected $aTrackingPageExclusivityGroup;

    /**
     * @var        PacTrackingInstance
     */
    protected $aTrackingInstance;

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
     * Get the [id_tracking_exclusivity] column value.
     *
     * @return int
     */
    public function getIdTrackingExclusivity()
    {
        return $this->id_tracking_exclusivity;
    }

    /**
     * Get the [fk_tracking_exclusivity_group] column value.
     *
     * @return int
     */
    public function getFkTrackingExclusivityGroup()
    {
        return $this->fk_tracking_exclusivity_group;
    }

    /**
     * Get the [fk_tracking_instance] column value.
     *
     * @return int
     */
    public function getFkTrackingInstance()
    {
        return $this->fk_tracking_instance;
    }

    /**
     * Set the value of [id_tracking_exclusivity] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity The current object (for fluent API support)
     */
    public function setIdTrackingExclusivity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tracking_exclusivity !== $v) {
            $this->id_tracking_exclusivity = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY;
        }


        return $this;
    } // setIdTrackingExclusivity()

    /**
     * Set the value of [fk_tracking_exclusivity_group] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity The current object (for fluent API support)
     */
    public function setFkTrackingExclusivityGroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_tracking_exclusivity_group !== $v) {
            $this->fk_tracking_exclusivity_group = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_EXCLUSIVITY_GROUP;
        }

        if ($this->aTrackingPageExclusivityGroup !== null && $this->aTrackingPageExclusivityGroup->getIdTrackingExclusivityGroup() !== $v) {
            $this->aTrackingPageExclusivityGroup = null;
        }


        return $this;
    } // setFkTrackingExclusivityGroup()

    /**
     * Set the value of [fk_tracking_instance] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity The current object (for fluent API support)
     */
    public function setFkTrackingInstance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_tracking_instance !== $v) {
            $this->fk_tracking_instance = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_INSTANCE;
        }

        if ($this->aTrackingInstance !== null && $this->aTrackingInstance->getIdTrackingInstance() !== $v) {
            $this->aTrackingInstance = null;
        }


        return $this;
    } // setFkTrackingInstance()

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

            $this->id_tracking_exclusivity = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_tracking_exclusivity_group = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_tracking_instance = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 3; // 3 = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity object", $e);
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

        if ($this->aTrackingPageExclusivityGroup !== null && $this->fk_tracking_exclusivity_group !== $this->aTrackingPageExclusivityGroup->getIdTrackingExclusivityGroup()) {
            $this->aTrackingPageExclusivityGroup = null;
        }
        if ($this->aTrackingInstance !== null && $this->fk_tracking_instance !== $this->aTrackingInstance->getIdTrackingInstance()) {
            $this->aTrackingInstance = null;
        }
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
            $con = Propel::getConnection(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTrackingPageExclusivityGroup = null;
            $this->aTrackingInstance = null;
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
            $con = Propel::getConnection(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityQuery::create()
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
            $con = Propel::getConnection(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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

                ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTrackingPageExclusivityGroup !== null) {
                if ($this->aTrackingPageExclusivityGroup->isModified() || $this->aTrackingPageExclusivityGroup->isNew()) {
                    $affectedRows += $this->aTrackingPageExclusivityGroup->save($con);
                }
                $this->setTrackingPageExclusivityGroup($this->aTrackingPageExclusivityGroup);
            }

            if ($this->aTrackingInstance !== null) {
                if ($this->aTrackingInstance->isModified() || $this->aTrackingInstance->isNew()) {
                    $affectedRows += $this->aTrackingInstance->save($con);
                }
                $this->setTrackingInstance($this->aTrackingInstance);
            }

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

        $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY;
        if (null !== $this->id_tracking_exclusivity) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY)) {
            $modifiedColumns[':p' . $index++]  = '`id_tracking_exclusivity`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_EXCLUSIVITY_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`fk_tracking_exclusivity_group`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_INSTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_tracking_instance`';
        }

        $sql = sprintf(
            'INSERT INTO `pac_tracking_exclusivity` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_tracking_exclusivity`':
                        $stmt->bindValue($identifier, $this->id_tracking_exclusivity, PDO::PARAM_INT);
                        break;
                    case '`fk_tracking_exclusivity_group`':
                        $stmt->bindValue($identifier, $this->fk_tracking_exclusivity_group, PDO::PARAM_INT);
                        break;
                    case '`fk_tracking_instance`':
                        $stmt->bindValue($identifier, $this->fk_tracking_instance, PDO::PARAM_INT);
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
        $this->setIdTrackingExclusivity($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTrackingPageExclusivityGroup !== null) {
                if (!$this->aTrackingPageExclusivityGroup->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTrackingPageExclusivityGroup->getValidationFailures());
                }
            }

            if ($this->aTrackingInstance !== null) {
                if (!$this->aTrackingInstance->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTrackingInstance->getValidationFailures());
                }
            }


            if (($retval = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTrackingExclusivity();
                break;
            case 1:
                return $this->getFkTrackingExclusivityGroup();
                break;
            case 2:
                return $this->getFkTrackingInstance();
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
        if (isset($alreadyDumpedObjects['ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity'][$this->getPrimaryKey()] = true;
        $keys = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTrackingExclusivity(),
            $keys[1] => $this->getFkTrackingExclusivityGroup(),
            $keys[2] => $this->getFkTrackingInstance(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aTrackingPageExclusivityGroup) {
                $result['TrackingPageExclusivityGroup'] = $this->aTrackingPageExclusivityGroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTrackingInstance) {
                $result['TrackingInstance'] = $this->aTrackingInstance->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTrackingExclusivity($value);
                break;
            case 1:
                $this->setFkTrackingExclusivityGroup($value);
                break;
            case 2:
                $this->setFkTrackingInstance($value);
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
        $keys = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTrackingExclusivity($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkTrackingExclusivityGroup($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkTrackingInstance($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY, $this->id_tracking_exclusivity);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_EXCLUSIVITY_GROUP)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_EXCLUSIVITY_GROUP, $this->fk_tracking_exclusivity_group);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_INSTANCE)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::FK_TRACKING_INSTANCE, $this->fk_tracking_instance);

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
        $criteria = new Criteria(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::ID_TRACKING_EXCLUSIVITY, $this->id_tracking_exclusivity);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTrackingExclusivity();
    }

    /**
     * Generic method to set the primary key (id_tracking_exclusivity column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTrackingExclusivity($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTrackingExclusivity();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkTrackingExclusivityGroup($this->getFkTrackingExclusivityGroup());
        $copyObj->setFkTrackingInstance($this->getFkTrackingInstance());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTrackingExclusivity(NULL); // this is a auto-increment column, so set to default value
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
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity Clone of current object.
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
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup object.
     *
     * @param             ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup $v
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTrackingPageExclusivityGroup(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup $v = null)
    {
        if ($v === null) {
            $this->setFkTrackingExclusivityGroup(NULL);
        } else {
            $this->setFkTrackingExclusivityGroup($v->getIdTrackingExclusivityGroup());
        }

        $this->aTrackingPageExclusivityGroup = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup object, it will not be re-added.
        if ($v !== null) {
            $v->addTrackingPageExclusivity($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup The associated ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroup object.
     * @throws PropelException
     */
    public function getTrackingPageExclusivityGroup(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTrackingPageExclusivityGroup === null && ($this->fk_tracking_exclusivity_group !== null) && $doQuery) {
            $this->aTrackingPageExclusivityGroup = ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityGroupQuery::create()->findPk($this->fk_tracking_exclusivity_group, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTrackingPageExclusivityGroup->addTrackingPageExclusivities($this);
             */
        }

        return $this->aTrackingPageExclusivityGroup;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Tracking_Persistence_PacTrackingInstance object.
     *
     * @param             ProjectA_Zed_Tracking_Persistence_PacTrackingInstance $v
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivity The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTrackingInstance(ProjectA_Zed_Tracking_Persistence_PacTrackingInstance $v = null)
    {
        if ($v === null) {
            $this->setFkTrackingInstance(NULL);
        } else {
            $this->setFkTrackingInstance($v->getIdTrackingInstance());
        }

        $this->aTrackingInstance = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Tracking_Persistence_PacTrackingInstance object, it will not be re-added.
        if ($v !== null) {
            $v->addTrackingPageExclusivity($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Tracking_Persistence_PacTrackingInstance object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstance The associated ProjectA_Zed_Tracking_Persistence_PacTrackingInstance object.
     * @throws PropelException
     */
    public function getTrackingInstance(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTrackingInstance === null && ($this->fk_tracking_instance !== null) && $doQuery) {
            $this->aTrackingInstance = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceQuery::create()->findPk($this->fk_tracking_instance, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTrackingInstance->addTrackingPageExclusivities($this);
             */
        }

        return $this->aTrackingInstance;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tracking_exclusivity = null;
        $this->fk_tracking_exclusivity_group = null;
        $this->fk_tracking_instance = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->aTrackingPageExclusivityGroup instanceof Persistent) {
              $this->aTrackingPageExclusivityGroup->clearAllReferences($deep);
            }
            if ($this->aTrackingInstance instanceof Persistent) {
              $this->aTrackingInstance->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aTrackingPageExclusivityGroup = null;
        $this->aTrackingInstance = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectA_Zed_Tracking_Persistence_PacTrackingExclusivityPeer::DEFAULT_STRING_FORMAT);
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
