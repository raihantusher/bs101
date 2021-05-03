<?php

namespace Propel\Propel\Map;

use Propel\Propel\Products;
use Propel\Propel\ProductsQuery;
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
 * This class defines the structure of the 'products' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ProductsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Propel.Map.ProductsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'products';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Propel\\Products';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Propel.Products';

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
    const COL_ID = 'products.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'products.name';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'products.price';

    /**
     * the column name for the category_id field
     */
    const COL_CATEGORY_ID = 'products.category_id';

    /**
     * the column name for the product_image field
     */
    const COL_PRODUCT_IMAGE = 'products.product_image';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'products.description';

    /**
     * the column name for the viewed field
     */
    const COL_VIEWED = 'products.viewed';

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
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Price', 'ProductCategory', 'ProductImage', 'Description', 'Viewed', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'price', 'productCategory', 'productImage', 'description', 'viewed', ),
        self::TYPE_COLNAME       => array(ProductsTableMap::COL_ID, ProductsTableMap::COL_NAME, ProductsTableMap::COL_PRICE, ProductsTableMap::COL_CATEGORY_ID, ProductsTableMap::COL_PRODUCT_IMAGE, ProductsTableMap::COL_DESCRIPTION, ProductsTableMap::COL_VIEWED, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'price', 'category_id', 'product_image', 'description', 'viewed', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Price' => 2, 'ProductCategory' => 3, 'ProductImage' => 4, 'Description' => 5, 'Viewed' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'price' => 2, 'productCategory' => 3, 'productImage' => 4, 'description' => 5, 'viewed' => 6, ),
        self::TYPE_COLNAME       => array(ProductsTableMap::COL_ID => 0, ProductsTableMap::COL_NAME => 1, ProductsTableMap::COL_PRICE => 2, ProductsTableMap::COL_CATEGORY_ID => 3, ProductsTableMap::COL_PRODUCT_IMAGE => 4, ProductsTableMap::COL_DESCRIPTION => 5, ProductsTableMap::COL_VIEWED => 6, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'price' => 2, 'category_id' => 3, 'product_image' => 4, 'description' => 5, 'viewed' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'Products.Id' => 'ID',
        'id' => 'ID',
        'products.id' => 'ID',
        'ProductsTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'products.id' => 'ID',
        'Name' => 'NAME',
        'Products.Name' => 'NAME',
        'name' => 'NAME',
        'products.name' => 'NAME',
        'ProductsTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'name' => 'NAME',
        'products.name' => 'NAME',
        'Price' => 'PRICE',
        'Products.Price' => 'PRICE',
        'price' => 'PRICE',
        'products.price' => 'PRICE',
        'ProductsTableMap::COL_PRICE' => 'PRICE',
        'COL_PRICE' => 'PRICE',
        'price' => 'PRICE',
        'products.price' => 'PRICE',
        'ProductCategory' => 'CATEGORY_ID',
        'Products.ProductCategory' => 'CATEGORY_ID',
        'productCategory' => 'CATEGORY_ID',
        'products.productCategory' => 'CATEGORY_ID',
        'ProductsTableMap::COL_CATEGORY_ID' => 'CATEGORY_ID',
        'COL_CATEGORY_ID' => 'CATEGORY_ID',
        'category_id' => 'CATEGORY_ID',
        'products.category_id' => 'CATEGORY_ID',
        'ProductImage' => 'PRODUCT_IMAGE',
        'Products.ProductImage' => 'PRODUCT_IMAGE',
        'productImage' => 'PRODUCT_IMAGE',
        'products.productImage' => 'PRODUCT_IMAGE',
        'ProductsTableMap::COL_PRODUCT_IMAGE' => 'PRODUCT_IMAGE',
        'COL_PRODUCT_IMAGE' => 'PRODUCT_IMAGE',
        'product_image' => 'PRODUCT_IMAGE',
        'products.product_image' => 'PRODUCT_IMAGE',
        'Description' => 'DESCRIPTION',
        'Products.Description' => 'DESCRIPTION',
        'description' => 'DESCRIPTION',
        'products.description' => 'DESCRIPTION',
        'ProductsTableMap::COL_DESCRIPTION' => 'DESCRIPTION',
        'COL_DESCRIPTION' => 'DESCRIPTION',
        'description' => 'DESCRIPTION',
        'products.description' => 'DESCRIPTION',
        'Viewed' => 'VIEWED',
        'Products.Viewed' => 'VIEWED',
        'viewed' => 'VIEWED',
        'products.viewed' => 'VIEWED',
        'ProductsTableMap::COL_VIEWED' => 'VIEWED',
        'COL_VIEWED' => 'VIEWED',
        'viewed' => 'VIEWED',
        'products.viewed' => 'VIEWED',
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
        $this->setName('products');
        $this->setPhpName('Products');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Propel\\Products');
        $this->setPackage('Propel.Propel');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 65, null);
        $this->addColumn('price', 'Price', 'DECIMAL', true, null, null);
        $this->addForeignKey('category_id', 'ProductCategory', 'TINYINT', 'categories', 'id', true, null, null);
        $this->addColumn('product_image', 'ProductImage', 'VARCHAR', true, 50, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('viewed', 'Viewed', 'INTEGER', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Category', '\\Propel\\Propel\\Categories', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':category_id',
    1 => ':id',
  ),
), null, null, null, false);
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
        return $withPrefix ? ProductsTableMap::CLASS_DEFAULT : ProductsTableMap::OM_CLASS;
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
     * @return array           (Products object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ProductsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ProductsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ProductsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProductsTableMap::OM_CLASS;
            /** @var Products $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ProductsTableMap::addInstanceToPool($obj, $key);
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
            $key = ProductsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ProductsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Products $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProductsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ProductsTableMap::COL_ID);
            $criteria->addSelectColumn(ProductsTableMap::COL_NAME);
            $criteria->addSelectColumn(ProductsTableMap::COL_PRICE);
            $criteria->addSelectColumn(ProductsTableMap::COL_CATEGORY_ID);
            $criteria->addSelectColumn(ProductsTableMap::COL_PRODUCT_IMAGE);
            $criteria->addSelectColumn(ProductsTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(ProductsTableMap::COL_VIEWED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.category_id');
            $criteria->addSelectColumn($alias . '.product_image');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.viewed');
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
            $criteria->removeSelectColumn(ProductsTableMap::COL_ID);
            $criteria->removeSelectColumn(ProductsTableMap::COL_NAME);
            $criteria->removeSelectColumn(ProductsTableMap::COL_PRICE);
            $criteria->removeSelectColumn(ProductsTableMap::COL_CATEGORY_ID);
            $criteria->removeSelectColumn(ProductsTableMap::COL_PRODUCT_IMAGE);
            $criteria->removeSelectColumn(ProductsTableMap::COL_DESCRIPTION);
            $criteria->removeSelectColumn(ProductsTableMap::COL_VIEWED);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.price');
            $criteria->removeSelectColumn($alias . '.category_id');
            $criteria->removeSelectColumn($alias . '.product_image');
            $criteria->removeSelectColumn($alias . '.description');
            $criteria->removeSelectColumn($alias . '.viewed');
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
        return Propel::getServiceContainer()->getDatabaseMap(ProductsTableMap::DATABASE_NAME)->getTable(ProductsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ProductsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ProductsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ProductsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Products or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Products object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ProductsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Propel\Products) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProductsTableMap::DATABASE_NAME);
            $criteria->add(ProductsTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ProductsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ProductsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ProductsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the products table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ProductsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Products or Criteria object.
     *
     * @param mixed               $criteria Criteria or Products object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProductsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Products object
        }

        if ($criteria->containsKey(ProductsTableMap::COL_ID) && $criteria->keyContainsValue(ProductsTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProductsTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ProductsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ProductsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ProductsTableMap::buildTableMap();
