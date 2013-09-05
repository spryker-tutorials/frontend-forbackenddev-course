<?php


/**
 * Base class that represents a query for the 'pac_sales_order_item_status' table.
 *
 *
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery orderByIdSalesOrderItemStatus($order = Criteria::ASC) Order by the id_sales_order_item_status column
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery groupByIdSalesOrderItemStatus() Group by the id_sales_order_item_status column
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery groupByName() Group by the name column
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery groupByDescription() Group by the description column
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery leftJoinStatusHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the StatusHistory relation
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery rightJoinStatusHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StatusHistory relation
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery innerJoinStatusHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the StatusHistory relation
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery leftJoinOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the Order relation
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery rightJoinOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Order relation
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery innerJoinOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the Order relation
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus findOne(PropelPDO $con = null) Return the first ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus matching the query
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus findOneOrCreate(PropelPDO $con = null) Return the first ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus matching the query, or a new ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus object populated from the query conditions when no match is found
 *
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus findOneByName(string $name) Return the first ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus filtered by the name column
 * @method ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus findOneByDescription(string $description) Return the first ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus filtered by the description column
 *
 * @method array findByIdSalesOrderItemStatus(int $id_sales_order_item_status) Return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus objects filtered by the id_sales_order_item_status column
 * @method array findByName(string $name) Return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus objects filtered by the name column
 * @method array findByDescription(string $description) Return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus objects filtered by the description column
 *
 * @package    propel.generator.vendor/project-a/sales-package/ProjectA/Zed/Sales/Persistence.om
 */
abstract class Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemStatusQuery extends ModelCriteria
{
    /**
     * Initializes internal state of Generated_Zed_Sales_Persistence_Om_BasePacSalesOrderItemStatusQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = 'ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery) {
            return $criteria;
        }
        $query = new ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus|ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSalesOrderItemStatus($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_sales_order_item_status`, `name`, `description` FROM `pac_sales_order_item_status` WHERE `id_sales_order_item_status` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus();
            $obj->hydrate($row);
            ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus|ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_order_item_status column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesOrderItemStatus(1234); // WHERE id_sales_order_item_status = 1234
     * $query->filterByIdSalesOrderItemStatus(array(12, 34)); // WHERE id_sales_order_item_status IN (12, 34)
     * $query->filterByIdSalesOrderItemStatus(array('min' => 12)); // WHERE id_sales_order_item_status >= 12
     * $query->filterByIdSalesOrderItemStatus(array('max' => 12)); // WHERE id_sales_order_item_status <= 12
     * </code>
     *
     * @param     mixed $idSalesOrderItemStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function filterByIdSalesOrderItemStatus($idSalesOrderItemStatus = null, $comparison = null)
    {
        if (is_array($idSalesOrderItemStatus)) {
            $useMinMax = false;
            if (isset($idSalesOrderItemStatus['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $idSalesOrderItemStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesOrderItemStatus['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $idSalesOrderItemStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $idSalesOrderItemStatus, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query by a related ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusHistory object
     *
     * @param   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusHistory|PropelObjectCollection $pacSalesOrderItemStatusHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByStatusHistory($pacSalesOrderItemStatusHistory, $comparison = null)
    {
        if ($pacSalesOrderItemStatusHistory instanceof ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusHistory) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $pacSalesOrderItemStatusHistory->getFkSalesOrderItemStatus(), $comparison);
        } elseif ($pacSalesOrderItemStatusHistory instanceof PropelObjectCollection) {
            return $this
                ->useStatusHistoryQuery()
                ->filterByPrimaryKeys($pacSalesOrderItemStatusHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStatusHistory() only accepts arguments of type ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StatusHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function joinStatusHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StatusHistory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'StatusHistory');
        }

        return $this;
    }

    /**
     * Use the StatusHistory relation PacSalesOrderItemStatusHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusHistoryQuery A secondary query class using the current class as primary query
     */
    public function useStatusHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStatusHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StatusHistory', 'ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusHistoryQuery');
    }

    /**
     * Filter the query by a related ProjectA_Zed_Sales_Persistence_PacSalesOrderItem object
     *
     * @param   ProjectA_Zed_Sales_Persistence_PacSalesOrderItem|PropelObjectCollection $pacSalesOrderItem  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrder($pacSalesOrderItem, $comparison = null)
    {
        if ($pacSalesOrderItem instanceof ProjectA_Zed_Sales_Persistence_PacSalesOrderItem) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $pacSalesOrderItem->getFkSalesOrderItemStatus(), $comparison);
        } elseif ($pacSalesOrderItem instanceof PropelObjectCollection) {
            return $this
                ->useOrderQuery()
                ->filterByPrimaryKeys($pacSalesOrderItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrder() only accepts arguments of type ProjectA_Zed_Sales_Persistence_PacSalesOrderItem or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Order relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function joinOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Order');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Order');
        }

        return $this;
    }

    /**
     * Use the Order relation PacSalesOrderItem object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemQuery A secondary query class using the current class as primary query
     */
    public function useOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Order', 'ProjectA_Zed_Sales_Persistence_PacSalesOrderItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatus $pacSalesOrderItemStatus Object to remove from the list of results
     *
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusQuery The current query, for fluid interface
     */
    public function prune($pacSalesOrderItemStatus = null)
    {
        if ($pacSalesOrderItemStatus) {
            $this->addUsingAlias(ProjectA_Zed_Sales_Persistence_PacSalesOrderItemStatusPeer::ID_SALES_ORDER_ITEM_STATUS, $pacSalesOrderItemStatus->getIdSalesOrderItemStatus(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
