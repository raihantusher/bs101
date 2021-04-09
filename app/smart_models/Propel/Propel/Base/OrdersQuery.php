<?php

namespace Propel\Propel\Base;

use \Exception;
use \PDO;
use Propel\Propel\Orders as ChildOrders;
use Propel\Propel\OrdersQuery as ChildOrdersQuery;
use Propel\Propel\Map\OrdersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'orders' table.
 *
 *
 *
 * @method     ChildOrdersQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildOrdersQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ChildOrdersQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method     ChildOrdersQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     ChildOrdersQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     ChildOrdersQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method     ChildOrdersQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildOrdersQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method     ChildOrdersQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildOrdersQuery orderByZip($order = Criteria::ASC) Order by the zip column
 * @method     ChildOrdersQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     ChildOrdersQuery orderByShippingFirstName($order = Criteria::ASC) Order by the shipping_first_name column
 * @method     ChildOrdersQuery orderByShippingLastName($order = Criteria::ASC) Order by the shipping_last_name column
 * @method     ChildOrdersQuery orderByShippingMobile($order = Criteria::ASC) Order by the shipping_mobile column
 * @method     ChildOrdersQuery orderByShippingEmail($order = Criteria::ASC) Order by the shipping_email column
 * @method     ChildOrdersQuery orderByShippingRegion($order = Criteria::ASC) Order by the shipping_region column
 * @method     ChildOrdersQuery orderByShippingCity($order = Criteria::ASC) Order by the shipping_city column
 * @method     ChildOrdersQuery orderByShippingZip($order = Criteria::ASC) Order by the shipping_zip column
 * @method     ChildOrdersQuery orderByShippingAddress($order = Criteria::ASC) Order by the shipping_address column
 * @method     ChildOrdersQuery orderBySellerNote($order = Criteria::ASC) Order by the seller_note column
 * @method     ChildOrdersQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildOrdersQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ChildOrdersQuery groupById() Group by the id column
 * @method     ChildOrdersQuery groupByUserId() Group by the user_id column
 * @method     ChildOrdersQuery groupByNote() Group by the note column
 * @method     ChildOrdersQuery groupByFirstName() Group by the first_name column
 * @method     ChildOrdersQuery groupByLastName() Group by the last_name column
 * @method     ChildOrdersQuery groupByMobile() Group by the mobile column
 * @method     ChildOrdersQuery groupByEmail() Group by the email column
 * @method     ChildOrdersQuery groupByRegion() Group by the region column
 * @method     ChildOrdersQuery groupByCity() Group by the city column
 * @method     ChildOrdersQuery groupByZip() Group by the zip column
 * @method     ChildOrdersQuery groupByAddress() Group by the address column
 * @method     ChildOrdersQuery groupByShippingFirstName() Group by the shipping_first_name column
 * @method     ChildOrdersQuery groupByShippingLastName() Group by the shipping_last_name column
 * @method     ChildOrdersQuery groupByShippingMobile() Group by the shipping_mobile column
 * @method     ChildOrdersQuery groupByShippingEmail() Group by the shipping_email column
 * @method     ChildOrdersQuery groupByShippingRegion() Group by the shipping_region column
 * @method     ChildOrdersQuery groupByShippingCity() Group by the shipping_city column
 * @method     ChildOrdersQuery groupByShippingZip() Group by the shipping_zip column
 * @method     ChildOrdersQuery groupByShippingAddress() Group by the shipping_address column
 * @method     ChildOrdersQuery groupBySellerNote() Group by the seller_note column
 * @method     ChildOrdersQuery groupByStatus() Group by the status column
 * @method     ChildOrdersQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ChildOrdersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildOrdersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildOrdersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildOrdersQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildOrdersQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildOrdersQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildOrders|null findOne(ConnectionInterface $con = null) Return the first ChildOrders matching the query
 * @method     ChildOrders findOneOrCreate(ConnectionInterface $con = null) Return the first ChildOrders matching the query, or a new ChildOrders object populated from the query conditions when no match is found
 *
 * @method     ChildOrders|null findOneById(int $id) Return the first ChildOrders filtered by the id column
 * @method     ChildOrders|null findOneByUserId(int $user_id) Return the first ChildOrders filtered by the user_id column
 * @method     ChildOrders|null findOneByNote(string $note) Return the first ChildOrders filtered by the note column
 * @method     ChildOrders|null findOneByFirstName(string $first_name) Return the first ChildOrders filtered by the first_name column
 * @method     ChildOrders|null findOneByLastName(string $last_name) Return the first ChildOrders filtered by the last_name column
 * @method     ChildOrders|null findOneByMobile(string $mobile) Return the first ChildOrders filtered by the mobile column
 * @method     ChildOrders|null findOneByEmail(string $email) Return the first ChildOrders filtered by the email column
 * @method     ChildOrders|null findOneByRegion(string $region) Return the first ChildOrders filtered by the region column
 * @method     ChildOrders|null findOneByCity(string $city) Return the first ChildOrders filtered by the city column
 * @method     ChildOrders|null findOneByZip(string $zip) Return the first ChildOrders filtered by the zip column
 * @method     ChildOrders|null findOneByAddress(string $address) Return the first ChildOrders filtered by the address column
 * @method     ChildOrders|null findOneByShippingFirstName(string $shipping_first_name) Return the first ChildOrders filtered by the shipping_first_name column
 * @method     ChildOrders|null findOneByShippingLastName(string $shipping_last_name) Return the first ChildOrders filtered by the shipping_last_name column
 * @method     ChildOrders|null findOneByShippingMobile(string $shipping_mobile) Return the first ChildOrders filtered by the shipping_mobile column
 * @method     ChildOrders|null findOneByShippingEmail(string $shipping_email) Return the first ChildOrders filtered by the shipping_email column
 * @method     ChildOrders|null findOneByShippingRegion(string $shipping_region) Return the first ChildOrders filtered by the shipping_region column
 * @method     ChildOrders|null findOneByShippingCity(string $shipping_city) Return the first ChildOrders filtered by the shipping_city column
 * @method     ChildOrders|null findOneByShippingZip(string $shipping_zip) Return the first ChildOrders filtered by the shipping_zip column
 * @method     ChildOrders|null findOneByShippingAddress(string $shipping_address) Return the first ChildOrders filtered by the shipping_address column
 * @method     ChildOrders|null findOneBySellerNote(string $seller_note) Return the first ChildOrders filtered by the seller_note column
 * @method     ChildOrders|null findOneByStatus(string $status) Return the first ChildOrders filtered by the status column
 * @method     ChildOrders|null findOneByCreatedAt(string $created_at) Return the first ChildOrders filtered by the created_at column *

 * @method     ChildOrders requirePk($key, ConnectionInterface $con = null) Return the ChildOrders by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOne(ConnectionInterface $con = null) Return the first ChildOrders matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOrders requireOneById(int $id) Return the first ChildOrders filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByUserId(int $user_id) Return the first ChildOrders filtered by the user_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByNote(string $note) Return the first ChildOrders filtered by the note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByFirstName(string $first_name) Return the first ChildOrders filtered by the first_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByLastName(string $last_name) Return the first ChildOrders filtered by the last_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByMobile(string $mobile) Return the first ChildOrders filtered by the mobile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByEmail(string $email) Return the first ChildOrders filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByRegion(string $region) Return the first ChildOrders filtered by the region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByCity(string $city) Return the first ChildOrders filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByZip(string $zip) Return the first ChildOrders filtered by the zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByAddress(string $address) Return the first ChildOrders filtered by the address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingFirstName(string $shipping_first_name) Return the first ChildOrders filtered by the shipping_first_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingLastName(string $shipping_last_name) Return the first ChildOrders filtered by the shipping_last_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingMobile(string $shipping_mobile) Return the first ChildOrders filtered by the shipping_mobile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingEmail(string $shipping_email) Return the first ChildOrders filtered by the shipping_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingRegion(string $shipping_region) Return the first ChildOrders filtered by the shipping_region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingCity(string $shipping_city) Return the first ChildOrders filtered by the shipping_city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingZip(string $shipping_zip) Return the first ChildOrders filtered by the shipping_zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByShippingAddress(string $shipping_address) Return the first ChildOrders filtered by the shipping_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneBySellerNote(string $seller_note) Return the first ChildOrders filtered by the seller_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByStatus(string $status) Return the first ChildOrders filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOrders requireOneByCreatedAt(string $created_at) Return the first ChildOrders filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOrders[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildOrders objects based on current ModelCriteria
 * @method     ChildOrders[]|ObjectCollection findById(int $id) Return ChildOrders objects filtered by the id column
 * @method     ChildOrders[]|ObjectCollection findByUserId(int $user_id) Return ChildOrders objects filtered by the user_id column
 * @method     ChildOrders[]|ObjectCollection findByNote(string $note) Return ChildOrders objects filtered by the note column
 * @method     ChildOrders[]|ObjectCollection findByFirstName(string $first_name) Return ChildOrders objects filtered by the first_name column
 * @method     ChildOrders[]|ObjectCollection findByLastName(string $last_name) Return ChildOrders objects filtered by the last_name column
 * @method     ChildOrders[]|ObjectCollection findByMobile(string $mobile) Return ChildOrders objects filtered by the mobile column
 * @method     ChildOrders[]|ObjectCollection findByEmail(string $email) Return ChildOrders objects filtered by the email column
 * @method     ChildOrders[]|ObjectCollection findByRegion(string $region) Return ChildOrders objects filtered by the region column
 * @method     ChildOrders[]|ObjectCollection findByCity(string $city) Return ChildOrders objects filtered by the city column
 * @method     ChildOrders[]|ObjectCollection findByZip(string $zip) Return ChildOrders objects filtered by the zip column
 * @method     ChildOrders[]|ObjectCollection findByAddress(string $address) Return ChildOrders objects filtered by the address column
 * @method     ChildOrders[]|ObjectCollection findByShippingFirstName(string $shipping_first_name) Return ChildOrders objects filtered by the shipping_first_name column
 * @method     ChildOrders[]|ObjectCollection findByShippingLastName(string $shipping_last_name) Return ChildOrders objects filtered by the shipping_last_name column
 * @method     ChildOrders[]|ObjectCollection findByShippingMobile(string $shipping_mobile) Return ChildOrders objects filtered by the shipping_mobile column
 * @method     ChildOrders[]|ObjectCollection findByShippingEmail(string $shipping_email) Return ChildOrders objects filtered by the shipping_email column
 * @method     ChildOrders[]|ObjectCollection findByShippingRegion(string $shipping_region) Return ChildOrders objects filtered by the shipping_region column
 * @method     ChildOrders[]|ObjectCollection findByShippingCity(string $shipping_city) Return ChildOrders objects filtered by the shipping_city column
 * @method     ChildOrders[]|ObjectCollection findByShippingZip(string $shipping_zip) Return ChildOrders objects filtered by the shipping_zip column
 * @method     ChildOrders[]|ObjectCollection findByShippingAddress(string $shipping_address) Return ChildOrders objects filtered by the shipping_address column
 * @method     ChildOrders[]|ObjectCollection findBySellerNote(string $seller_note) Return ChildOrders objects filtered by the seller_note column
 * @method     ChildOrders[]|ObjectCollection findByStatus(string $status) Return ChildOrders objects filtered by the status column
 * @method     ChildOrders[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildOrders objects filtered by the created_at column
 * @method     ChildOrders[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class OrdersQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Propel\Propel\Base\OrdersQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Propel\\Propel\\Orders', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildOrdersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildOrdersQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildOrdersQuery) {
            return $criteria;
        }
        $query = new ChildOrdersQuery();
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
     * @return ChildOrders|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(OrdersTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = OrdersTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildOrders A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, user_id, note, first_name, last_name, mobile, email, region, city, zip, address, shipping_first_name, shipping_last_name, shipping_mobile, shipping_email, shipping_region, shipping_city, shipping_zip, shipping_address, seller_note, status, created_at FROM orders WHERE id = :p0';
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
            /** @var ChildOrders $obj */
            $obj = new ChildOrders();
            $obj->hydrate($row);
            OrdersTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildOrders|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdersTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdersTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(OrdersTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(OrdersTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(OrdersTableMap::COL_USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(OrdersTableMap::COL_USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%', Criteria::LIKE); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%', Criteria::LIKE); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByFirstName($firstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_FIRST_NAME, $firstName, $comparison);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%', Criteria::LIKE); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByLastName($lastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_LAST_NAME, $lastName, $comparison);
    }

    /**
     * Filter the query on the mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByMobile('fooValue');   // WHERE mobile = 'fooValue'
     * $query->filterByMobile('%fooValue%', Criteria::LIKE); // WHERE mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mobile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByMobile($mobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mobile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_MOBILE, $mobile, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE region = 'fooValue'
     * $query->filterByRegion('%fooValue%', Criteria::LIKE); // WHERE region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_REGION, $region, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%', Criteria::LIKE); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the zip column
     *
     * Example usage:
     * <code>
     * $query->filterByZip('fooValue');   // WHERE zip = 'fooValue'
     * $query->filterByZip('%fooValue%', Criteria::LIKE); // WHERE zip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByZip($zip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_ZIP, $zip, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%', Criteria::LIKE); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the shipping_first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingFirstName('fooValue');   // WHERE shipping_first_name = 'fooValue'
     * $query->filterByShippingFirstName('%fooValue%', Criteria::LIKE); // WHERE shipping_first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingFirstName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingFirstName($shippingFirstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingFirstName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_FIRST_NAME, $shippingFirstName, $comparison);
    }

    /**
     * Filter the query on the shipping_last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingLastName('fooValue');   // WHERE shipping_last_name = 'fooValue'
     * $query->filterByShippingLastName('%fooValue%', Criteria::LIKE); // WHERE shipping_last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingLastName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingLastName($shippingLastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingLastName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_LAST_NAME, $shippingLastName, $comparison);
    }

    /**
     * Filter the query on the shipping_mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingMobile('fooValue');   // WHERE shipping_mobile = 'fooValue'
     * $query->filterByShippingMobile('%fooValue%', Criteria::LIKE); // WHERE shipping_mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingMobile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingMobile($shippingMobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingMobile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_MOBILE, $shippingMobile, $comparison);
    }

    /**
     * Filter the query on the shipping_email column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingEmail('fooValue');   // WHERE shipping_email = 'fooValue'
     * $query->filterByShippingEmail('%fooValue%', Criteria::LIKE); // WHERE shipping_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingEmail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingEmail($shippingEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingEmail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_EMAIL, $shippingEmail, $comparison);
    }

    /**
     * Filter the query on the shipping_region column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingRegion('fooValue');   // WHERE shipping_region = 'fooValue'
     * $query->filterByShippingRegion('%fooValue%', Criteria::LIKE); // WHERE shipping_region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingRegion The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingRegion($shippingRegion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingRegion)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_REGION, $shippingRegion, $comparison);
    }

    /**
     * Filter the query on the shipping_city column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingCity('fooValue');   // WHERE shipping_city = 'fooValue'
     * $query->filterByShippingCity('%fooValue%', Criteria::LIKE); // WHERE shipping_city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingCity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingCity($shippingCity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingCity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_CITY, $shippingCity, $comparison);
    }

    /**
     * Filter the query on the shipping_zip column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingZip('fooValue');   // WHERE shipping_zip = 'fooValue'
     * $query->filterByShippingZip('%fooValue%', Criteria::LIKE); // WHERE shipping_zip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingZip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingZip($shippingZip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingZip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_ZIP, $shippingZip, $comparison);
    }

    /**
     * Filter the query on the shipping_address column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingAddress('fooValue');   // WHERE shipping_address = 'fooValue'
     * $query->filterByShippingAddress('%fooValue%', Criteria::LIKE); // WHERE shipping_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingAddress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByShippingAddress($shippingAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingAddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SHIPPING_ADDRESS, $shippingAddress, $comparison);
    }

    /**
     * Filter the query on the seller_note column
     *
     * Example usage:
     * <code>
     * $query->filterBySellerNote('fooValue');   // WHERE seller_note = 'fooValue'
     * $query->filterBySellerNote('%fooValue%', Criteria::LIKE); // WHERE seller_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sellerNote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterBySellerNote($sellerNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sellerNote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_SELLER_NOTE, $sellerNote, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(OrdersTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(OrdersTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdersTableMap::COL_CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildOrders $orders Object to remove from the list of results
     *
     * @return $this|ChildOrdersQuery The current query, for fluid interface
     */
    public function prune($orders = null)
    {
        if ($orders) {
            $this->addUsingAlias(OrdersTableMap::COL_ID, $orders->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the orders table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OrdersTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OrdersTableMap::clearInstancePool();
            OrdersTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(OrdersTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(OrdersTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            OrdersTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            OrdersTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // OrdersQuery
