<?php

namespace Propel\Propel\Base;

use \Exception;
use \PDO;
use Propel\Propel\CandleRolePermission as ChildCandleRolePermission;
use Propel\Propel\CandleRolePermissionQuery as ChildCandleRolePermissionQuery;
use Propel\Propel\Map\CandleRolePermissionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'candle_role_permission' table.
 *
 *
 *
 * @method     ChildCandleRolePermissionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCandleRolePermissionQuery orderByPermission($order = Criteria::ASC) Order by the permission column
 * @method     ChildCandleRolePermissionQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method     ChildCandleRolePermissionQuery orderByCan($order = Criteria::ASC) Order by the can column
 *
 * @method     ChildCandleRolePermissionQuery groupById() Group by the id column
 * @method     ChildCandleRolePermissionQuery groupByPermission() Group by the permission column
 * @method     ChildCandleRolePermissionQuery groupByRoleId() Group by the role_id column
 * @method     ChildCandleRolePermissionQuery groupByCan() Group by the can column
 *
 * @method     ChildCandleRolePermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCandleRolePermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCandleRolePermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCandleRolePermissionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCandleRolePermissionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCandleRolePermissionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCandleRolePermission|null findOne(ConnectionInterface $con = null) Return the first ChildCandleRolePermission matching the query
 * @method     ChildCandleRolePermission findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCandleRolePermission matching the query, or a new ChildCandleRolePermission object populated from the query conditions when no match is found
 *
 * @method     ChildCandleRolePermission|null findOneById(int $id) Return the first ChildCandleRolePermission filtered by the id column
 * @method     ChildCandleRolePermission|null findOneByPermission(string $permission) Return the first ChildCandleRolePermission filtered by the permission column
 * @method     ChildCandleRolePermission|null findOneByRoleId(int $role_id) Return the first ChildCandleRolePermission filtered by the role_id column
 * @method     ChildCandleRolePermission|null findOneByCan(int $can) Return the first ChildCandleRolePermission filtered by the can column *

 * @method     ChildCandleRolePermission requirePk($key, ConnectionInterface $con = null) Return the ChildCandleRolePermission by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleRolePermission requireOne(ConnectionInterface $con = null) Return the first ChildCandleRolePermission matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCandleRolePermission requireOneById(int $id) Return the first ChildCandleRolePermission filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleRolePermission requireOneByPermission(string $permission) Return the first ChildCandleRolePermission filtered by the permission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleRolePermission requireOneByRoleId(int $role_id) Return the first ChildCandleRolePermission filtered by the role_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleRolePermission requireOneByCan(int $can) Return the first ChildCandleRolePermission filtered by the can column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCandleRolePermission[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCandleRolePermission objects based on current ModelCriteria
 * @method     ChildCandleRolePermission[]|ObjectCollection findById(int $id) Return ChildCandleRolePermission objects filtered by the id column
 * @method     ChildCandleRolePermission[]|ObjectCollection findByPermission(string $permission) Return ChildCandleRolePermission objects filtered by the permission column
 * @method     ChildCandleRolePermission[]|ObjectCollection findByRoleId(int $role_id) Return ChildCandleRolePermission objects filtered by the role_id column
 * @method     ChildCandleRolePermission[]|ObjectCollection findByCan(int $can) Return ChildCandleRolePermission objects filtered by the can column
 * @method     ChildCandleRolePermission[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CandleRolePermissionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Propel\Propel\Base\CandleRolePermissionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Propel\\Propel\\CandleRolePermission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCandleRolePermissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCandleRolePermissionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCandleRolePermissionQuery) {
            return $criteria;
        }
        $query = new ChildCandleRolePermissionQuery();
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
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCandleRolePermission|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CandleRolePermissionTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CandleRolePermissionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCandleRolePermission A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, permission, role_id, can FROM candle_role_permission WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCandleRolePermission $obj */
            $obj = new ChildCandleRolePermission();
            $obj->hydrate($row);
            CandleRolePermissionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCandleRolePermission|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CandleRolePermissionTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CandleRolePermissionTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CandleRolePermissionTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CandleRolePermissionTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleRolePermissionTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the permission column
     *
     * Example usage:
     * <code>
     * $query->filterByPermission('fooValue');   // WHERE permission = 'fooValue'
     * $query->filterByPermission('%fooValue%', Criteria::LIKE); // WHERE permission LIKE '%fooValue%'
     * </code>
     *
     * @param     string $permission The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function filterByPermission($permission = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($permission)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleRolePermissionTableMap::COL_PERMISSION, $permission, $comparison);
    }

    /**
     * Filter the query on the role_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRoleId(1234); // WHERE role_id = 1234
     * $query->filterByRoleId(array(12, 34)); // WHERE role_id IN (12, 34)
     * $query->filterByRoleId(array('min' => 12)); // WHERE role_id > 12
     * </code>
     *
     * @param     mixed $roleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function filterByRoleId($roleId = null, $comparison = null)
    {
        if (is_array($roleId)) {
            $useMinMax = false;
            if (isset($roleId['min'])) {
                $this->addUsingAlias(CandleRolePermissionTableMap::COL_ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roleId['max'])) {
                $this->addUsingAlias(CandleRolePermissionTableMap::COL_ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleRolePermissionTableMap::COL_ROLE_ID, $roleId, $comparison);
    }

    /**
     * Filter the query on the can column
     *
     * Example usage:
     * <code>
     * $query->filterByCan(1234); // WHERE can = 1234
     * $query->filterByCan(array(12, 34)); // WHERE can IN (12, 34)
     * $query->filterByCan(array('min' => 12)); // WHERE can > 12
     * </code>
     *
     * @param     mixed $can The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function filterByCan($can = null, $comparison = null)
    {
        if (is_array($can)) {
            $useMinMax = false;
            if (isset($can['min'])) {
                $this->addUsingAlias(CandleRolePermissionTableMap::COL_CAN, $can['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($can['max'])) {
                $this->addUsingAlias(CandleRolePermissionTableMap::COL_CAN, $can['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleRolePermissionTableMap::COL_CAN, $can, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCandleRolePermission $candleRolePermission Object to remove from the list of results
     *
     * @return $this|ChildCandleRolePermissionQuery The current query, for fluid interface
     */
    public function prune($candleRolePermission = null)
    {
        if ($candleRolePermission) {
            $this->addUsingAlias(CandleRolePermissionTableMap::COL_ID, $candleRolePermission->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the candle_role_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CandleRolePermissionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CandleRolePermissionTableMap::clearInstancePool();
            CandleRolePermissionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CandleRolePermissionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CandleRolePermissionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CandleRolePermissionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CandleRolePermissionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CandleRolePermissionQuery
