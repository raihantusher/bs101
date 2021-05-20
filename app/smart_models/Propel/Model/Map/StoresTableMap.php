<?php

namespace Propel\Model\Map;

use Propel\Model\Stores;
use Propel\Model\StoresQuery;
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
 * This class defines the structure of the 'stores' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class StoresTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Model.Map.StoresTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'stores';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Model\\Stores';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Model.Stores';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id field
     */
    const COL_ID = 'stores.id';

    /**
     * the column name for the store_name field
     */
    const COL_STORE_NAME = 'stores.store_name';

    /**
     * the column name for the store_title field
     */
    const COL_STORE_TITLE = 'stores.store_title';

    /**
     * the column name for the store_email field
     */
    const COL_STORE_EMAIL = 'stores.store_email';

    /**
     * the column name for the store_phone field
     */
    const COL_STORE_PHONE = 'stores.store_phone';

    /**
     * the column name for the store_address field
     */
    const COL_STORE_ADDRESS = 'stores.store_address';

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
        self::TYPE_PHPNAME       => array('Id', 'StoreName', 'StoreTitle', 'StoreEmail', 'StorePhone', 'StoreAddress', ),
        self::TYPE_CAMELNAME     => array('id', 'storeName', 'storeTitle', 'storeEmail', 'storePhone', 'storeAddress', ),
        self::TYPE_COLNAME       => array(StoresTableMap::COL_ID, StoresTableMap::COL_STORE_NAME, StoresTableMap::COL_STORE_TITLE, StoresTableMap::COL_STORE_EMAIL, StoresTableMap::COL_STORE_PHONE, StoresTableMap::COL_STORE_ADDRESS, ),
        self::TYPE_FIELDNAME     => array('id', 'store_name', 'store_title', 'store_email', 'store_phone', 'store_address', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'StoreName' => 1, 'StoreTitle' => 2, 'StoreEmail' => 3, 'StorePhone' => 4, 'StoreAddress' => 5, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'storeName' => 1, 'storeTitle' => 2, 'storeEmail' => 3, 'storePhone' => 4, 'storeAddress' => 5, ),
        self::TYPE_COLNAME       => array(StoresTableMap::COL_ID => 0, StoresTableMap::COL_STORE_NAME => 1, StoresTableMap::COL_STORE_TITLE => 2, StoresTableMap::COL_STORE_EMAIL => 3, StoresTableMap::COL_STORE_PHONE => 4, StoresTableMap::COL_STORE_ADDRESS => 5, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'store_name' => 1, 'store_title' => 2, 'store_email' => 3, 'store_phone' => 4, 'store_address' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'Stores.Id' => 'ID',
        'id' => 'ID',
        'stores.id' => 'ID',
        'StoresTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'stores.id' => 'ID',
        'StoreName' => 'STORE_NAME',
        'Stores.StoreName' => 'STORE_NAME',
        'storeName' => 'STORE_NAME',
        'stores.storeName' => 'STORE_NAME',
        'StoresTableMap::COL_STORE_NAME' => 'STORE_NAME',
        'COL_STORE_NAME' => 'STORE_NAME',
        'store_name' => 'STORE_NAME',
        'stores.store_name' => 'STORE_NAME',
        'StoreTitle' => 'STORE_TITLE',
        'Stores.StoreTitle' => 'STORE_TITLE',
        'storeTitle' => 'STORE_TITLE',
        'stores.storeTitle' => 'STORE_TITLE',
        'StoresTableMap::COL_STORE_TITLE' => 'STORE_TITLE',
        'COL_STORE_TITLE' => 'STORE_TITLE',
        'store_title' => 'STORE_TITLE',
        'stores.store_title' => 'STORE_TITLE',
        'StoreEmail' => 'STORE_EMAIL',
        'Stores.StoreEmail' => 'STORE_EMAIL',
        'storeEmail' => 'STORE_EMAIL',
        'stores.storeEmail' => 'STORE_EMAIL',
        'StoresTableMap::COL_STORE_EMAIL' => 'STORE_EMAIL',
        'COL_STORE_EMAIL' => 'STORE_EMAIL',
        'store_email' => 'STORE_EMAIL',
        'stores.store_email' => 'STORE_EMAIL',
        'StorePhone' => 'STORE_PHONE',
        'Stores.StorePhone' => 'STORE_PHONE',
        'storePhone' => 'STORE_PHONE',
        'stores.storePhone' => 'STORE_PHONE',
        'StoresTableMap::COL_STORE_PHONE' => 'STORE_PHONE',
        'COL_STORE_PHONE' => 'STORE_PHONE',
        'store_phone' => 'STORE_PHONE',
        'stores.store_phone' => 'STORE_PHONE',
        'StoreAddress' => 'STORE_ADDRESS',
        'Stores.StoreAddress' => 'STORE_ADDRESS',
        'storeAddress' => 'STORE_ADDRESS',
        'stores.storeAddress' => 'STORE_ADDRESS',
        'StoresTableMap::COL_STORE_ADDRESS' => 'STORE_ADDRESS',
        'COL_STORE_ADDRESS' => 'STORE_ADDRESS',
        'store_address' => 'STORE_ADDRESS',
        'stores.store_address' => 'STORE_ADDRESS',
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
        $this->setName('stores');
        $this->setPhpName('Stores');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Model\\Stores');
        $this->setPackage('Propel.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('store_name', 'StoreName', 'VARCHAR', false, 30, null);
        $this->addColumn('store_title', 'StoreTitle', 'VARCHAR', false, 55, null);
        $this->addColumn('store_email', 'StoreEmail', 'VARCHAR', false, 35, null);
        $this->addColumn('store_phone', 'StorePhone', 'VARCHAR', false, 35, null);
        $this->addColumn('store_address', 'StoreAddress', 'LONGVARCHAR', false, null, null);
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
        return $withPrefix ? StoresTableMap::CLASS_DEFAULT : StoresTableMap::OM_CLASS;
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
     * @return array           (Stores object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = StoresTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = StoresTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + StoresTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StoresTableMap::OM_CLASS;
            /** @var Stores $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            StoresTableMap::addInstanceToPool($obj, $key);
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
            $key = StoresTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = StoresTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Stores $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StoresTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(StoresTableMap::COL_ID);
            $criteria->addSelectColumn(StoresTableMap::COL_STORE_NAME);
            $criteria->addSelectColumn(StoresTableMap::COL_STORE_TITLE);
            $criteria->addSelectColumn(StoresTableMap::COL_STORE_EMAIL);
            $criteria->addSelectColumn(StoresTableMap::COL_STORE_PHONE);
            $criteria->addSelectColumn(StoresTableMap::COL_STORE_ADDRESS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.store_name');
            $criteria->addSelectColumn($alias . '.store_title');
            $criteria->addSelectColumn($alias . '.store_email');
            $criteria->addSelectColumn($alias . '.store_phone');
            $criteria->addSelectColumn($alias . '.store_address');
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
            $criteria->removeSelectColumn(StoresTableMap::COL_ID);
            $criteria->removeSelectColumn(StoresTableMap::COL_STORE_NAME);
            $criteria->removeSelectColumn(StoresTableMap::COL_STORE_TITLE);
            $criteria->removeSelectColumn(StoresTableMap::COL_STORE_EMAIL);
            $criteria->removeSelectColumn(StoresTableMap::COL_STORE_PHONE);
            $criteria->removeSelectColumn(StoresTableMap::COL_STORE_ADDRESS);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.store_name');
            $criteria->removeSelectColumn($alias . '.store_title');
            $criteria->removeSelectColumn($alias . '.store_email');
            $criteria->removeSelectColumn($alias . '.store_phone');
            $criteria->removeSelectColumn($alias . '.store_address');
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
        return Propel::getServiceContainer()->getDatabaseMap(StoresTableMap::DATABASE_NAME)->getTable(StoresTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(StoresTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(StoresTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new StoresTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Stores or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Stores object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(StoresTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Model\Stores) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StoresTableMap::DATABASE_NAME);
            $criteria->add(StoresTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = StoresQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            StoresTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                StoresTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the stores table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return StoresQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Stores or Criteria object.
     *
     * @param mixed               $criteria Criteria or Stores object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StoresTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Stores object
        }

        if ($criteria->containsKey(StoresTableMap::COL_ID) && $criteria->keyContainsValue(StoresTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.StoresTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = StoresQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // StoresTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
StoresTableMap::buildTableMap();
