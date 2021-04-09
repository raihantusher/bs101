<?php

namespace Propel\Propel\Base;

use \Exception;
use \PDO;
use Propel\Propel\Quiz as ChildQuiz;
use Propel\Propel\QuizQuery as ChildQuizQuery;
use Propel\Propel\Map\QuizTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'quiz' table.
 *
 *
 *
 * @method     ChildQuizQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildQuizQuery orderByQuestion($order = Criteria::ASC) Order by the question column
 * @method     ChildQuizQuery orderByOptions($order = Criteria::ASC) Order by the options column
 * @method     ChildQuizQuery orderByAnswer($order = Criteria::ASC) Order by the answer column
 * @method     ChildQuizQuery orderByTopicId($order = Criteria::ASC) Order by the topic_id column
 *
 * @method     ChildQuizQuery groupById() Group by the id column
 * @method     ChildQuizQuery groupByQuestion() Group by the question column
 * @method     ChildQuizQuery groupByOptions() Group by the options column
 * @method     ChildQuizQuery groupByAnswer() Group by the answer column
 * @method     ChildQuizQuery groupByTopicId() Group by the topic_id column
 *
 * @method     ChildQuizQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildQuizQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildQuizQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildQuizQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildQuizQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildQuizQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildQuiz|null findOne(ConnectionInterface $con = null) Return the first ChildQuiz matching the query
 * @method     ChildQuiz findOneOrCreate(ConnectionInterface $con = null) Return the first ChildQuiz matching the query, or a new ChildQuiz object populated from the query conditions when no match is found
 *
 * @method     ChildQuiz|null findOneById(int $id) Return the first ChildQuiz filtered by the id column
 * @method     ChildQuiz|null findOneByQuestion(string $question) Return the first ChildQuiz filtered by the question column
 * @method     ChildQuiz|null findOneByOptions(string $options) Return the first ChildQuiz filtered by the options column
 * @method     ChildQuiz|null findOneByAnswer(string $answer) Return the first ChildQuiz filtered by the answer column
 * @method     ChildQuiz|null findOneByTopicId(int $topic_id) Return the first ChildQuiz filtered by the topic_id column *

 * @method     ChildQuiz requirePk($key, ConnectionInterface $con = null) Return the ChildQuiz by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuiz requireOne(ConnectionInterface $con = null) Return the first ChildQuiz matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuiz requireOneById(int $id) Return the first ChildQuiz filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuiz requireOneByQuestion(string $question) Return the first ChildQuiz filtered by the question column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuiz requireOneByOptions(string $options) Return the first ChildQuiz filtered by the options column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuiz requireOneByAnswer(string $answer) Return the first ChildQuiz filtered by the answer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuiz requireOneByTopicId(int $topic_id) Return the first ChildQuiz filtered by the topic_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuiz[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildQuiz objects based on current ModelCriteria
 * @method     ChildQuiz[]|ObjectCollection findById(int $id) Return ChildQuiz objects filtered by the id column
 * @method     ChildQuiz[]|ObjectCollection findByQuestion(string $question) Return ChildQuiz objects filtered by the question column
 * @method     ChildQuiz[]|ObjectCollection findByOptions(string $options) Return ChildQuiz objects filtered by the options column
 * @method     ChildQuiz[]|ObjectCollection findByAnswer(string $answer) Return ChildQuiz objects filtered by the answer column
 * @method     ChildQuiz[]|ObjectCollection findByTopicId(int $topic_id) Return ChildQuiz objects filtered by the topic_id column
 * @method     ChildQuiz[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class QuizQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Propel\Propel\Base\QuizQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Propel\\Propel\\Quiz', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildQuizQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildQuizQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildQuizQuery) {
            return $criteria;
        }
        $query = new ChildQuizQuery();
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
     * @return ChildQuiz|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(QuizTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = QuizTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildQuiz A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, question, options, answer, topic_id FROM quiz WHERE id = :p0';
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
            /** @var ChildQuiz $obj */
            $obj = new ChildQuiz();
            $obj->hydrate($row);
            QuizTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildQuiz|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QuizTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QuizTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(QuizTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(QuizTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuizTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the question column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestion('fooValue');   // WHERE question = 'fooValue'
     * $query->filterByQuestion('%fooValue%', Criteria::LIKE); // WHERE question LIKE '%fooValue%'
     * </code>
     *
     * @param     string $question The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterByQuestion($question = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($question)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuizTableMap::COL_QUESTION, $question, $comparison);
    }

    /**
     * Filter the query on the options column
     *
     * Example usage:
     * <code>
     * $query->filterByOptions('fooValue');   // WHERE options = 'fooValue'
     * $query->filterByOptions('%fooValue%', Criteria::LIKE); // WHERE options LIKE '%fooValue%'
     * </code>
     *
     * @param     string $options The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterByOptions($options = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($options)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuizTableMap::COL_OPTIONS, $options, $comparison);
    }

    /**
     * Filter the query on the answer column
     *
     * Example usage:
     * <code>
     * $query->filterByAnswer('fooValue');   // WHERE answer = 'fooValue'
     * $query->filterByAnswer('%fooValue%', Criteria::LIKE); // WHERE answer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $answer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterByAnswer($answer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($answer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuizTableMap::COL_ANSWER, $answer, $comparison);
    }

    /**
     * Filter the query on the topic_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTopicId(1234); // WHERE topic_id = 1234
     * $query->filterByTopicId(array(12, 34)); // WHERE topic_id IN (12, 34)
     * $query->filterByTopicId(array('min' => 12)); // WHERE topic_id > 12
     * </code>
     *
     * @param     mixed $topicId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function filterByTopicId($topicId = null, $comparison = null)
    {
        if (is_array($topicId)) {
            $useMinMax = false;
            if (isset($topicId['min'])) {
                $this->addUsingAlias(QuizTableMap::COL_TOPIC_ID, $topicId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($topicId['max'])) {
                $this->addUsingAlias(QuizTableMap::COL_TOPIC_ID, $topicId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuizTableMap::COL_TOPIC_ID, $topicId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildQuiz $quiz Object to remove from the list of results
     *
     * @return $this|ChildQuizQuery The current query, for fluid interface
     */
    public function prune($quiz = null)
    {
        if ($quiz) {
            $this->addUsingAlias(QuizTableMap::COL_ID, $quiz->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the quiz table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuizTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QuizTableMap::clearInstancePool();
            QuizTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(QuizTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(QuizTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            QuizTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            QuizTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // QuizQuery
