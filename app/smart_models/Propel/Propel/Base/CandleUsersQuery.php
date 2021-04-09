<?php

namespace Propel\Propel\Base;

use \Exception;
use \PDO;
use Propel\Propel\CandleUsers as ChildCandleUsers;
use Propel\Propel\CandleUsersQuery as ChildCandleUsersQuery;
use Propel\Propel\Map\CandleUsersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'candle_users' table.
 *
 *
 *
 * @method     ChildCandleUsersQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCandleUsersQuery orderByFname($order = Criteria::ASC) Order by the fname column
 * @method     ChildCandleUsersQuery orderByLname($order = Criteria::ASC) Order by the lname column
 * @method     ChildCandleUsersQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCandleUsersQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method     ChildCandleUsersQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method     ChildCandleUsersQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildCandleUsersQuery orderByZip($order = Criteria::ASC) Order by the zip column
 * @method     ChildCandleUsersQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     ChildCandleUsersQuery orderByShippingRegion($order = Criteria::ASC) Order by the shipping_region column
 * @method     ChildCandleUsersQuery orderByShippingCity($order = Criteria::ASC) Order by the shipping_city column
 * @method     ChildCandleUsersQuery orderByShippingZip($order = Criteria::ASC) Order by the shipping_zip column
 * @method     ChildCandleUsersQuery orderByShippingAddress($order = Criteria::ASC) Order by the shipping_address column
 * @method     ChildCandleUsersQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     ChildCandleUsersQuery orderByToken($order = Criteria::ASC) Order by the token column
 * @method     ChildCandleUsersQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 *
 * @method     ChildCandleUsersQuery groupById() Group by the id column
 * @method     ChildCandleUsersQuery groupByFname() Group by the fname column
 * @method     ChildCandleUsersQuery groupByLname() Group by the lname column
 * @method     ChildCandleUsersQuery groupByEmail() Group by the email column
 * @method     ChildCandleUsersQuery groupByMobile() Group by the mobile column
 * @method     ChildCandleUsersQuery groupByRegion() Group by the region column
 * @method     ChildCandleUsersQuery groupByCity() Group by the city column
 * @method     ChildCandleUsersQuery groupByZip() Group by the zip column
 * @method     ChildCandleUsersQuery groupByAddress() Group by the address column
 * @method     ChildCandleUsersQuery groupByShippingRegion() Group by the shipping_region column
 * @method     ChildCandleUsersQuery groupByShippingCity() Group by the shipping_city column
 * @method     ChildCandleUsersQuery groupByShippingZip() Group by the shipping_zip column
 * @method     ChildCandleUsersQuery groupByShippingAddress() Group by the shipping_address column
 * @method     ChildCandleUsersQuery groupByPassword() Group by the password column
 * @method     ChildCandleUsersQuery groupByToken() Group by the token column
 * @method     ChildCandleUsersQuery groupByRoleId() Group by the role_id column
 *
 * @method     ChildCandleUsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCandleUsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCandleUsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCandleUsersQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCandleUsersQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCandleUsersQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCandleUsersQuery leftJoinCandleRole($relationAlias = null) Adds a LEFT JOIN clause to the query using the CandleRole relation
 * @method     ChildCandleUsersQuery rightJoinCandleRole($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CandleRole relation
 * @method     ChildCandleUsersQuery innerJoinCandleRole($relationAlias = null) Adds a INNER JOIN clause to the query using the CandleRole relation
 *
 * @method     ChildCandleUsersQuery joinWithCandleRole($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CandleRole relation
 *
 * @method     ChildCandleUsersQuery leftJoinWithCandleRole() Adds a LEFT JOIN clause and with to the query using the CandleRole relation
 * @method     ChildCandleUsersQuery rightJoinWithCandleRole() Adds a RIGHT JOIN clause and with to the query using the CandleRole relation
 * @method     ChildCandleUsersQuery innerJoinWithCandleRole() Adds a INNER JOIN clause and with to the query using the CandleRole relation
 *
 * @method     \Propel\Propel\CandleRoleQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCandleUsers|null findOne(ConnectionInterface $con = null) Return the first ChildCandleUsers matching the query
 * @method     ChildCandleUsers findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCandleUsers matching the query, or a new ChildCandleUsers object populated from the query conditions when no match is found
 *
 * @method     ChildCandleUsers|null findOneById(int $id) Return the first ChildCandleUsers filtered by the id column
 * @method     ChildCandleUsers|null findOneByFname(string $fname) Return the first ChildCandleUsers filtered by the fname column
 * @method     ChildCandleUsers|null findOneByLname(string $lname) Return the first ChildCandleUsers filtered by the lname column
 * @method     ChildCandleUsers|null findOneByEmail(string $email) Return the first ChildCandleUsers filtered by the email column
 * @method     ChildCandleUsers|null findOneByMobile(string $mobile) Return the first ChildCandleUsers filtered by the mobile column
 * @method     ChildCandleUsers|null findOneByRegion(string $region) Return the first ChildCandleUsers filtered by the region column
 * @method     ChildCandleUsers|null findOneByCity(string $city) Return the first ChildCandleUsers filtered by the city column
 * @method     ChildCandleUsers|null findOneByZip(string $zip) Return the first ChildCandleUsers filtered by the zip column
 * @method     ChildCandleUsers|null findOneByAddress(string $address) Return the first ChildCandleUsers filtered by the address column
 * @method     ChildCandleUsers|null findOneByShippingRegion(string $shipping_region) Return the first ChildCandleUsers filtered by the shipping_region column
 * @method     ChildCandleUsers|null findOneByShippingCity(string $shipping_city) Return the first ChildCandleUsers filtered by the shipping_city column
 * @method     ChildCandleUsers|null findOneByShippingZip(string $shipping_zip) Return the first ChildCandleUsers filtered by the shipping_zip column
 * @method     ChildCandleUsers|null findOneByShippingAddress(string $shipping_address) Return the first ChildCandleUsers filtered by the shipping_address column
 * @method     ChildCandleUsers|null findOneByPassword(string $password) Return the first ChildCandleUsers filtered by the password column
 * @method     ChildCandleUsers|null findOneByToken(string $token) Return the first ChildCandleUsers filtered by the token column
 * @method     ChildCandleUsers|null findOneByRoleId(int $role_id) Return the first ChildCandleUsers filtered by the role_id column *

 * @method     ChildCandleUsers requirePk($key, ConnectionInterface $con = null) Return the ChildCandleUsers by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOne(ConnectionInterface $con = null) Return the first ChildCandleUsers matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCandleUsers requireOneById(int $id) Return the first ChildCandleUsers filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByFname(string $fname) Return the first ChildCandleUsers filtered by the fname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByLname(string $lname) Return the first ChildCandleUsers filtered by the lname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByEmail(string $email) Return the first ChildCandleUsers filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByMobile(string $mobile) Return the first ChildCandleUsers filtered by the mobile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByRegion(string $region) Return the first ChildCandleUsers filtered by the region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByCity(string $city) Return the first ChildCandleUsers filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByZip(string $zip) Return the first ChildCandleUsers filtered by the zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByAddress(string $address) Return the first ChildCandleUsers filtered by the address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByShippingRegion(string $shipping_region) Return the first ChildCandleUsers filtered by the shipping_region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByShippingCity(string $shipping_city) Return the first ChildCandleUsers filtered by the shipping_city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByShippingZip(string $shipping_zip) Return the first ChildCandleUsers filtered by the shipping_zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByShippingAddress(string $shipping_address) Return the first ChildCandleUsers filtered by the shipping_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByPassword(string $password) Return the first ChildCandleUsers filtered by the password column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByToken(string $token) Return the first ChildCandleUsers filtered by the token column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleUsers requireOneByRoleId(int $role_id) Return the first ChildCandleUsers filtered by the role_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCandleUsers[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCandleUsers objects based on current ModelCriteria
 * @method     ChildCandleUsers[]|ObjectCollection findById(int $id) Return ChildCandleUsers objects filtered by the id column
 * @method     ChildCandleUsers[]|ObjectCollection findByFname(string $fname) Return ChildCandleUsers objects filtered by the fname column
 * @method     ChildCandleUsers[]|ObjectCollection findByLname(string $lname) Return ChildCandleUsers objects filtered by the lname column
 * @method     ChildCandleUsers[]|ObjectCollection findByEmail(string $email) Return ChildCandleUsers objects filtered by the email column
 * @method     ChildCandleUsers[]|ObjectCollection findByMobile(string $mobile) Return ChildCandleUsers objects filtered by the mobile column
 * @method     ChildCandleUsers[]|ObjectCollection findByRegion(string $region) Return ChildCandleUsers objects filtered by the region column
 * @method     ChildCandleUsers[]|ObjectCollection findByCity(string $city) Return ChildCandleUsers objects filtered by the city column
 * @method     ChildCandleUsers[]|ObjectCollection findByZip(string $zip) Return ChildCandleUsers objects filtered by the zip column
 * @method     ChildCandleUsers[]|ObjectCollection findByAddress(string $address) Return ChildCandleUsers objects filtered by the address column
 * @method     ChildCandleUsers[]|ObjectCollection findByShippingRegion(string $shipping_region) Return ChildCandleUsers objects filtered by the shipping_region column
 * @method     ChildCandleUsers[]|ObjectCollection findByShippingCity(string $shipping_city) Return ChildCandleUsers objects filtered by the shipping_city column
 * @method     ChildCandleUsers[]|ObjectCollection findByShippingZip(string $shipping_zip) Return ChildCandleUsers objects filtered by the shipping_zip column
 * @method     ChildCandleUsers[]|ObjectCollection findByShippingAddress(string $shipping_address) Return ChildCandleUsers objects filtered by the shipping_address column
 * @method     ChildCandleUsers[]|ObjectCollection findByPassword(string $password) Return ChildCandleUsers objects filtered by the password column
 * @method     ChildCandleUsers[]|ObjectCollection findByToken(string $token) Return ChildCandleUsers objects filtered by the token column
 * @method     ChildCandleUsers[]|ObjectCollection findByRoleId(int $role_id) Return ChildCandleUsers objects filtered by the role_id column
 * @method     ChildCandleUsers[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CandleUsersQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Propel\Propel\Base\CandleUsersQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Propel\\Propel\\CandleUsers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCandleUsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCandleUsersQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCandleUsersQuery) {
            return $criteria;
        }
        $query = new ChildCandleUsersQuery();
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
     * @return ChildCandleUsers|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CandleUsersTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CandleUsersTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCandleUsers A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, fname, lname, email, mobile, region, city, zip, address, shipping_region, shipping_city, shipping_zip, shipping_address, password, token, role_id FROM candle_users WHERE id = :p0';
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
            /** @var ChildCandleUsers $obj */
            $obj = new ChildCandleUsers();
            $obj->hydrate($row);
            CandleUsersTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCandleUsers|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CandleUsersTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CandleUsersTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CandleUsersTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CandleUsersTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the fname column
     *
     * Example usage:
     * <code>
     * $query->filterByFname('fooValue');   // WHERE fname = 'fooValue'
     * $query->filterByFname('%fooValue%', Criteria::LIKE); // WHERE fname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByFname($fname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_FNAME, $fname, $comparison);
    }

    /**
     * Filter the query on the lname column
     *
     * Example usage:
     * <code>
     * $query->filterByLname('fooValue');   // WHERE lname = 'fooValue'
     * $query->filterByLname('%fooValue%', Criteria::LIKE); // WHERE lname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByLname($lname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_LNAME, $lname, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_EMAIL, $email, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByMobile($mobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mobile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_MOBILE, $mobile, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_REGION, $region, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_CITY, $city, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByZip($zip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_ZIP, $zip, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_ADDRESS, $address, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByShippingRegion($shippingRegion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingRegion)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_SHIPPING_REGION, $shippingRegion, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByShippingCity($shippingCity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingCity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_SHIPPING_CITY, $shippingCity, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByShippingZip($shippingZip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingZip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_SHIPPING_ZIP, $shippingZip, $comparison);
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
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByShippingAddress($shippingAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingAddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_SHIPPING_ADDRESS, $shippingAddress, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%', Criteria::LIKE); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the token column
     *
     * Example usage:
     * <code>
     * $query->filterByToken('fooValue');   // WHERE token = 'fooValue'
     * $query->filterByToken('%fooValue%', Criteria::LIKE); // WHERE token LIKE '%fooValue%'
     * </code>
     *
     * @param     string $token The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByToken($token = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($token)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_TOKEN, $token, $comparison);
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
     * @see       filterByCandleRole()
     *
     * @param     mixed $roleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByRoleId($roleId = null, $comparison = null)
    {
        if (is_array($roleId)) {
            $useMinMax = false;
            if (isset($roleId['min'])) {
                $this->addUsingAlias(CandleUsersTableMap::COL_ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roleId['max'])) {
                $this->addUsingAlias(CandleUsersTableMap::COL_ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleUsersTableMap::COL_ROLE_ID, $roleId, $comparison);
    }

    /**
     * Filter the query by a related \Propel\Propel\CandleRole object
     *
     * @param \Propel\Propel\CandleRole|ObjectCollection $candleRole The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCandleUsersQuery The current query, for fluid interface
     */
    public function filterByCandleRole($candleRole, $comparison = null)
    {
        if ($candleRole instanceof \Propel\Propel\CandleRole) {
            return $this
                ->addUsingAlias(CandleUsersTableMap::COL_ROLE_ID, $candleRole->getId(), $comparison);
        } elseif ($candleRole instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CandleUsersTableMap::COL_ROLE_ID, $candleRole->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCandleRole() only accepts arguments of type \Propel\Propel\CandleRole or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CandleRole relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function joinCandleRole($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CandleRole');

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
            $this->addJoinObject($join, 'CandleRole');
        }

        return $this;
    }

    /**
     * Use the CandleRole relation CandleRole object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Propel\Propel\CandleRoleQuery A secondary query class using the current class as primary query
     */
    public function useCandleRoleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCandleRole($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CandleRole', '\Propel\Propel\CandleRoleQuery');
    }

    /**
     * Use the CandleRole relation CandleRole object
     *
     * @param callable(\Propel\Propel\CandleRoleQuery):\Propel\Propel\CandleRoleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCandleRoleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCandleRoleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCandleUsers $candleUsers Object to remove from the list of results
     *
     * @return $this|ChildCandleUsersQuery The current query, for fluid interface
     */
    public function prune($candleUsers = null)
    {
        if ($candleUsers) {
            $this->addUsingAlias(CandleUsersTableMap::COL_ID, $candleUsers->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the candle_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CandleUsersTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CandleUsersTableMap::clearInstancePool();
            CandleUsersTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CandleUsersTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CandleUsersTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CandleUsersTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CandleUsersTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CandleUsersQuery
