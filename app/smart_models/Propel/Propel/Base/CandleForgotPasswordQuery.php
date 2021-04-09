<?php

namespace Propel\Propel\Base;

use \Exception;
use Propel\Propel\CandleForgotPassword as ChildCandleForgotPassword;
use Propel\Propel\CandleForgotPasswordQuery as ChildCandleForgotPasswordQuery;
use Propel\Propel\Map\CandleForgotPasswordTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'candle_forgot_password' table.
 *
 *
 *
 * @method     ChildCandleForgotPasswordQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCandleForgotPasswordQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCandleForgotPasswordQuery orderByToken($order = Criteria::ASC) Order by the token column
 * @method     ChildCandleForgotPasswordQuery orderByCreated($order = Criteria::ASC) Order by the created column
 *
 * @method     ChildCandleForgotPasswordQuery groupById() Group by the id column
 * @method     ChildCandleForgotPasswordQuery groupByEmail() Group by the email column
 * @method     ChildCandleForgotPasswordQuery groupByToken() Group by the token column
 * @method     ChildCandleForgotPasswordQuery groupByCreated() Group by the created column
 *
 * @method     ChildCandleForgotPasswordQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCandleForgotPasswordQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCandleForgotPasswordQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCandleForgotPasswordQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCandleForgotPasswordQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCandleForgotPasswordQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCandleForgotPassword|null findOne(ConnectionInterface $con = null) Return the first ChildCandleForgotPassword matching the query
 * @method     ChildCandleForgotPassword findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCandleForgotPassword matching the query, or a new ChildCandleForgotPassword object populated from the query conditions when no match is found
 *
 * @method     ChildCandleForgotPassword|null findOneById(int $id) Return the first ChildCandleForgotPassword filtered by the id column
 * @method     ChildCandleForgotPassword|null findOneByEmail(string $email) Return the first ChildCandleForgotPassword filtered by the email column
 * @method     ChildCandleForgotPassword|null findOneByToken(string $token) Return the first ChildCandleForgotPassword filtered by the token column
 * @method     ChildCandleForgotPassword|null findOneByCreated(string $created) Return the first ChildCandleForgotPassword filtered by the created column *

 * @method     ChildCandleForgotPassword requirePk($key, ConnectionInterface $con = null) Return the ChildCandleForgotPassword by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleForgotPassword requireOne(ConnectionInterface $con = null) Return the first ChildCandleForgotPassword matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCandleForgotPassword requireOneById(int $id) Return the first ChildCandleForgotPassword filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleForgotPassword requireOneByEmail(string $email) Return the first ChildCandleForgotPassword filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleForgotPassword requireOneByToken(string $token) Return the first ChildCandleForgotPassword filtered by the token column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCandleForgotPassword requireOneByCreated(string $created) Return the first ChildCandleForgotPassword filtered by the created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCandleForgotPassword[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCandleForgotPassword objects based on current ModelCriteria
 * @method     ChildCandleForgotPassword[]|ObjectCollection findById(int $id) Return ChildCandleForgotPassword objects filtered by the id column
 * @method     ChildCandleForgotPassword[]|ObjectCollection findByEmail(string $email) Return ChildCandleForgotPassword objects filtered by the email column
 * @method     ChildCandleForgotPassword[]|ObjectCollection findByToken(string $token) Return ChildCandleForgotPassword objects filtered by the token column
 * @method     ChildCandleForgotPassword[]|ObjectCollection findByCreated(string $created) Return ChildCandleForgotPassword objects filtered by the created column
 * @method     ChildCandleForgotPassword[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CandleForgotPasswordQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Propel\Propel\Base\CandleForgotPasswordQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Propel\\Propel\\CandleForgotPassword', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCandleForgotPasswordQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCandleForgotPasswordQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCandleForgotPasswordQuery) {
            return $criteria;
        }
        $query = new ChildCandleForgotPasswordQuery();
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
     * @return ChildCandleForgotPassword|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CandleForgotPassword object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The CandleForgotPassword object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CandleForgotPassword object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CandleForgotPassword object has no primary key');
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
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CandleForgotPasswordTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CandleForgotPasswordTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleForgotPasswordTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleForgotPasswordTableMap::COL_EMAIL, $email, $comparison);
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
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function filterByToken($token = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($token)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleForgotPasswordTableMap::COL_TOKEN, $token, $comparison);
    }

    /**
     * Filter the query on the created column
     *
     * Example usage:
     * <code>
     * $query->filterByCreated('2011-03-14'); // WHERE created = '2011-03-14'
     * $query->filterByCreated('now'); // WHERE created = '2011-03-14'
     * $query->filterByCreated(array('max' => 'yesterday')); // WHERE created > '2011-03-13'
     * </code>
     *
     * @param     mixed $created The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function filterByCreated($created = null, $comparison = null)
    {
        if (is_array($created)) {
            $useMinMax = false;
            if (isset($created['min'])) {
                $this->addUsingAlias(CandleForgotPasswordTableMap::COL_CREATED, $created['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($created['max'])) {
                $this->addUsingAlias(CandleForgotPasswordTableMap::COL_CREATED, $created['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandleForgotPasswordTableMap::COL_CREATED, $created, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCandleForgotPassword $candleForgotPassword Object to remove from the list of results
     *
     * @return $this|ChildCandleForgotPasswordQuery The current query, for fluid interface
     */
    public function prune($candleForgotPassword = null)
    {
        if ($candleForgotPassword) {
            throw new LogicException('CandleForgotPassword object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the candle_forgot_password table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CandleForgotPasswordTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CandleForgotPasswordTableMap::clearInstancePool();
            CandleForgotPasswordTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CandleForgotPasswordTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CandleForgotPasswordTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CandleForgotPasswordTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CandleForgotPasswordTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CandleForgotPasswordQuery
