<?php

namespace Propel\Propel\Map;

use Propel\Propel\Quiz;
use Propel\Propel\QuizQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'quiz' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class QuizTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Propel.Map.QuizTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'quiz';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Propel\\Quiz';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Propel.Quiz';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the id field
     */
    const COL_ID = 'quiz.id';

    /**
     * the column name for the question field
     */
    const COL_QUESTION = 'quiz.question';

    /**
     * the column name for the options field
     */
    const COL_OPTIONS = 'quiz.options';

    /**
     * the column name for the answer field
     */
    const COL_ANSWER = 'quiz.answer';

    /**
     * the column name for the topic_id field
     */
    const COL_TOPIC_ID = 'quiz.topic_id';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Question', 'Options', 'Answer', 'TopicId', ),
        self::TYPE_CAMELNAME     => array('id', 'question', 'options', 'answer', 'topicId', ),
        self::TYPE_COLNAME       => array(QuizTableMap::COL_ID, QuizTableMap::COL_QUESTION, QuizTableMap::COL_OPTIONS, QuizTableMap::COL_ANSWER, QuizTableMap::COL_TOPIC_ID, ),
        self::TYPE_FIELDNAME     => array('id', 'question', 'options', 'answer', 'topic_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Question' => 1, 'Options' => 2, 'Answer' => 3, 'TopicId' => 4, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'question' => 1, 'options' => 2, 'answer' => 3, 'topicId' => 4, ),
        self::TYPE_COLNAME       => array(QuizTableMap::COL_ID => 0, QuizTableMap::COL_QUESTION => 1, QuizTableMap::COL_OPTIONS => 2, QuizTableMap::COL_ANSWER => 3, QuizTableMap::COL_TOPIC_ID => 4, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'question' => 1, 'options' => 2, 'answer' => 3, 'topic_id' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'Quiz.Id' => 'ID',
        'id' => 'ID',
        'quiz.id' => 'ID',
        'QuizTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'quiz.id' => 'ID',
        'Question' => 'QUESTION',
        'Quiz.Question' => 'QUESTION',
        'question' => 'QUESTION',
        'quiz.question' => 'QUESTION',
        'QuizTableMap::COL_QUESTION' => 'QUESTION',
        'COL_QUESTION' => 'QUESTION',
        'question' => 'QUESTION',
        'quiz.question' => 'QUESTION',
        'Options' => 'OPTIONS',
        'Quiz.Options' => 'OPTIONS',
        'options' => 'OPTIONS',
        'quiz.options' => 'OPTIONS',
        'QuizTableMap::COL_OPTIONS' => 'OPTIONS',
        'COL_OPTIONS' => 'OPTIONS',
        'options' => 'OPTIONS',
        'quiz.options' => 'OPTIONS',
        'Answer' => 'ANSWER',
        'Quiz.Answer' => 'ANSWER',
        'answer' => 'ANSWER',
        'quiz.answer' => 'ANSWER',
        'QuizTableMap::COL_ANSWER' => 'ANSWER',
        'COL_ANSWER' => 'ANSWER',
        'answer' => 'ANSWER',
        'quiz.answer' => 'ANSWER',
        'TopicId' => 'TOPIC_ID',
        'Quiz.TopicId' => 'TOPIC_ID',
        'topicId' => 'TOPIC_ID',
        'quiz.topicId' => 'TOPIC_ID',
        'QuizTableMap::COL_TOPIC_ID' => 'TOPIC_ID',
        'COL_TOPIC_ID' => 'TOPIC_ID',
        'topic_id' => 'TOPIC_ID',
        'quiz.topic_id' => 'TOPIC_ID',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('quiz');
        $this->setPhpName('Quiz');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Propel\\Quiz');
        $this->setPackage('Propel.Propel');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('question', 'Question', 'LONGVARCHAR', true, null, null);
        $this->addColumn('options', 'Options', 'LONGVARCHAR', true, null, null);
        $this->addColumn('answer', 'Answer', 'LONGVARCHAR', true, null, null);
        $this->addColumn('topic_id', 'TopicId', 'INTEGER', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? QuizTableMap::CLASS_DEFAULT : QuizTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Quiz object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = QuizTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = QuizTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + QuizTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QuizTableMap::OM_CLASS;
            /** @var Quiz $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            QuizTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = QuizTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = QuizTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Quiz $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QuizTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(QuizTableMap::COL_ID);
            $criteria->addSelectColumn(QuizTableMap::COL_QUESTION);
            $criteria->addSelectColumn(QuizTableMap::COL_OPTIONS);
            $criteria->addSelectColumn(QuizTableMap::COL_ANSWER);
            $criteria->addSelectColumn(QuizTableMap::COL_TOPIC_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.question');
            $criteria->addSelectColumn($alias . '.options');
            $criteria->addSelectColumn($alias . '.answer');
            $criteria->addSelectColumn($alias . '.topic_id');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria object containing the columns to remove.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function removeSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(QuizTableMap::COL_ID);
            $criteria->removeSelectColumn(QuizTableMap::COL_QUESTION);
            $criteria->removeSelectColumn(QuizTableMap::COL_OPTIONS);
            $criteria->removeSelectColumn(QuizTableMap::COL_ANSWER);
            $criteria->removeSelectColumn(QuizTableMap::COL_TOPIC_ID);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.question');
            $criteria->removeSelectColumn($alias . '.options');
            $criteria->removeSelectColumn($alias . '.answer');
            $criteria->removeSelectColumn($alias . '.topic_id');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(QuizTableMap::DATABASE_NAME)->getTable(QuizTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(QuizTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(QuizTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new QuizTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Quiz or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Quiz object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuizTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Propel\Quiz) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QuizTableMap::DATABASE_NAME);
            $criteria->add(QuizTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = QuizQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            QuizTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                QuizTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the quiz table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return QuizQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Quiz or Criteria object.
     *
     * @param mixed               $criteria Criteria or Quiz object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuizTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Quiz object
        }

        if ($criteria->containsKey(QuizTableMap::COL_ID) && $criteria->keyContainsValue(QuizTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QuizTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = QuizQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // QuizTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
QuizTableMap::buildTableMap();
