<?php

namespace Propel\Model\Map;

use Propel\Model\OrderProduct;
use Propel\Model\OrderProductQuery;
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
 * This class defines the structure of the 'order_product' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class OrderProductTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Model.Map.OrderProductTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'order_product';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Model\\OrderProduct';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Model.OrderProduct';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id field
     */
    const COL_ID = 'order_product.id';

    /**
     * the column name for the order_id field
     */
    const COL_ORDER_ID = 'order_product.order_id';

    /**
     * the column name for the product_id field
     */
    const COL_PRODUCT_ID = 'order_product.product_id';

    /**
     * the column name for the product_name field
     */
    const COL_PRODUCT_NAME = 'order_product.product_name';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'order_product.price';

    /**
     * the column name for the quantity field
     */
    const COL_QUANTITY = 'order_product.quantity';

    /**
     * the column name for the subtotal field
     */
    const COL_SUBTOTAL = 'order_product.subtotal';

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
        self::TYPE_PHPNAME       => array('Id', 'OrderId', 'ProductId', 'ProductName', 'Price', 'Quantity', 'Subtotal', ),
        self::TYPE_CAMELNAME     => array('id', 'orderId', 'productId', 'productName', 'price', 'quantity', 'subtotal', ),
        self::TYPE_COLNAME       => array(OrderProductTableMap::COL_ID, OrderProductTableMap::COL_ORDER_ID, OrderProductTableMap::COL_PRODUCT_ID, OrderProductTableMap::COL_PRODUCT_NAME, OrderProductTableMap::COL_PRICE, OrderProductTableMap::COL_QUANTITY, OrderProductTableMap::COL_SUBTOTAL, ),
        self::TYPE_FIELDNAME     => array('id', 'order_id', 'product_id', 'product_name', 'price', 'quantity', 'subtotal', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'OrderId' => 1, 'ProductId' => 2, 'ProductName' => 3, 'Price' => 4, 'Quantity' => 5, 'Subtotal' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'orderId' => 1, 'productId' => 2, 'productName' => 3, 'price' => 4, 'quantity' => 5, 'subtotal' => 6, ),
        self::TYPE_COLNAME       => array(OrderProductTableMap::COL_ID => 0, OrderProductTableMap::COL_ORDER_ID => 1, OrderProductTableMap::COL_PRODUCT_ID => 2, OrderProductTableMap::COL_PRODUCT_NAME => 3, OrderProductTableMap::COL_PRICE => 4, OrderProductTableMap::COL_QUANTITY => 5, OrderProductTableMap::COL_SUBTOTAL => 6, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'order_id' => 1, 'product_id' => 2, 'product_name' => 3, 'price' => 4, 'quantity' => 5, 'subtotal' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'OrderProduct.Id' => 'ID',
        'id' => 'ID',
        'orderProduct.id' => 'ID',
        'OrderProductTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'order_product.id' => 'ID',
        'OrderId' => 'ORDER_ID',
        'OrderProduct.OrderId' => 'ORDER_ID',
        'orderId' => 'ORDER_ID',
        'orderProduct.orderId' => 'ORDER_ID',
        'OrderProductTableMap::COL_ORDER_ID' => 'ORDER_ID',
        'COL_ORDER_ID' => 'ORDER_ID',
        'order_id' => 'ORDER_ID',
        'order_product.order_id' => 'ORDER_ID',
        'ProductId' => 'PRODUCT_ID',
        'OrderProduct.ProductId' => 'PRODUCT_ID',
        'productId' => 'PRODUCT_ID',
        'orderProduct.productId' => 'PRODUCT_ID',
        'OrderProductTableMap::COL_PRODUCT_ID' => 'PRODUCT_ID',
        'COL_PRODUCT_ID' => 'PRODUCT_ID',
        'product_id' => 'PRODUCT_ID',
        'order_product.product_id' => 'PRODUCT_ID',
        'ProductName' => 'PRODUCT_NAME',
        'OrderProduct.ProductName' => 'PRODUCT_NAME',
        'productName' => 'PRODUCT_NAME',
        'orderProduct.productName' => 'PRODUCT_NAME',
        'OrderProductTableMap::COL_PRODUCT_NAME' => 'PRODUCT_NAME',
        'COL_PRODUCT_NAME' => 'PRODUCT_NAME',
        'product_name' => 'PRODUCT_NAME',
        'order_product.product_name' => 'PRODUCT_NAME',
        'Price' => 'PRICE',
        'OrderProduct.Price' => 'PRICE',
        'price' => 'PRICE',
        'orderProduct.price' => 'PRICE',
        'OrderProductTableMap::COL_PRICE' => 'PRICE',
        'COL_PRICE' => 'PRICE',
        'price' => 'PRICE',
        'order_product.price' => 'PRICE',
        'Quantity' => 'QUANTITY',
        'OrderProduct.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'orderProduct.quantity' => 'QUANTITY',
        'OrderProductTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'order_product.quantity' => 'QUANTITY',
        'Subtotal' => 'SUBTOTAL',
        'OrderProduct.Subtotal' => 'SUBTOTAL',
        'subtotal' => 'SUBTOTAL',
        'orderProduct.subtotal' => 'SUBTOTAL',
        'OrderProductTableMap::COL_SUBTOTAL' => 'SUBTOTAL',
        'COL_SUBTOTAL' => 'SUBTOTAL',
        'subtotal' => 'SUBTOTAL',
        'order_product.subtotal' => 'SUBTOTAL',
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
        $this->setName('order_product');
        $this->setPhpName('OrderProduct');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Model\\OrderProduct');
        $this->setPackage('Propel.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('order_id', 'OrderId', 'INTEGER', true, null, null);
        $this->addColumn('product_id', 'ProductId', 'INTEGER', true, null, null);
        $this->addColumn('product_name', 'ProductName', 'VARCHAR', true, 255, null);
        $this->addColumn('price', 'Price', 'DOUBLE', true, null, null);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', true, null, null);
        $this->addColumn('subtotal', 'Subtotal', 'DOUBLE', true, null, null);
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
        return $withPrefix ? OrderProductTableMap::CLASS_DEFAULT : OrderProductTableMap::OM_CLASS;
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
     * @return array           (OrderProduct object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = OrderProductTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OrderProductTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OrderProductTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OrderProductTableMap::OM_CLASS;
            /** @var OrderProduct $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OrderProductTableMap::addInstanceToPool($obj, $key);
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
            $key = OrderProductTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OrderProductTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var OrderProduct $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OrderProductTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OrderProductTableMap::COL_ID);
            $criteria->addSelectColumn(OrderProductTableMap::COL_ORDER_ID);
            $criteria->addSelectColumn(OrderProductTableMap::COL_PRODUCT_ID);
            $criteria->addSelectColumn(OrderProductTableMap::COL_PRODUCT_NAME);
            $criteria->addSelectColumn(OrderProductTableMap::COL_PRICE);
            $criteria->addSelectColumn(OrderProductTableMap::COL_QUANTITY);
            $criteria->addSelectColumn(OrderProductTableMap::COL_SUBTOTAL);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.order_id');
            $criteria->addSelectColumn($alias . '.product_id');
            $criteria->addSelectColumn($alias . '.product_name');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.quantity');
            $criteria->addSelectColumn($alias . '.subtotal');
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
            $criteria->removeSelectColumn(OrderProductTableMap::COL_ID);
            $criteria->removeSelectColumn(OrderProductTableMap::COL_ORDER_ID);
            $criteria->removeSelectColumn(OrderProductTableMap::COL_PRODUCT_ID);
            $criteria->removeSelectColumn(OrderProductTableMap::COL_PRODUCT_NAME);
            $criteria->removeSelectColumn(OrderProductTableMap::COL_PRICE);
            $criteria->removeSelectColumn(OrderProductTableMap::COL_QUANTITY);
            $criteria->removeSelectColumn(OrderProductTableMap::COL_SUBTOTAL);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.order_id');
            $criteria->removeSelectColumn($alias . '.product_id');
            $criteria->removeSelectColumn($alias . '.product_name');
            $criteria->removeSelectColumn($alias . '.price');
            $criteria->removeSelectColumn($alias . '.quantity');
            $criteria->removeSelectColumn($alias . '.subtotal');
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
        return Propel::getServiceContainer()->getDatabaseMap(OrderProductTableMap::DATABASE_NAME)->getTable(OrderProductTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(OrderProductTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(OrderProductTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new OrderProductTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a OrderProduct or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or OrderProduct object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OrderProductTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Model\OrderProduct) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OrderProductTableMap::DATABASE_NAME);
            $criteria->add(OrderProductTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = OrderProductQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OrderProductTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OrderProductTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the order_product table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return OrderProductQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a OrderProduct or Criteria object.
     *
     * @param mixed               $criteria Criteria or OrderProduct object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OrderProductTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from OrderProduct object
        }

        if ($criteria->containsKey(OrderProductTableMap::COL_ID) && $criteria->keyContainsValue(OrderProductTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OrderProductTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = OrderProductQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // OrderProductTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
OrderProductTableMap::buildTableMap();
