<?php


/**
 * Base class that represents a row from the 'pac_tracking_instance_revision' table.
 *
 *
 *
 * @package    propel.generator.vendor/project-a/marketing-package/ProjectA/Zed/Tracking/Persistence.om
 */
abstract class Generated_Zed_Tracking_Persistence_Om_BasePacTrackingInstanceRevision extends ProjectA_Zed_Library_Propel_BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tracking_instance_revision field.
     * @var        int
     */
    protected $id_tracking_instance_revision;

    /**
     * The value for the is_global field.
     * @var        boolean
     */
    protected $is_global;

    /**
     * The value for the revision field.
     * @var        int
     */
    protected $revision;

    /**
     * The value for the fk_tracking_instance field.
     * @var        int
     */
    protected $fk_tracking_instance;

    /**
     * The value for the config field.
     * @var        string
     */
    protected $config;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        PacTrackingInstance
     */
    protected $aTrackingInstance;

    /**
     * @var        PropelObjectCollection|ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision[] Collection to store aggregation of ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision objects.
     */
    protected $collTrackingPageTypeHasInstanceRevisions;
    protected $collTrackingPageTypeHasInstanceRevisionsPartial;

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
    protected $trackingPageTypeHasInstanceRevisionsScheduledForDeletion = null;

    /**
     * Get the [id_tracking_instance_revision] column value.
     *
     * @return int
     */
    public function getIdTrackingInstanceRevision()
    {
        return $this->id_tracking_instance_revision;
    }

    /**
     * Get the [is_global] column value.
     *
     * @return boolean
     */
    public function getIsGlobal()
    {
        return $this->is_global;
    }

    /**
     * Get the [revision] column value.
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
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
     * Get the [config] column value.
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id_tracking_instance_revision] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setIdTrackingInstanceRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tracking_instance_revision !== $v) {
            $this->id_tracking_instance_revision = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION;
        }


        return $this;
    } // setIdTrackingInstanceRevision()

    /**
     * Sets the value of the [is_global] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setIsGlobal($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_global !== $v) {
            $this->is_global = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::IS_GLOBAL;
        }


        return $this;
    } // setIsGlobal()

    /**
     * Set the value of [revision] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->revision !== $v) {
            $this->revision = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::REVISION;
        }


        return $this;
    } // setRevision()

    /**
     * Set the value of [fk_tracking_instance] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setFkTrackingInstance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_tracking_instance !== $v) {
            $this->fk_tracking_instance = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::FK_TRACKING_INSTANCE;
        }

        if ($this->aTrackingInstance !== null && $this->aTrackingInstance->getIdTrackingInstance() !== $v) {
            $this->aTrackingInstance = null;
        }


        return $this;
    } // setFkTrackingInstance()

    /**
     * Set the value of [config] column.
     *
     * @param string $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setConfig($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->config !== $v) {
            $this->config = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CONFIG;
        }


        return $this;
    } // setConfig()

    /**
     * Set the value of [code] column.
     *
     * @param string $v new value
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

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

            $this->id_tracking_instance_revision = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->is_global = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->revision = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fk_tracking_instance = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->config = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->updated_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 8; // 8 = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision object", $e);
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
            $con = Propel::getConnection(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTrackingInstance = null;
            $this->collTrackingPageTypeHasInstanceRevisions = null;

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
            $con = Propel::getConnection(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionQuery::create()
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
            $con = Propel::getConnection(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
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

                ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::addInstanceToPool($this);
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

            if ($this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion !== null) {
                if (!$this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion->isEmpty()) {
                    ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevisionQuery::create()
                        ->filterByPrimaryKeys($this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion = null;
                }
            }

            if ($this->collTrackingPageTypeHasInstanceRevisions !== null) {
                foreach ($this->collTrackingPageTypeHasInstanceRevisions as $referrerFK) {
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

        $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION;
        if (null !== $this->id_tracking_instance_revision) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`id_tracking_instance_revision`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::IS_GLOBAL)) {
            $modifiedColumns[':p' . $index++]  = '`is_global`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`revision`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::FK_TRACKING_INSTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_tracking_instance`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CONFIG)) {
            $modifiedColumns[':p' . $index++]  = '`config`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`code`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `pac_tracking_instance_revision` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_tracking_instance_revision`':
                        $stmt->bindValue($identifier, $this->id_tracking_instance_revision, PDO::PARAM_INT);
                        break;
                    case '`is_global`':
                        $stmt->bindValue($identifier, (int) $this->is_global, PDO::PARAM_INT);
                        break;
                    case '`revision`':
                        $stmt->bindValue($identifier, $this->revision, PDO::PARAM_INT);
                        break;
                    case '`fk_tracking_instance`':
                        $stmt->bindValue($identifier, $this->fk_tracking_instance, PDO::PARAM_INT);
                        break;
                    case '`config`':
                        $stmt->bindValue($identifier, $this->config, PDO::PARAM_STR);
                        break;
                    case '`code`':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
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
        $this->setIdTrackingInstanceRevision($pk);

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

            if ($this->aTrackingInstance !== null) {
                if (!$this->aTrackingInstance->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTrackingInstance->getValidationFailures());
                }
            }


            if (($retval = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTrackingPageTypeHasInstanceRevisions !== null) {
                    foreach ($this->collTrackingPageTypeHasInstanceRevisions as $referrerFK) {
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
        $pos = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTrackingInstanceRevision();
                break;
            case 1:
                return $this->getIsGlobal();
                break;
            case 2:
                return $this->getRevision();
                break;
            case 3:
                return $this->getFkTrackingInstance();
                break;
            case 4:
                return $this->getConfig();
                break;
            case 5:
                return $this->getCode();
                break;
            case 6:
                return $this->getCreatedAt();
                break;
            case 7:
                return $this->getUpdatedAt();
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
        if (isset($alreadyDumpedObjects['ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision'][$this->getPrimaryKey()] = true;
        $keys = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTrackingInstanceRevision(),
            $keys[1] => $this->getIsGlobal(),
            $keys[2] => $this->getRevision(),
            $keys[3] => $this->getFkTrackingInstance(),
            $keys[4] => $this->getConfig(),
            $keys[5] => $this->getCode(),
            $keys[6] => $this->getCreatedAt(),
            $keys[7] => $this->getUpdatedAt(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aTrackingInstance) {
                $result['TrackingInstance'] = $this->aTrackingInstance->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTrackingPageTypeHasInstanceRevisions) {
                $result['TrackingPageTypeHasInstanceRevisions'] = $this->collTrackingPageTypeHasInstanceRevisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTrackingInstanceRevision($value);
                break;
            case 1:
                $this->setIsGlobal($value);
                break;
            case 2:
                $this->setRevision($value);
                break;
            case 3:
                $this->setFkTrackingInstance($value);
                break;
            case 4:
                $this->setConfig($value);
                break;
            case 5:
                $this->setCode($value);
                break;
            case 6:
                $this->setCreatedAt($value);
                break;
            case 7:
                $this->setUpdatedAt($value);
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
        $keys = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTrackingInstanceRevision($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIsGlobal($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRevision($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFkTrackingInstance($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setConfig($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION, $this->id_tracking_instance_revision);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::IS_GLOBAL)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::IS_GLOBAL, $this->is_global);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::REVISION)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::REVISION, $this->revision);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::FK_TRACKING_INSTANCE)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::FK_TRACKING_INSTANCE, $this->fk_tracking_instance);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CONFIG)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CONFIG, $this->config);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CODE)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CODE, $this->code);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CREATED_AT)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT)) $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT, $this->updated_at);

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
        $criteria = new Criteria(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::ID_TRACKING_INSTANCE_REVISION, $this->id_tracking_instance_revision);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTrackingInstanceRevision();
    }

    /**
     * Generic method to set the primary key (id_tracking_instance_revision column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTrackingInstanceRevision($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTrackingInstanceRevision();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIsGlobal($this->getIsGlobal());
        $copyObj->setRevision($this->getRevision());
        $copyObj->setFkTrackingInstance($this->getFkTrackingInstance());
        $copyObj->setConfig($this->getConfig());
        $copyObj->setCode($this->getCode());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTrackingPageTypeHasInstanceRevisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTrackingPageTypeHasInstanceRevision($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTrackingInstanceRevision(NULL); // this is a auto-increment column, so set to default value
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
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision Clone of current object.
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
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Tracking_Persistence_PacTrackingInstance object.
     *
     * @param             ProjectA_Zed_Tracking_Persistence_PacTrackingInstance $v
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
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
            $v->addTrackingInstanceRevision($this);
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
                $this->aTrackingInstance->addTrackingInstanceRevisions($this);
             */
        }

        return $this->aTrackingInstance;
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
        if ('TrackingPageTypeHasInstanceRevision' == $relationName) {
            $this->initTrackingPageTypeHasInstanceRevisions();
        }
    }

    /**
     * Clears out the collTrackingPageTypeHasInstanceRevisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     * @see        addTrackingPageTypeHasInstanceRevisions()
     */
    public function clearTrackingPageTypeHasInstanceRevisions()
    {
        $this->collTrackingPageTypeHasInstanceRevisions = null; // important to set this to null since that means it is uninitialized
        $this->collTrackingPageTypeHasInstanceRevisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collTrackingPageTypeHasInstanceRevisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialTrackingPageTypeHasInstanceRevisions($v = true)
    {
        $this->collTrackingPageTypeHasInstanceRevisionsPartial = $v;
    }

    /**
     * Initializes the collTrackingPageTypeHasInstanceRevisions collection.
     *
     * By default this just sets the collTrackingPageTypeHasInstanceRevisions collection to an empty array (like clearcollTrackingPageTypeHasInstanceRevisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTrackingPageTypeHasInstanceRevisions($overrideExisting = true)
    {
        if (null !== $this->collTrackingPageTypeHasInstanceRevisions && !$overrideExisting) {
            return;
        }
        $this->collTrackingPageTypeHasInstanceRevisions = new PropelObjectCollection();
        $this->collTrackingPageTypeHasInstanceRevisions->setModel('ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision');
    }

    /**
     * Gets an array of ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision[] List of ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision objects
     * @throws PropelException
     */
    public function getTrackingPageTypeHasInstanceRevisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTrackingPageTypeHasInstanceRevisionsPartial && !$this->isNew();
        if (null === $this->collTrackingPageTypeHasInstanceRevisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTrackingPageTypeHasInstanceRevisions) {
                // return empty collection
                $this->initTrackingPageTypeHasInstanceRevisions();
            } else {
                $collTrackingPageTypeHasInstanceRevisions = ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevisionQuery::create(null, $criteria)
                    ->filterByTrackingInstanceRevision($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTrackingPageTypeHasInstanceRevisionsPartial && count($collTrackingPageTypeHasInstanceRevisions)) {
                      $this->initTrackingPageTypeHasInstanceRevisions(false);

                      foreach($collTrackingPageTypeHasInstanceRevisions as $obj) {
                        if (false == $this->collTrackingPageTypeHasInstanceRevisions->contains($obj)) {
                          $this->collTrackingPageTypeHasInstanceRevisions->append($obj);
                        }
                      }

                      $this->collTrackingPageTypeHasInstanceRevisionsPartial = true;
                    }

                    $collTrackingPageTypeHasInstanceRevisions->getInternalIterator()->rewind();
                    return $collTrackingPageTypeHasInstanceRevisions;
                }

                if($partial && $this->collTrackingPageTypeHasInstanceRevisions) {
                    foreach($this->collTrackingPageTypeHasInstanceRevisions as $obj) {
                        if($obj->isNew()) {
                            $collTrackingPageTypeHasInstanceRevisions[] = $obj;
                        }
                    }
                }

                $this->collTrackingPageTypeHasInstanceRevisions = $collTrackingPageTypeHasInstanceRevisions;
                $this->collTrackingPageTypeHasInstanceRevisionsPartial = false;
            }
        }

        return $this->collTrackingPageTypeHasInstanceRevisions;
    }

    /**
     * Sets a collection of TrackingPageTypeHasInstanceRevision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $trackingPageTypeHasInstanceRevisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function setTrackingPageTypeHasInstanceRevisions(PropelCollection $trackingPageTypeHasInstanceRevisions, PropelPDO $con = null)
    {
        $trackingPageTypeHasInstanceRevisionsToDelete = $this->getTrackingPageTypeHasInstanceRevisions(new Criteria(), $con)->diff($trackingPageTypeHasInstanceRevisions);

        $this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion = unserialize(serialize($trackingPageTypeHasInstanceRevisionsToDelete));

        foreach ($trackingPageTypeHasInstanceRevisionsToDelete as $trackingPageTypeHasInstanceRevisionRemoved) {
            $trackingPageTypeHasInstanceRevisionRemoved->setTrackingInstanceRevision(null);
        }

        $this->collTrackingPageTypeHasInstanceRevisions = null;
        foreach ($trackingPageTypeHasInstanceRevisions as $trackingPageTypeHasInstanceRevision) {
            $this->addTrackingPageTypeHasInstanceRevision($trackingPageTypeHasInstanceRevision);
        }

        $this->collTrackingPageTypeHasInstanceRevisions = $trackingPageTypeHasInstanceRevisions;
        $this->collTrackingPageTypeHasInstanceRevisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision objects.
     * @throws PropelException
     */
    public function countTrackingPageTypeHasInstanceRevisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTrackingPageTypeHasInstanceRevisionsPartial && !$this->isNew();
        if (null === $this->collTrackingPageTypeHasInstanceRevisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTrackingPageTypeHasInstanceRevisions) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTrackingPageTypeHasInstanceRevisions());
            }
            $query = ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTrackingInstanceRevision($this)
                ->count($con);
        }

        return count($this->collTrackingPageTypeHasInstanceRevisions);
    }

    /**
     * Method called to associate a ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision object to this object
     * through the ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision foreign key attribute.
     *
     * @param    ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision $l ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function addTrackingPageTypeHasInstanceRevision(ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision $l)
    {
        if ($this->collTrackingPageTypeHasInstanceRevisions === null) {
            $this->initTrackingPageTypeHasInstanceRevisions();
            $this->collTrackingPageTypeHasInstanceRevisionsPartial = true;
        }
        if (!in_array($l, $this->collTrackingPageTypeHasInstanceRevisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTrackingPageTypeHasInstanceRevision($l);
        }

        return $this;
    }

    /**
     * @param	TrackingPageTypeHasInstanceRevision $trackingPageTypeHasInstanceRevision The trackingPageTypeHasInstanceRevision object to add.
     */
    protected function doAddTrackingPageTypeHasInstanceRevision($trackingPageTypeHasInstanceRevision)
    {
        $this->collTrackingPageTypeHasInstanceRevisions[]= $trackingPageTypeHasInstanceRevision;
        $trackingPageTypeHasInstanceRevision->setTrackingInstanceRevision($this);
    }

    /**
     * @param	TrackingPageTypeHasInstanceRevision $trackingPageTypeHasInstanceRevision The trackingPageTypeHasInstanceRevision object to remove.
     * @return ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function removeTrackingPageTypeHasInstanceRevision($trackingPageTypeHasInstanceRevision)
    {
        if ($this->getTrackingPageTypeHasInstanceRevisions()->contains($trackingPageTypeHasInstanceRevision)) {
            $this->collTrackingPageTypeHasInstanceRevisions->remove($this->collTrackingPageTypeHasInstanceRevisions->search($trackingPageTypeHasInstanceRevision));
            if (null === $this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion) {
                $this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion = clone $this->collTrackingPageTypeHasInstanceRevisions;
                $this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion->clear();
            }
            $this->trackingPageTypeHasInstanceRevisionsScheduledForDeletion[]= clone $trackingPageTypeHasInstanceRevision;
            $trackingPageTypeHasInstanceRevision->setTrackingInstanceRevision(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacTrackingInstanceRevision is new, it will return
     * an empty collection; or if this PacTrackingInstanceRevision has previously
     * been saved, it will retrieve related TrackingPageTypeHasInstanceRevisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacTrackingInstanceRevision.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision[] List of ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevision objects
     */
    public function getTrackingPageTypeHasInstanceRevisionsJoinTrackingPageType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectA_Zed_Tracking_Persistence_PacTrackingPageTypeHasInstanceRevisionQuery::create(null, $criteria);
        $query->joinWith('TrackingPageType', $join_behavior);

        return $this->getTrackingPageTypeHasInstanceRevisions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tracking_instance_revision = null;
        $this->is_global = null;
        $this->revision = null;
        $this->fk_tracking_instance = null;
        $this->config = null;
        $this->code = null;
        $this->created_at = null;
        $this->updated_at = null;
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
            if ($this->collTrackingPageTypeHasInstanceRevisions) {
                foreach ($this->collTrackingPageTypeHasInstanceRevisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aTrackingInstance instanceof Persistent) {
              $this->aTrackingInstance->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTrackingPageTypeHasInstanceRevisions instanceof PropelCollection) {
            $this->collTrackingPageTypeHasInstanceRevisions->clearIterator();
        }
        $this->collTrackingPageTypeHasInstanceRevisions = null;
        $this->aTrackingInstance = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::DEFAULT_STRING_FORMAT);
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

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevision The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = ProjectA_Zed_Tracking_Persistence_PacTrackingInstanceRevisionPeer::UPDATED_AT;

        return $this;
    }

}
