<?php


/**
 * Base class that represents a query for the 'pac_catalog_value_integer' table.
 *
 *
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery orderByIdCatalogValueInteger($order = Criteria::ASC) Order by the id_catalog_value_integer column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery orderByFkCatalogAttribute($order = Criteria::ASC) Order by the fk_catalog_attribute column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery orderByFkCatalogProduct($order = Criteria::ASC) Order by the fk_catalog_product column
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery groupByIdCatalogValueInteger() Group by the id_catalog_value_integer column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery groupByValue() Group by the value column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery groupByFkCatalogAttribute() Group by the fk_catalog_attribute column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery groupByFkCatalogProduct() Group by the fk_catalog_product column
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery leftJoinAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attribute relation
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery rightJoinAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attribute relation
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery innerJoinAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the Attribute relation
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger findOne(PropelPDO $con = null) Return the first ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger matching the query
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger findOneOrCreate(PropelPDO $con = null) Return the first ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger matching the query, or a new ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger object populated from the query conditions when no match is found
 *
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger findOneByValue(int $value) Return the first ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger filtered by the value column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger findOneByFkCatalogAttribute(int $fk_catalog_attribute) Return the first ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger filtered by the fk_catalog_attribute column
 * @method ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger findOneByFkCatalogProduct(int $fk_catalog_product) Return the first ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger filtered by the fk_catalog_product column
 *
 * @method array findByIdCatalogValueInteger(int $id_catalog_value_integer) Return ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger objects filtered by the id_catalog_value_integer column
 * @method array findByValue(int $value) Return ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger objects filtered by the value column
 * @method array findByFkCatalogAttribute(int $fk_catalog_attribute) Return ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger objects filtered by the fk_catalog_attribute column
 * @method array findByFkCatalogProduct(int $fk_catalog_product) Return ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger objects filtered by the fk_catalog_product column
 *
 * @package    propel.generator.vendor/project-a/catalog-package/ProjectA/Zed/Catalog/Persistence.om
 */
abstract class Generated_Zed_Catalog_Persistence_Om_BasePacCatalogValueIntegerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of Generated_Zed_Catalog_Persistence_Om_BasePacCatalogValueIntegerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = 'ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery) {
            return $criteria;
        }
        $query = new ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery();
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
     * @return   ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger|ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCatalogValueInteger($key, $con = null)
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
     * @return                 ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_catalog_value_integer`, `value`, `fk_catalog_attribute`, `fk_catalog_product` FROM `pac_catalog_value_integer` WHERE `id_catalog_value_integer` = :p0';
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
            $obj = new ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger();
            $obj->hydrate($row);
            ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger|ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger[]|mixed the list of results, formatted by the current formatter
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
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::ID_CATALOG_VALUE_INTEGER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::ID_CATALOG_VALUE_INTEGER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_catalog_value_integer column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCatalogValueInteger(1234); // WHERE id_catalog_value_integer = 1234
     * $query->filterByIdCatalogValueInteger(array(12, 34)); // WHERE id_catalog_value_integer IN (12, 34)
     * $query->filterByIdCatalogValueInteger(array('min' => 12)); // WHERE id_catalog_value_integer >= 12
     * $query->filterByIdCatalogValueInteger(array('max' => 12)); // WHERE id_catalog_value_integer <= 12
     * </code>
     *
     * @param     mixed $idCatalogValueInteger The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function filterByIdCatalogValueInteger($idCatalogValueInteger = null, $comparison = null)
    {
        if (is_array($idCatalogValueInteger)) {
            $useMinMax = false;
            if (isset($idCatalogValueInteger['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::ID_CATALOG_VALUE_INTEGER, $idCatalogValueInteger['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCatalogValueInteger['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::ID_CATALOG_VALUE_INTEGER, $idCatalogValueInteger['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::ID_CATALOG_VALUE_INTEGER, $idCatalogValueInteger, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue(1234); // WHERE value = 1234
     * $query->filterByValue(array(12, 34)); // WHERE value IN (12, 34)
     * $query->filterByValue(array('min' => 12)); // WHERE value >= 12
     * $query->filterByValue(array('max' => 12)); // WHERE value <= 12
     * </code>
     *
     * @param     mixed $value The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (is_array($value)) {
            $useMinMax = false;
            if (isset($value['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($value['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::VALUE, $value, $comparison);
    }

    /**
     * Filter the query on the fk_catalog_attribute column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCatalogAttribute(1234); // WHERE fk_catalog_attribute = 1234
     * $query->filterByFkCatalogAttribute(array(12, 34)); // WHERE fk_catalog_attribute IN (12, 34)
     * $query->filterByFkCatalogAttribute(array('min' => 12)); // WHERE fk_catalog_attribute >= 12
     * $query->filterByFkCatalogAttribute(array('max' => 12)); // WHERE fk_catalog_attribute <= 12
     * </code>
     *
     * @see       filterByAttribute()
     *
     * @param     mixed $fkCatalogAttribute The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function filterByFkCatalogAttribute($fkCatalogAttribute = null, $comparison = null)
    {
        if (is_array($fkCatalogAttribute)) {
            $useMinMax = false;
            if (isset($fkCatalogAttribute['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_ATTRIBUTE, $fkCatalogAttribute['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCatalogAttribute['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_ATTRIBUTE, $fkCatalogAttribute['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_ATTRIBUTE, $fkCatalogAttribute, $comparison);
    }

    /**
     * Filter the query on the fk_catalog_product column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCatalogProduct(1234); // WHERE fk_catalog_product = 1234
     * $query->filterByFkCatalogProduct(array(12, 34)); // WHERE fk_catalog_product IN (12, 34)
     * $query->filterByFkCatalogProduct(array('min' => 12)); // WHERE fk_catalog_product >= 12
     * $query->filterByFkCatalogProduct(array('max' => 12)); // WHERE fk_catalog_product <= 12
     * </code>
     *
     * @see       filterByProduct()
     *
     * @param     mixed $fkCatalogProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function filterByFkCatalogProduct($fkCatalogProduct = null, $comparison = null)
    {
        if (is_array($fkCatalogProduct)) {
            $useMinMax = false;
            if (isset($fkCatalogProduct['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_PRODUCT, $fkCatalogProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCatalogProduct['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_PRODUCT, $fkCatalogProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_PRODUCT, $fkCatalogProduct, $comparison);
    }

    /**
     * Filter the query by a related ProjectA_Zed_Catalog_Persistence_PacCatalogAttribute object
     *
     * @param   ProjectA_Zed_Catalog_Persistence_PacCatalogAttribute|PropelObjectCollection $pacCatalogAttribute The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAttribute($pacCatalogAttribute, $comparison = null)
    {
        if ($pacCatalogAttribute instanceof ProjectA_Zed_Catalog_Persistence_PacCatalogAttribute) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_ATTRIBUTE, $pacCatalogAttribute->getIdCatalogAttribute(), $comparison);
        } elseif ($pacCatalogAttribute instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_ATTRIBUTE, $pacCatalogAttribute->toKeyValue('PrimaryKey', 'IdCatalogAttribute'), $comparison);
        } else {
            throw new PropelException('filterByAttribute() only accepts arguments of type ProjectA_Zed_Catalog_Persistence_PacCatalogAttribute or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Attribute relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function joinAttribute($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Attribute');

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
            $this->addJoinObject($join, 'Attribute');
        }

        return $this;
    }

    /**
     * Use the Attribute relation PacCatalogAttribute object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Catalog_Persistence_PacCatalogAttributeQuery A secondary query class using the current class as primary query
     */
    public function useAttributeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Attribute', 'ProjectA_Zed_Catalog_Persistence_PacCatalogAttributeQuery');
    }

    /**
     * Filter the query by a related ProjectA_Zed_Catalog_Persistence_PacCatalogProduct object
     *
     * @param   ProjectA_Zed_Catalog_Persistence_PacCatalogProduct|PropelObjectCollection $pacCatalogProduct The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProduct($pacCatalogProduct, $comparison = null)
    {
        if ($pacCatalogProduct instanceof ProjectA_Zed_Catalog_Persistence_PacCatalogProduct) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_PRODUCT, $pacCatalogProduct->getIdCatalogProduct(), $comparison);
        } elseif ($pacCatalogProduct instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::FK_CATALOG_PRODUCT, $pacCatalogProduct->toKeyValue('PrimaryKey', 'IdCatalogProduct'), $comparison);
        } else {
            throw new PropelException('filterByProduct() only accepts arguments of type ProjectA_Zed_Catalog_Persistence_PacCatalogProduct or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Product relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function joinProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Product');

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
            $this->addJoinObject($join, 'Product');
        }

        return $this;
    }

    /**
     * Use the Product relation PacCatalogProduct object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Catalog_Persistence_PacCatalogProductQuery A secondary query class using the current class as primary query
     */
    public function useProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Product', 'ProjectA_Zed_Catalog_Persistence_PacCatalogProductQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ProjectA_Zed_Catalog_Persistence_PacCatalogValueInteger $pacCatalogValueInteger Object to remove from the list of results
     *
     * @return ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerQuery The current query, for fluid interface
     */
    public function prune($pacCatalogValueInteger = null)
    {
        if ($pacCatalogValueInteger) {
            $this->addUsingAlias(ProjectA_Zed_Catalog_Persistence_PacCatalogValueIntegerPeer::ID_CATALOG_VALUE_INTEGER, $pacCatalogValueInteger->getIdCatalogValueInteger(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
