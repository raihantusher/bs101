<?php

namespace Propel\Propel\Map;

use Propel\Propel\Orders;
use Propel\Propel\OrdersQuery;
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
 * This class defines the structure of the 'orders' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class OrdersTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.Propel.Map.OrdersTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'orders';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Propel\\Propel\\Orders';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Propel.Propel.Orders';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 22;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 22;

    /**
     * the column name for the id field
     */
    const COL_ID = 'orders.id';

    /**
     * the column name for the user_id field
     */
    const COL_USER_ID = 'orders.user_id';

    /**
     * the column name for the note field
     */
    const COL_NOTE = 'orders.note';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'orders.first_name';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'orders.last_name';

    /**
     * the column name for the mobile field
     */
    const COL_MOBILE = 'orders.mobile';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'orders.email';

    /**
     * the column name for the region field
     */
    const COL_REGION = 'orders.region';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'orders.city';

    /**
     * the column name for the zip field
     */
    const COL_ZIP = 'orders.zip';

    /**
     * the column name for the address field
     */
    const COL_ADDRESS = 'orders.address';

    /**
     * the column name for the shipping_first_name field
     */
    const COL_SHIPPING_FIRST_NAME = 'orders.shipping_first_name';

    /**
     * the column name for the shipping_last_name field
     */
    const COL_SHIPPING_LAST_NAME = 'orders.shipping_last_name';

    /**
     * the column name for the shipping_mobile field
     */
    const COL_SHIPPING_MOBILE = 'orders.shipping_mobile';

    /**
     * the column name for the shipping_email field
     */
    const COL_SHIPPING_EMAIL = 'orders.shipping_email';

    /**
     * the column name for the shipping_region field
     */
    const COL_SHIPPING_REGION = 'orders.shipping_region';

    /**
     * the column name for the shipping_city field
     */
    const COL_SHIPPING_CITY = 'orders.shipping_city';

    /**
     * the column name for the shipping_zip field
     */
    const COL_SHIPPING_ZIP = 'orders.shipping_zip';

    /**
     * the column name for the shipping_address field
     */
    const COL_SHIPPING_ADDRESS = 'orders.shipping_address';

    /**
     * the column name for the seller_note field
     */
    const COL_SELLER_NOTE = 'orders.seller_note';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'orders.status';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'orders.created_at';

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
        self::TYPE_PHPNAME       => array('Id', 'UserId', 'Note', 'FirstName', 'LastName', 'Mobile', 'Email', 'Region', 'City', 'Zip', 'Address', 'ShippingFirstName', 'ShippingLastName', 'ShippingMobile', 'ShippingEmail', 'ShippingRegion', 'ShippingCity', 'ShippingZip', 'ShippingAddress', 'SellerNote', 'Status', 'CreatedAt', ),
        self::TYPE_CAMELNAME     => array('id', 'userId', 'note', 'firstName', 'lastName', 'mobile', 'email', 'region', 'city', 'zip', 'address', 'shippingFirstName', 'shippingLastName', 'shippingMobile', 'shippingEmail', 'shippingRegion', 'shippingCity', 'shippingZip', 'shippingAddress', 'sellerNote', 'status', 'createdAt', ),
        self::TYPE_COLNAME       => array(OrdersTableMap::COL_ID, OrdersTableMap::COL_USER_ID, OrdersTableMap::COL_NOTE, OrdersTableMap::COL_FIRST_NAME, OrdersTableMap::COL_LAST_NAME, OrdersTableMap::COL_MOBILE, OrdersTableMap::COL_EMAIL, OrdersTableMap::COL_REGION, OrdersTableMap::COL_CITY, OrdersTableMap::COL_ZIP, OrdersTableMap::COL_ADDRESS, OrdersTableMap::COL_SHIPPING_FIRST_NAME, OrdersTableMap::COL_SHIPPING_LAST_NAME, OrdersTableMap::COL_SHIPPING_MOBILE, OrdersTableMap::COL_SHIPPING_EMAIL, OrdersTableMap::COL_SHIPPING_REGION, OrdersTableMap::COL_SHIPPING_CITY, OrdersTableMap::COL_SHIPPING_ZIP, OrdersTableMap::COL_SHIPPING_ADDRESS, OrdersTableMap::COL_SELLER_NOTE, OrdersTableMap::COL_STATUS, OrdersTableMap::COL_CREATED_AT, ),
        self::TYPE_FIELDNAME     => array('id', 'user_id', 'note', 'first_name', 'last_name', 'mobile', 'email', 'region', 'city', 'zip', 'address', 'shipping_first_name', 'shipping_last_name', 'shipping_mobile', 'shipping_email', 'shipping_region', 'shipping_city', 'shipping_zip', 'shipping_address', 'seller_note', 'status', 'created_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'UserId' => 1, 'Note' => 2, 'FirstName' => 3, 'LastName' => 4, 'Mobile' => 5, 'Email' => 6, 'Region' => 7, 'City' => 8, 'Zip' => 9, 'Address' => 10, 'ShippingFirstName' => 11, 'ShippingLastName' => 12, 'ShippingMobile' => 13, 'ShippingEmail' => 14, 'ShippingRegion' => 15, 'ShippingCity' => 16, 'ShippingZip' => 17, 'ShippingAddress' => 18, 'SellerNote' => 19, 'Status' => 20, 'CreatedAt' => 21, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'userId' => 1, 'note' => 2, 'firstName' => 3, 'lastName' => 4, 'mobile' => 5, 'email' => 6, 'region' => 7, 'city' => 8, 'zip' => 9, 'address' => 10, 'shippingFirstName' => 11, 'shippingLastName' => 12, 'shippingMobile' => 13, 'shippingEmail' => 14, 'shippingRegion' => 15, 'shippingCity' => 16, 'shippingZip' => 17, 'shippingAddress' => 18, 'sellerNote' => 19, 'status' => 20, 'createdAt' => 21, ),
        self::TYPE_COLNAME       => array(OrdersTableMap::COL_ID => 0, OrdersTableMap::COL_USER_ID => 1, OrdersTableMap::COL_NOTE => 2, OrdersTableMap::COL_FIRST_NAME => 3, OrdersTableMap::COL_LAST_NAME => 4, OrdersTableMap::COL_MOBILE => 5, OrdersTableMap::COL_EMAIL => 6, OrdersTableMap::COL_REGION => 7, OrdersTableMap::COL_CITY => 8, OrdersTableMap::COL_ZIP => 9, OrdersTableMap::COL_ADDRESS => 10, OrdersTableMap::COL_SHIPPING_FIRST_NAME => 11, OrdersTableMap::COL_SHIPPING_LAST_NAME => 12, OrdersTableMap::COL_SHIPPING_MOBILE => 13, OrdersTableMap::COL_SHIPPING_EMAIL => 14, OrdersTableMap::COL_SHIPPING_REGION => 15, OrdersTableMap::COL_SHIPPING_CITY => 16, OrdersTableMap::COL_SHIPPING_ZIP => 17, OrdersTableMap::COL_SHIPPING_ADDRESS => 18, OrdersTableMap::COL_SELLER_NOTE => 19, OrdersTableMap::COL_STATUS => 20, OrdersTableMap::COL_CREATED_AT => 21, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'user_id' => 1, 'note' => 2, 'first_name' => 3, 'last_name' => 4, 'mobile' => 5, 'email' => 6, 'region' => 7, 'city' => 8, 'zip' => 9, 'address' => 10, 'shipping_first_name' => 11, 'shipping_last_name' => 12, 'shipping_mobile' => 13, 'shipping_email' => 14, 'shipping_region' => 15, 'shipping_city' => 16, 'shipping_zip' => 17, 'shipping_address' => 18, 'seller_note' => 19, 'status' => 20, 'created_at' => 21, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'ID',
        'Orders.Id' => 'ID',
        'id' => 'ID',
        'orders.id' => 'ID',
        'OrdersTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'id' => 'ID',
        'orders.id' => 'ID',
        'UserId' => 'USER_ID',
        'Orders.UserId' => 'USER_ID',
        'userId' => 'USER_ID',
        'orders.userId' => 'USER_ID',
        'OrdersTableMap::COL_USER_ID' => 'USER_ID',
        'COL_USER_ID' => 'USER_ID',
        'user_id' => 'USER_ID',
        'orders.user_id' => 'USER_ID',
        'Note' => 'NOTE',
        'Orders.Note' => 'NOTE',
        'note' => 'NOTE',
        'orders.note' => 'NOTE',
        'OrdersTableMap::COL_NOTE' => 'NOTE',
        'COL_NOTE' => 'NOTE',
        'note' => 'NOTE',
        'orders.note' => 'NOTE',
        'FirstName' => 'FIRST_NAME',
        'Orders.FirstName' => 'FIRST_NAME',
        'firstName' => 'FIRST_NAME',
        'orders.firstName' => 'FIRST_NAME',
        'OrdersTableMap::COL_FIRST_NAME' => 'FIRST_NAME',
        'COL_FIRST_NAME' => 'FIRST_NAME',
        'first_name' => 'FIRST_NAME',
        'orders.first_name' => 'FIRST_NAME',
        'LastName' => 'LAST_NAME',
        'Orders.LastName' => 'LAST_NAME',
        'lastName' => 'LAST_NAME',
        'orders.lastName' => 'LAST_NAME',
        'OrdersTableMap::COL_LAST_NAME' => 'LAST_NAME',
        'COL_LAST_NAME' => 'LAST_NAME',
        'last_name' => 'LAST_NAME',
        'orders.last_name' => 'LAST_NAME',
        'Mobile' => 'MOBILE',
        'Orders.Mobile' => 'MOBILE',
        'mobile' => 'MOBILE',
        'orders.mobile' => 'MOBILE',
        'OrdersTableMap::COL_MOBILE' => 'MOBILE',
        'COL_MOBILE' => 'MOBILE',
        'mobile' => 'MOBILE',
        'orders.mobile' => 'MOBILE',
        'Email' => 'EMAIL',
        'Orders.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'orders.email' => 'EMAIL',
        'OrdersTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'email' => 'EMAIL',
        'orders.email' => 'EMAIL',
        'Region' => 'REGION',
        'Orders.Region' => 'REGION',
        'region' => 'REGION',
        'orders.region' => 'REGION',
        'OrdersTableMap::COL_REGION' => 'REGION',
        'COL_REGION' => 'REGION',
        'region' => 'REGION',
        'orders.region' => 'REGION',
        'City' => 'CITY',
        'Orders.City' => 'CITY',
        'city' => 'CITY',
        'orders.city' => 'CITY',
        'OrdersTableMap::COL_CITY' => 'CITY',
        'COL_CITY' => 'CITY',
        'city' => 'CITY',
        'orders.city' => 'CITY',
        'Zip' => 'ZIP',
        'Orders.Zip' => 'ZIP',
        'zip' => 'ZIP',
        'orders.zip' => 'ZIP',
        'OrdersTableMap::COL_ZIP' => 'ZIP',
        'COL_ZIP' => 'ZIP',
        'zip' => 'ZIP',
        'orders.zip' => 'ZIP',
        'Address' => 'ADDRESS',
        'Orders.Address' => 'ADDRESS',
        'address' => 'ADDRESS',
        'orders.address' => 'ADDRESS',
        'OrdersTableMap::COL_ADDRESS' => 'ADDRESS',
        'COL_ADDRESS' => 'ADDRESS',
        'address' => 'ADDRESS',
        'orders.address' => 'ADDRESS',
        'ShippingFirstName' => 'SHIPPING_FIRST_NAME',
        'Orders.ShippingFirstName' => 'SHIPPING_FIRST_NAME',
        'shippingFirstName' => 'SHIPPING_FIRST_NAME',
        'orders.shippingFirstName' => 'SHIPPING_FIRST_NAME',
        'OrdersTableMap::COL_SHIPPING_FIRST_NAME' => 'SHIPPING_FIRST_NAME',
        'COL_SHIPPING_FIRST_NAME' => 'SHIPPING_FIRST_NAME',
        'shipping_first_name' => 'SHIPPING_FIRST_NAME',
        'orders.shipping_first_name' => 'SHIPPING_FIRST_NAME',
        'ShippingLastName' => 'SHIPPING_LAST_NAME',
        'Orders.ShippingLastName' => 'SHIPPING_LAST_NAME',
        'shippingLastName' => 'SHIPPING_LAST_NAME',
        'orders.shippingLastName' => 'SHIPPING_LAST_NAME',
        'OrdersTableMap::COL_SHIPPING_LAST_NAME' => 'SHIPPING_LAST_NAME',
        'COL_SHIPPING_LAST_NAME' => 'SHIPPING_LAST_NAME',
        'shipping_last_name' => 'SHIPPING_LAST_NAME',
        'orders.shipping_last_name' => 'SHIPPING_LAST_NAME',
        'ShippingMobile' => 'SHIPPING_MOBILE',
        'Orders.ShippingMobile' => 'SHIPPING_MOBILE',
        'shippingMobile' => 'SHIPPING_MOBILE',
        'orders.shippingMobile' => 'SHIPPING_MOBILE',
        'OrdersTableMap::COL_SHIPPING_MOBILE' => 'SHIPPING_MOBILE',
        'COL_SHIPPING_MOBILE' => 'SHIPPING_MOBILE',
        'shipping_mobile' => 'SHIPPING_MOBILE',
        'orders.shipping_mobile' => 'SHIPPING_MOBILE',
        'ShippingEmail' => 'SHIPPING_EMAIL',
        'Orders.ShippingEmail' => 'SHIPPING_EMAIL',
        'shippingEmail' => 'SHIPPING_EMAIL',
        'orders.shippingEmail' => 'SHIPPING_EMAIL',
        'OrdersTableMap::COL_SHIPPING_EMAIL' => 'SHIPPING_EMAIL',
        'COL_SHIPPING_EMAIL' => 'SHIPPING_EMAIL',
        'shipping_email' => 'SHIPPING_EMAIL',
        'orders.shipping_email' => 'SHIPPING_EMAIL',
        'ShippingRegion' => 'SHIPPING_REGION',
        'Orders.ShippingRegion' => 'SHIPPING_REGION',
        'shippingRegion' => 'SHIPPING_REGION',
        'orders.shippingRegion' => 'SHIPPING_REGION',
        'OrdersTableMap::COL_SHIPPING_REGION' => 'SHIPPING_REGION',
        'COL_SHIPPING_REGION' => 'SHIPPING_REGION',
        'shipping_region' => 'SHIPPING_REGION',
        'orders.shipping_region' => 'SHIPPING_REGION',
        'ShippingCity' => 'SHIPPING_CITY',
        'Orders.ShippingCity' => 'SHIPPING_CITY',
        'shippingCity' => 'SHIPPING_CITY',
        'orders.shippingCity' => 'SHIPPING_CITY',
        'OrdersTableMap::COL_SHIPPING_CITY' => 'SHIPPING_CITY',
        'COL_SHIPPING_CITY' => 'SHIPPING_CITY',
        'shipping_city' => 'SHIPPING_CITY',
        'orders.shipping_city' => 'SHIPPING_CITY',
        'ShippingZip' => 'SHIPPING_ZIP',
        'Orders.ShippingZip' => 'SHIPPING_ZIP',
        'shippingZip' => 'SHIPPING_ZIP',
        'orders.shippingZip' => 'SHIPPING_ZIP',
        'OrdersTableMap::COL_SHIPPING_ZIP' => 'SHIPPING_ZIP',
        'COL_SHIPPING_ZIP' => 'SHIPPING_ZIP',
        'shipping_zip' => 'SHIPPING_ZIP',
        'orders.shipping_zip' => 'SHIPPING_ZIP',
        'ShippingAddress' => 'SHIPPING_ADDRESS',
        'Orders.ShippingAddress' => 'SHIPPING_ADDRESS',
        'shippingAddress' => 'SHIPPING_ADDRESS',
        'orders.shippingAddress' => 'SHIPPING_ADDRESS',
        'OrdersTableMap::COL_SHIPPING_ADDRESS' => 'SHIPPING_ADDRESS',
        'COL_SHIPPING_ADDRESS' => 'SHIPPING_ADDRESS',
        'shipping_address' => 'SHIPPING_ADDRESS',
        'orders.shipping_address' => 'SHIPPING_ADDRESS',
        'SellerNote' => 'SELLER_NOTE',
        'Orders.SellerNote' => 'SELLER_NOTE',
        'sellerNote' => 'SELLER_NOTE',
        'orders.sellerNote' => 'SELLER_NOTE',
        'OrdersTableMap::COL_SELLER_NOTE' => 'SELLER_NOTE',
        'COL_SELLER_NOTE' => 'SELLER_NOTE',
        'seller_note' => 'SELLER_NOTE',
        'orders.seller_note' => 'SELLER_NOTE',
        'Status' => 'STATUS',
        'Orders.Status' => 'STATUS',
        'status' => 'STATUS',
        'orders.status' => 'STATUS',
        'OrdersTableMap::COL_STATUS' => 'STATUS',
        'COL_STATUS' => 'STATUS',
        'status' => 'STATUS',
        'orders.status' => 'STATUS',
        'CreatedAt' => 'CREATED_AT',
        'Orders.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'orders.createdAt' => 'CREATED_AT',
        'OrdersTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'orders.created_at' => 'CREATED_AT',
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
        $this->setName('orders');
        $this->setPhpName('Orders');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Propel\\Propel\\Orders');
        $this->setPackage('Propel.Propel');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, null, null);
        $this->addColumn('note', 'Note', 'LONGVARCHAR', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 30, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 30, null);
        $this->addColumn('mobile', 'Mobile', 'VARCHAR', true, 15, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 30, null);
        $this->addColumn('region', 'Region', 'VARCHAR', true, 15, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 15, null);
        $this->addColumn('zip', 'Zip', 'VARCHAR', true, 15, null);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', true, null, null);
        $this->addColumn('shipping_first_name', 'ShippingFirstName', 'VARCHAR', true, 30, null);
        $this->addColumn('shipping_last_name', 'ShippingLastName', 'VARCHAR', true, 30, null);
        $this->addColumn('shipping_mobile', 'ShippingMobile', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_email', 'ShippingEmail', 'VARCHAR', true, 30, null);
        $this->addColumn('shipping_region', 'ShippingRegion', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_city', 'ShippingCity', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_zip', 'ShippingZip', 'VARCHAR', true, 15, null);
        $this->addColumn('shipping_address', 'ShippingAddress', 'LONGVARCHAR', true, null, null);
        $this->addColumn('seller_note', 'SellerNote', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'CHAR', true, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
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
        return $withPrefix ? OrdersTableMap::CLASS_DEFAULT : OrdersTableMap::OM_CLASS;
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
     * @return array           (Orders object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = OrdersTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OrdersTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OrdersTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OrdersTableMap::OM_CLASS;
            /** @var Orders $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OrdersTableMap::addInstanceToPool($obj, $key);
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
            $key = OrdersTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OrdersTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Orders $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OrdersTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OrdersTableMap::COL_ID);
            $criteria->addSelectColumn(OrdersTableMap::COL_USER_ID);
            $criteria->addSelectColumn(OrdersTableMap::COL_NOTE);
            $criteria->addSelectColumn(OrdersTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(OrdersTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(OrdersTableMap::COL_MOBILE);
            $criteria->addSelectColumn(OrdersTableMap::COL_EMAIL);
            $criteria->addSelectColumn(OrdersTableMap::COL_REGION);
            $criteria->addSelectColumn(OrdersTableMap::COL_CITY);
            $criteria->addSelectColumn(OrdersTableMap::COL_ZIP);
            $criteria->addSelectColumn(OrdersTableMap::COL_ADDRESS);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_FIRST_NAME);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_LAST_NAME);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_MOBILE);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_EMAIL);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_REGION);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_CITY);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_ZIP);
            $criteria->addSelectColumn(OrdersTableMap::COL_SHIPPING_ADDRESS);
            $criteria->addSelectColumn(OrdersTableMap::COL_SELLER_NOTE);
            $criteria->addSelectColumn(OrdersTableMap::COL_STATUS);
            $criteria->addSelectColumn(OrdersTableMap::COL_CREATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.mobile');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.region');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.zip');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.shipping_first_name');
            $criteria->addSelectColumn($alias . '.shipping_last_name');
            $criteria->addSelectColumn($alias . '.shipping_mobile');
            $criteria->addSelectColumn($alias . '.shipping_email');
            $criteria->addSelectColumn($alias . '.shipping_region');
            $criteria->addSelectColumn($alias . '.shipping_city');
            $criteria->addSelectColumn($alias . '.shipping_zip');
            $criteria->addSelectColumn($alias . '.shipping_address');
            $criteria->addSelectColumn($alias . '.seller_note');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.created_at');
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
            $criteria->removeSelectColumn(OrdersTableMap::COL_ID);
            $criteria->removeSelectColumn(OrdersTableMap::COL_USER_ID);
            $criteria->removeSelectColumn(OrdersTableMap::COL_NOTE);
            $criteria->removeSelectColumn(OrdersTableMap::COL_FIRST_NAME);
            $criteria->removeSelectColumn(OrdersTableMap::COL_LAST_NAME);
            $criteria->removeSelectColumn(OrdersTableMap::COL_MOBILE);
            $criteria->removeSelectColumn(OrdersTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(OrdersTableMap::COL_REGION);
            $criteria->removeSelectColumn(OrdersTableMap::COL_CITY);
            $criteria->removeSelectColumn(OrdersTableMap::COL_ZIP);
            $criteria->removeSelectColumn(OrdersTableMap::COL_ADDRESS);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_FIRST_NAME);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_LAST_NAME);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_MOBILE);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_EMAIL);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_REGION);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_CITY);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_ZIP);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SHIPPING_ADDRESS);
            $criteria->removeSelectColumn(OrdersTableMap::COL_SELLER_NOTE);
            $criteria->removeSelectColumn(OrdersTableMap::COL_STATUS);
            $criteria->removeSelectColumn(OrdersTableMap::COL_CREATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.user_id');
            $criteria->removeSelectColumn($alias . '.note');
            $criteria->removeSelectColumn($alias . '.first_name');
            $criteria->removeSelectColumn($alias . '.last_name');
            $criteria->removeSelectColumn($alias . '.mobile');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.region');
            $criteria->removeSelectColumn($alias . '.city');
            $criteria->removeSelectColumn($alias . '.zip');
            $criteria->removeSelectColumn($alias . '.address');
            $criteria->removeSelectColumn($alias . '.shipping_first_name');
            $criteria->removeSelectColumn($alias . '.shipping_last_name');
            $criteria->removeSelectColumn($alias . '.shipping_mobile');
            $criteria->removeSelectColumn($alias . '.shipping_email');
            $criteria->removeSelectColumn($alias . '.shipping_region');
            $criteria->removeSelectColumn($alias . '.shipping_city');
            $criteria->removeSelectColumn($alias . '.shipping_zip');
            $criteria->removeSelectColumn($alias . '.shipping_address');
            $criteria->removeSelectColumn($alias . '.seller_note');
            $criteria->removeSelectColumn($alias . '.status');
            $criteria->removeSelectColumn($alias . '.created_at');
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
        return Propel::getServiceContainer()->getDatabaseMap(OrdersTableMap::DATABASE_NAME)->getTable(OrdersTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(OrdersTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(OrdersTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new OrdersTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Orders or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Orders object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OrdersTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Propel\Propel\Orders) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OrdersTableMap::DATABASE_NAME);
            $criteria->add(OrdersTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = OrdersQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OrdersTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OrdersTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the orders table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return OrdersQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Orders or Criteria object.
     *
     * @param mixed               $criteria Criteria or Orders object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OrdersTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Orders object
        }

        if ($criteria->containsKey(OrdersTableMap::COL_ID) && $criteria->keyContainsValue(OrdersTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OrdersTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = OrdersQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // OrdersTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
OrdersTableMap::buildTableMap();
