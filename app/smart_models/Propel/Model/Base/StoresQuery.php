<?php

namespace Propel\Model\Base;

use \Exception;
use \PDO;
use Propel\Model\Stores as ChildStores;
use Propel\Model\StoresQuery as ChildStoresQuery;
use Propel\Model\Map\StoresTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'stores' table.
 *
 *
 *
 * @method     ChildStoresQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildStoresQuery orderByStoreName($order = Criteria::ASC) Order by the store_name column
 * @method     ChildStoresQuery orderByStoreTitle($order = Criteria::ASC) Order by the store_title column
 * @method     ChildStoresQuery orderByStoreEmail($order = Criteria::ASC) Order by the store_email column
 * @method     ChildStoresQuery orderByStorePhone($order = Criteria::ASC) Order by the store_phone column
 * @method     ChildStoresQuery orderByStoreAddress($order = Criteria::ASC) Order by the store_address column
 *
 * @method     ChildStoresQuery groupById() Group by the id column
 * @method     ChildStoresQuery groupByStoreName() Group by the store_name column
 * @method     ChildStoresQuery groupByStoreTitle() Group by the store_title column
 * @method     ChildStoresQuery groupByStoreEmail() Group by the store_email column
 * @method     ChildStoresQuery groupByStorePhone() Group by the store_phone column
 * @method     ChildStoresQuery groupByStoreAddress() Group by the store_address column
 *
 * @method     ChildStoresQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStoresQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStoresQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStoresQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildStoresQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildStoresQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildStores|null findOne(ConnectionInterface $con = null) Return the first ChildStores matching the query
 * @method     ChildStores findOneOrCreate(ConnectionInterface $con = null) Return the first ChildStores matching the query, or a new ChildStores object populated from the query conditions when no match is found
 *
 * @method     ChildStores|null findOneById(int $id) Return the first ChildStores filtered by the id column
 * @method     ChildStores|null findOneByStoreName(string $store_name) Return the first ChildStores filtered by the store_name column
 * @method     ChildStores|null findOneByStoreTitle(string $store_title) Return the first ChildStores filtered by the store_title column
 * @method     ChildStores|null findOneByStoreEmail(string $store_email) Return the first ChildStores filtered by the store_email column
 * @method     ChildStores|null findOneByStorePhone(string $store_phone) Return the first ChildStores filtered by the store_phone column
 * @method     ChildStores|null findOneByStoreAddress(string $store_address) Return the first ChildStores filtered by the store_address column *

 * @method     ChildStores requirePk($key, ConnectionInterface $con = null) Return the ChildStores by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStores requireOne(ConnectionInterface $con = null) Return the first ChildStores matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStores requireOneById(int $id) Return the first ChildStores filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStores requireOneByStoreName(string $store_name) Return the first ChildStores filtered by the store_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStores requireOneByStoreTitle(string $store_title) Return the first ChildStores filtered by the store_title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStores requireOneByStoreEmail(string $store_email) Return the first ChildStores filtered by the store_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStores requireOneByStorePhone(string $store_phone) Return the first ChildStores filtered by the store_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStores requireOneByStoreAddress(string $store_address) Return the first ChildStores filtered by the store_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStores[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildStores objects based on current ModelCriteria
 * @method     ChildStores[]|ObjectCollection findById(int $id) Return ChildStores objects filtered by the id column
 * @method     ChildStores[]|ObjectCollection findByStoreName(string $store_name) Return ChildStores objects filtered by the store_name column
 * @method     ChildStores[]|ObjectCollection findByStoreTitle(string $store_title) Return ChildStores objects filtered by the store_title column
 * @method     ChildStores[]|ObjectCollection findByStoreEmail(string $store_email) Return ChildStores objects filtered by the store_email column
 * @method     ChildStores[]|ObjectCollection findByStorePhone(string $store_phone) Return ChildStores objects filtered by the store_phone column
 * @method     ChildStores[]|ObjectCollection findByStoreAddress(string $store_address) Return ChildStores objects filtered by the store_address column
 * @method     ChildStores[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class StoresQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Propel\Model\Base\StoresQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Propel\\Model\\Stores', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStoresQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStoresQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildStoresQuery) {
            return $criteria;
        }
        $query = new ChildStoresQuery();
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
     * @return ChildStores|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(StoresTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = StoresTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildStores A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, store_name, store_title, store_email, store_phone, store_address FROM stores WHERE id = :p0';
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
            /** @var ChildStores $obj */
            $obj = new ChildStores();
            $obj->hydrate($row);
            StoresTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildStores|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StoresTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StoresTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StoresTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StoresTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoresTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the store_name column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreName('fooValue');   // WHERE store_name = 'fooValue'
     * $query->filterByStoreName('%fooValue%', Criteria::LIKE); // WHERE store_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storeName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByStoreName($storeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storeName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoresTableMap::COL_STORE_NAME, $storeName, $comparison);
    }

    /**
     * Filter the query on the store_title column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreTitle('fooValue');   // WHERE store_title = 'fooValue'
     * $query->filterByStoreTitle('%fooValue%', Criteria::LIKE); // WHERE store_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storeTitle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByStoreTitle($storeTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storeTitle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoresTableMap::COL_STORE_TITLE, $storeTitle, $comparison);
    }

    /**
     * Filter the query on the store_email column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreEmail('fooValue');   // WHERE store_email = 'fooValue'
     * $query->filterByStoreEmail('%fooValue%', Criteria::LIKE); // WHERE store_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storeEmail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByStoreEmail($storeEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storeEmail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoresTableMap::COL_STORE_EMAIL, $storeEmail, $comparison);
    }

    /**
     * Filter the query on the store_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByStorePhone('fooValue');   // WHERE store_phone = 'fooValue'
     * $query->filterByStorePhone('%fooValue%', Criteria::LIKE); // WHERE store_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storePhone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByStorePhone($storePhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storePhone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoresTableMap::COL_STORE_PHONE, $storePhone, $comparison);
    }

    /**
     * Filter the query on the store_address column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreAddress('fooValue');   // WHERE store_address = 'fooValue'
     * $query->filterByStoreAddress('%fooValue%', Criteria::LIKE); // WHERE store_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storeAddress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function filterByStoreAddress($storeAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storeAddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoresTableMap::COL_STORE_ADDRESS, $storeAddress, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildStores $stores Object to remove from the list of results
     *
     * @return $this|ChildStoresQuery The current query, for fluid interface
     */
    public function prune($stores = null)
    {
        if ($stores) {
            $this->addUsingAlias(StoresTableMap::COL_ID, $stores->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the stores table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StoresTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StoresTableMap::clearInstancePool();
            StoresTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(StoresTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StoresTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StoresTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StoresTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // StoresQuery
