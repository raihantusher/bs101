<?php

namespace Propel\Model\Map;

use Propel\Model\CiSessions;
use Propel\Model\CiSessionsQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'ci_sessions' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class CiSessionsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Model.Map.CiSessionsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ci_sessions';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Model\\CiSessions';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Model.CiSessions';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the id field
     */
    const COL_ID = 'ci_sessions.id';

    /**
     * the column name for the ip_address field
     */
    const COL_IP_ADDRESS = 'ci_sessions.ip_address';

    /**
     * the column name for the timestamp field
     */
    const COL_TIMESTAMP = 'ci_sessions.timestamp';

    /**
     * the column name for the data field
     */
    const COL_DATA = 'ci_sessions.data';

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
        self::TYPE_PHPNAME       => array('Id', 'IpAddress', 'Timestamp', 'Data', ),
        self::TYPE_CAMELNAME     => array('id', 'ipAddress', 'timestamp', 'data', ),
        self::TYPE_COLNAME       => array(CiSessionsTableMap::COL_ID, CiSessionsTableMap::COL_IP_ADDRESS, CiSessionsTableMap::COL_TIMESTAMP, CiSessionsTableMap::COL_DATA, ),
        self::TYPE_FIELDNAME     => array('id', 'ip_address', 'timestamp', 'data', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'IpAddress' => 1, 'Timestamp' => 2, 'Data' => 3, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'ipAddress' => 1, 'timestamp' => 2, 'data' => 3, ),
        self::TYPE_COLNAME       => array(CiSessionsTableMap::COL_ID => 0, CiSessionsTableMap::COL_IP_ADDRESS => 1, CiSessionsTableMap::COL_TIMESTAMP => 2, CiSessionsTableMap::COL_DATA => 3, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'ip_address' => 1, 'timestamp' => 2, 'data' => 3, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'CiSessions.Id' => 'ID',
        'id' => 'ID',
        'ciSessions.id' => 'ID',
        'CiSessionsTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'ci_sessions.id' => 'ID',
        'IpAddress' => 'IP_ADDRESS',
        'CiSessions.IpAddress' => 'IP_ADDRESS',
        'ipAddress' => 'IP_ADDRESS',
        'ciSessions.ipAddress' => 'IP_ADDRESS',
        'CiSessionsTableMap::COL_IP_ADDRESS' => 'IP_ADDRESS',
        'COL_IP_ADDRESS' => 'IP_ADDRESS',
        'ip_address' => 'IP_ADDRESS',
        'ci_sessions.ip_address' => 'IP_ADDRESS',
        'Timestamp' => 'TIMESTAMP',
        'CiSessions.Timestamp' => 'TIMESTAMP',
        'timestamp' => 'TIMESTAMP',
        'ciSessions.timestamp' => 'TIMESTAMP',
        'CiSessionsTableMap::COL_TIMESTAMP' => 'TIMESTAMP',
        'COL_TIMESTAMP' => 'TIMESTAMP',
        'timestamp' => 'TIMESTAMP',
        'ci_sessions.timestamp' => 'TIMESTAMP',
        'Data' => 'DATA',
        'CiSessions.Data' => 'DATA',
        'data' => 'DATA',
        'ciSessions.data' => 'DATA',
        'CiSessionsTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'data' => 'DATA',
        'ci_sessions.data' => 'DATA',
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
        $this->setName('ci_sessions');
        $this->setPhpName('CiSessions');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Model\\CiSessions');
        $this->setPackage('Propel.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('id', 'Id', 'VARCHAR', true, 128, null);
        $this->addColumn('ip_address', 'IpAddress', 'VARCHAR', true, 45, null);
        $this->addColumn('timestamp', 'Timestamp', 'INTEGER', true, 10, 0);
        $this->addColumn('data', 'Data', 'BLOB', true, null, null);
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
        return null;
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
        return '';
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
        return $withPrefix ? CiSessionsTableMap::CLASS_DEFAULT : CiSessionsTableMap::OM_CLASS;
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
     * @return array           (CiSessions object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CiSessionsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CiSessionsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CiSessionsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CiSessionsTableMap::OM_CLASS;
            /** @var CiSessions $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CiSessionsTableMap::addInstanceToPool($obj, $key);
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
            $key = CiSessionsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CiSessionsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CiSessions $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CiSessionsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CiSessionsTableMap::COL_ID);
            $criteria->addSelectColumn(CiSessionsTableMap::COL_IP_ADDRESS);
            $criteria->addSelectColumn(CiSessionsTableMap::COL_TIMESTAMP);
            $criteria->addSelectColumn(CiSessionsTableMap::COL_DATA);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.ip_address');
            $criteria->addSelectColumn($alias . '.timestamp');
            $criteria->addSelectColumn($alias . '.data');
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
            $criteria->removeSelectColumn(CiSessionsTableMap::COL_ID);
            $criteria->removeSelectColumn(CiSessionsTableMap::COL_IP_ADDRESS);
            $criteria->removeSelectColumn(CiSessionsTableMap::COL_TIMESTAMP);
            $criteria->removeSelectColumn(CiSessionsTableMap::COL_DATA);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.ip_address');
            $criteria->removeSelectColumn($alias . '.timestamp');
            $criteria->removeSelectColumn($alias . '.data');
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
        return Propel::getServiceContainer()->getDatabaseMap(CiSessionsTableMap::DATABASE_NAME)->getTable(CiSessionsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CiSessionsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CiSessionsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CiSessionsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CiSessions or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CiSessions object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CiSessionsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Model\CiSessions) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CiSessions object has no primary key');
        }

        $query = CiSessionsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CiSessionsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CiSessionsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ci_sessions table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CiSessionsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CiSessions or Criteria object.
     *
     * @param mixed               $criteria Criteria or CiSessions object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CiSessionsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CiSessions object
        }


        // Set the correct dbName
        $query = CiSessionsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CiSessionsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CiSessionsTableMap::buildTableMap();
