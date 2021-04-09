<?php

namespace Propel\Propel\Map;

use Propel\Propel\CandleUsers;
use Propel\Propel\CandleUsersQuery;
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
 * This class defines the structure of the 'candle_users' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class CandleUsersTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Propel.Map.CandleUsersTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'candle_users';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Propel\\CandleUsers';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Propel.CandleUsers';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the id field
     */
    const COL_ID = 'candle_users.id';

    /**
     * the column name for the fname field
     */
    const COL_FNAME = 'candle_users.fname';

    /**
     * the column name for the lname field
     */
    const COL_LNAME = 'candle_users.lname';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'candle_users.email';

    /**
     * the column name for the mobile field
     */
    const COL_MOBILE = 'candle_users.mobile';

    /**
     * the column name for the region field
     */
    const COL_REGION = 'candle_users.region';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'candle_users.city';

    /**
     * the column name for the zip field
     */
    const COL_ZIP = 'candle_users.zip';

    /**
     * the column name for the address field
     */
    const COL_ADDRESS = 'candle_users.address';

    /**
     * the column name for the shipping_region field
     */
    const COL_SHIPPING_REGION = 'candle_users.shipping_region';

    /**
     * the column name for the shipping_city field
     */
    const COL_SHIPPING_CITY = 'candle_users.shipping_city';

    /**
     * the column name for the shipping_zip field
     */
    const COL_SHIPPING_ZIP = 'candle_users.shipping_zip';

    /**
     * the column name for the shipping_address field
     */
    const COL_SHIPPING_ADDRESS = 'candle_users.shipping_address';

    /**
     * the column name for the password field
     */
    const COL_PASSWORD = 'candle_users.password';

    /**
     * the column name for the token field
     */
    const COL_TOKEN = 'candle_users.token';

    /**
     * the column name for the role_id field
     */
    const COL_ROLE_ID = 'candle_users.role_id';

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
        self::TYPE_PHPNAME       => array('Id', 'Fname', 'Lname', 'Email', 'Mobile', 'Region', 'City', 'Zip', 'Address', 'ShippingRegion', 'ShippingCity', 'ShippingZip', 'ShippingAddress', 'Password', 'Token', 'RoleId', ),
        self::TYPE_CAMELNAME     => array('id', 'fname', 'lname', 'email', 'mobile', 'region', 'city', 'zip', 'address', 'shippingRegion', 'shippingCity', 'shippingZip', 'shippingAddress', 'password', 'token', 'roleId', ),
        self::TYPE_COLNAME       => array(CandleUsersTableMap::COL_ID, CandleUsersTableMap::COL_FNAME, CandleUsersTableMap::COL_LNAME, CandleUsersTableMap::COL_EMAIL, CandleUsersTableMap::COL_MOBILE, CandleUsersTableMap::COL_REGION, CandleUsersTableMap::COL_CITY, CandleUsersTableMap::COL_ZIP, CandleUsersTableMap::COL_ADDRESS, CandleUsersTableMap::COL_SHIPPING_REGION, CandleUsersTableMap::COL_SHIPPING_CITY, CandleUsersTableMap::COL_SHIPPING_ZIP, CandleUsersTableMap::COL_SHIPPING_ADDRESS, CandleUsersTableMap::COL_PASSWORD, CandleUsersTableMap::COL_TOKEN, CandleUsersTableMap::COL_ROLE_ID, ),
        self::TYPE_FIELDNAME     => array('id', 'fname', 'lname', 'email', 'mobile', 'region', 'city', 'zip', 'address', 'shipping_region', 'shipping_city', 'shipping_zip', 'shipping_address', 'password', 'token', 'role_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Fname' => 1, 'Lname' => 2, 'Email' => 3, 'Mobile' => 4, 'Region' => 5, 'City' => 6, 'Zip' => 7, 'Address' => 8, 'ShippingRegion' => 9, 'ShippingCity' => 10, 'ShippingZip' => 11, 'ShippingAddress' => 12, 'Password' => 13, 'Token' => 14, 'RoleId' => 15, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'fname' => 1, 'lname' => 2, 'email' => 3, 'mobile' => 4, 'region' => 5, 'city' => 6, 'zip' => 7, 'address' => 8, 'shippingRegion' => 9, 'shippingCity' => 10, 'shippingZip' => 11, 'shippingAddress' => 12, 'password' => 13, 'token' => 14, 'roleId' => 15, ),
        self::TYPE_COLNAME       => array(CandleUsersTableMap::COL_ID => 0, CandleUsersTableMap::COL_FNAME => 1, CandleUsersTableMap::COL_LNAME => 2, CandleUsersTableMap::COL_EMAIL => 3, CandleUsersTableMap::COL_MOBILE => 4, CandleUsersTableMap::COL_REGION => 5, CandleUsersTableMap::COL_CITY => 6, CandleUsersTableMap::COL_ZIP => 7, CandleUsersTableMap::COL_ADDRESS => 8, CandleUsersTableMap::COL_SHIPPING_REGION => 9, CandleUsersTableMap::COL_SHIPPING_CITY => 10, CandleUsersTableMap::COL_SHIPPING_ZIP => 11, CandleUsersTableMap::COL_SHIPPING_ADDRESS => 12, CandleUsersTableMap::COL_PASSWORD => 13, CandleUsersTableMap::COL_TOKEN => 14, CandleUsersTableMap::COL_ROLE_ID => 15, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'fname' => 1, 'lname' => 2, 'email' => 3, 'mobile' => 4, 'region' => 5, 'city' => 6, 'zip' => 7, 'address' => 8, 'shipping_region' => 9, 'shipping_city' => 10, 'shipping_zip' => 11, 'shipping_address' => 12, 'password' => 13, 'token' => 14, 'role_id' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'CandleUsers.Id' => 'ID',
        'id' => 'ID',
        'candleUsers.id' => 'ID',
        'CandleUsersTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'candle_users.id' => 'ID',
        'Fname' => 'FNAME',
        'CandleUsers.Fname' => 'FNAME',
        'fname' => 'FNAME',
        'candleUsers.fname' => 'FNAME',
        'CandleUsersTableMap::COL_FNAME' => 'FNAME',
        'COL_FNAME' => 'FNAME',
        'fname' => 'FNAME',
        'candle_users.fname' => 'FNAME',
        'Lname' => 'LNAME',
        'CandleUsers.Lname' => 'LNAME',
        'lname' => 'LNAME',
        'candleUsers.lname' => 'LNAME',
        'CandleUsersTableMap::COL_LNAME' => 'LNAME',
        'COL_LNAME' => 'LNAME',
        'lname' => 'LNAME',
        'candle_users.lname' => 'LNAME',
        'Email' => 'EMAIL',
        'CandleUsers.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'candleUsers.email' => 'EMAIL',
        'CandleUsersTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'email' => 'EMAIL',
        'candle_users.email' => 'EMAIL',
        'Mobile' => 'MOBILE',
        'CandleUsers.Mobile' => 'MOBILE',
        'mobile' => 'MOBILE',
        'candleUsers.mobile' => 'MOBILE',
        'CandleUsersTableMap::COL_MOBILE' => 'MOBILE',
        'COL_MOBILE' => 'MOBILE',
        'mobile' => 'MOBILE',
        'candle_users.mobile' => 'MOBILE',
        'Region' => 'REGION',
        'CandleUsers.Region' => 'REGION',
        'region' => 'REGION',
        'candleUsers.region' => 'REGION',
        'CandleUsersTableMap::COL_REGION' => 'REGION',
        'COL_REGION' => 'REGION',
        'region' => 'REGION',
        'candle_users.region' => 'REGION',
        'City' => 'CITY',
        'CandleUsers.City' => 'CITY',
        'city' => 'CITY',
        'candleUsers.city' => 'CITY',
        'CandleUsersTableMap::COL_CITY' => 'CITY',
        'COL_CITY' => 'CITY',
        'city' => 'CITY',
        'candle_users.city' => 'CITY',
        'Zip' => 'ZIP',
        'CandleUsers.Zip' => 'ZIP',
        'zip' => 'ZIP',
        'candleUsers.zip' => 'ZIP',
        'CandleUsersTableMap::COL_ZIP' => 'ZIP',
        'COL_ZIP' => 'ZIP',
        'zip' => 'ZIP',
        'candle_users.zip' => 'ZIP',
        'Address' => 'ADDRESS',
        'CandleUsers.Address' => 'ADDRESS',
        'address' => 'ADDRESS',
        'candleUsers.address' => 'ADDRESS',
        'CandleUsersTableMap::COL_ADDRESS' => 'ADDRESS',
        'COL_ADDRESS' => 'ADDRESS',
        'address' => 'ADDRESS',
        'candle_users.address' => 'ADDRESS',
        'ShippingRegion' => 'SHIPPING_REGION',
        'CandleUsers.ShippingRegion' => 'SHIPPING_REGION',
        'shippingRegion' => 'SHIPPING_REGION',
        'candleUsers.shippingRegion' => 'SHIPPING_REGION',
        'CandleUsersTableMap::COL_SHIPPING_REGION' => 'SHIPPING_REGION',
        'COL_SHIPPING_REGION' => 'SHIPPING_REGION',
        'shipping_region' => 'SHIPPING_REGION',
        'candle_users.shipping_region' => 'SHIPPING_REGION',
        'ShippingCity' => 'SHIPPING_CITY',
        'CandleUsers.ShippingCity' => 'SHIPPING_CITY',
        'shippingCity' => 'SHIPPING_CITY',
        'candleUsers.shippingCity' => 'SHIPPING_CITY',
        'CandleUsersTableMap::COL_SHIPPING_CITY' => 'SHIPPING_CITY',
        'COL_SHIPPING_CITY' => 'SHIPPING_CITY',
        'shipping_city' => 'SHIPPING_CITY',
        'candle_users.shipping_city' => 'SHIPPING_CITY',
        'ShippingZip' => 'SHIPPING_ZIP',
        'CandleUsers.ShippingZip' => 'SHIPPING_ZIP',
        'shippingZip' => 'SHIPPING_ZIP',
        'candleUsers.shippingZip' => 'SHIPPING_ZIP',
        'CandleUsersTableMap::COL_SHIPPING_ZIP' => 'SHIPPING_ZIP',
        'COL_SHIPPING_ZIP' => 'SHIPPING_ZIP',
        'shipping_zip' => 'SHIPPING_ZIP',
        'candle_users.shipping_zip' => 'SHIPPING_ZIP',
        'ShippingAddress' => 'SHIPPING_ADDRESS',
        'CandleUsers.ShippingAddress' => 'SHIPPING_ADDRESS',
        'shippingAddress' => 'SHIPPING_ADDRESS',
        'candleUsers.shippingAddress' => 'SHIPPING_ADDRESS',
        'CandleUsersTableMap::COL_SHIPPING_ADDRESS' => 'SHIPPING_ADDRESS',
        'COL_SHIPPING_ADDRESS' => 'SHIPPING_ADDRESS',
        'shipping_address' => 'SHIPPING_ADDRESS',
        'candle_users.shipping_address' => 'SHIPPING_ADDRESS',
        'Password' => 'PASSWORD',
        'CandleUsers.Password' => 'PASSWORD',
        'password' => 'PASSWORD',
        'candleUsers.password' => 'PASSWORD',
        'CandleUsersTableMap::COL_PASSWORD' => 'PASSWORD',
        'COL_PASSWORD' => 'PASSWORD',
        'password' => 'PASSWORD',
        'candle_users.password' => 'PASSWORD',
        'Token' => 'TOKEN',
        'CandleUsers.Token' => 'TOKEN',
        'token' => 'TOKEN',
        'candleUsers.token' => 'TOKEN',
        'CandleUsersTableMap::COL_TOKEN' => 'TOKEN',
        'COL_TOKEN' => 'TOKEN',
        'token' => 'TOKEN',
        'candle_users.token' => 'TOKEN',
        'RoleId' => 'ROLE_ID',
        'CandleUsers.RoleId' => 'ROLE_ID',
        'roleId' => 'ROLE_ID',
        'candleUsers.roleId' => 'ROLE_ID',
        'CandleUsersTableMap::COL_ROLE_ID' => 'ROLE_ID',
        'COL_ROLE_ID' => 'ROLE_ID',
        'role_id' => 'ROLE_ID',
        'candle_users.role_id' => 'ROLE_ID',
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
        $this->setName('candle_users');
        $this->setPhpName('CandleUsers');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Propel\\CandleUsers');
        $this->setPackage('Propel.Propel');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('fname', 'Fname', 'VARCHAR', true, 30, null);
        $this->addColumn('lname', 'Lname', 'VARCHAR', true, 30, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 30, null);
        $this->addColumn('mobile', 'Mobile', 'VARCHAR', true, 15, null);
        $this->addColumn('region', 'Region', 'VARCHAR', true, 15, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 15, null);
        $this->addColumn('zip', 'Zip', 'VARCHAR', true, 15, null);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', true, null, null);
        $this->addColumn('shipping_region', 'ShippingRegion', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_city', 'ShippingCity', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_zip', 'ShippingZip', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_address', 'ShippingAddress', 'LONGVARCHAR', true, null, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 191, null);
        $this->addColumn('token', 'Token', 'VARCHAR', false, 100, null);
        $this->addForeignKey('role_id', 'RoleId', 'INTEGER', 'candle_role', 'id', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CandleRole', '\\Propel\\Propel\\CandleRole', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':role_id',
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
        return $withPrefix ? CandleUsersTableMap::CLASS_DEFAULT : CandleUsersTableMap::OM_CLASS;
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
     * @return array           (CandleUsers object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CandleUsersTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CandleUsersTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CandleUsersTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CandleUsersTableMap::OM_CLASS;
            /** @var CandleUsers $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CandleUsersTableMap::addInstanceToPool($obj, $key);
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
            $key = CandleUsersTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CandleUsersTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CandleUsers $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CandleUsersTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CandleUsersTableMap::COL_ID);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_FNAME);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_LNAME);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_EMAIL);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_MOBILE);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_REGION);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_CITY);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_ZIP);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_ADDRESS);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_SHIPPING_REGION);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_SHIPPING_CITY);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_SHIPPING_ZIP);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_SHIPPING_ADDRESS);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_PASSWORD);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_TOKEN);
            $criteria->addSelectColumn(CandleUsersTableMap::COL_ROLE_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.fname');
            $criteria->addSelectColumn($alias . '.lname');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.mobile');
            $criteria->addSelectColumn($alias . '.region');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.zip');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.shipping_region');
            $criteria->addSelectColumn($alias . '.shipping_city');
            $criteria->addSelectColumn($alias . '.shipping_zip');
            $criteria->addSelectColumn($alias . '.shipping_address');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.token');
            $criteria->addSelectColumn($alias . '.role_id');
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
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_ID);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_FNAME);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_LNAME);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_MOBILE);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_REGION);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_CITY);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_ZIP);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_ADDRESS);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_SHIPPING_REGION);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_SHIPPING_CITY);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_SHIPPING_ZIP);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_SHIPPING_ADDRESS);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_PASSWORD);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_TOKEN);
            $criteria->removeSelectColumn(CandleUsersTableMap::COL_ROLE_ID);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.fname');
            $criteria->removeSelectColumn($alias . '.lname');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.mobile');
            $criteria->removeSelectColumn($alias . '.region');
            $criteria->removeSelectColumn($alias . '.city');
            $criteria->removeSelectColumn($alias . '.zip');
            $criteria->removeSelectColumn($alias . '.address');
            $criteria->removeSelectColumn($alias . '.shipping_region');
            $criteria->removeSelectColumn($alias . '.shipping_city');
            $criteria->removeSelectColumn($alias . '.shipping_zip');
            $criteria->removeSelectColumn($alias . '.shipping_address');
            $criteria->removeSelectColumn($alias . '.password');
            $criteria->removeSelectColumn($alias . '.token');
            $criteria->removeSelectColumn($alias . '.role_id');
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
        return Propel::getServiceContainer()->getDatabaseMap(CandleUsersTableMap::DATABASE_NAME)->getTable(CandleUsersTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CandleUsersTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CandleUsersTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CandleUsersTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CandleUsers or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CandleUsers object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CandleUsersTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Propel\CandleUsers) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CandleUsersTableMap::DATABASE_NAME);
            $criteria->add(CandleUsersTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = CandleUsersQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CandleUsersTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CandleUsersTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the candle_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CandleUsersQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CandleUsers or Criteria object.
     *
     * @param mixed               $criteria Criteria or CandleUsers object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CandleUsersTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CandleUsers object
        }

        if ($criteria->containsKey(CandleUsersTableMap::COL_ID) && $criteria->keyContainsValue(CandleUsersTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CandleUsersTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = CandleUsersQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CandleUsersTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CandleUsersTableMap::buildTableMap();
