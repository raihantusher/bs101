<?php

namespace Propel\Model\Base;

use \DateTime;
use \Exception;
use \PDO;
use Propel\Model\OrdersQuery as ChildOrdersQuery;
use Propel\Model\Map\OrdersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'orders' table.
 *
 *
 *
 * @package    propel.generator.Propel.Model.Base
 */
abstract class Orders implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Propel\\Model\\Map\\OrdersTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     *
     * @var        int
     */
    protected $id;

    /**
     * The value for the user_id field.
     *
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the note field.
     *
     * @var        string
     */
    protected $note;

    /**
     * The value for the first_name field.
     *
     * @var        string
     */
    protected $first_name;

    /**
     * The value for the last_name field.
     *
     * @var        string
     */
    protected $last_name;

    /**
     * The value for the mobile field.
     *
     * @var        string
     */
    protected $mobile;

    /**
     * The value for the email field.
     *
     * @var        string
     */
    protected $email;

    /**
     * The value for the region field.
     *
     * @var        string
     */
    protected $region;

    /**
     * The value for the city field.
     *
     * @var        string
     */
    protected $city;

    /**
     * The value for the zip field.
     *
     * @var        string
     */
    protected $zip;

    /**
     * The value for the address field.
     *
     * @var        string
     */
    protected $address;

    /**
     * The value for the shipping_first_name field.
     *
     * @var        string
     */
    protected $shipping_first_name;

    /**
     * The value for the shipping_last_name field.
     *
     * @var        string
     */
    protected $shipping_last_name;

    /**
     * The value for the shipping_mobile field.
     *
     * @var        string
     */
    protected $shipping_mobile;

    /**
     * The value for the shipping_email field.
     *
     * @var        string
     */
    protected $shipping_email;

    /**
     * The value for the shipping_region field.
     *
     * @var        string
     */
    protected $shipping_region;

    /**
     * The value for the shipping_city field.
     *
     * @var        string
     */
    protected $shipping_city;

    /**
     * The value for the shipping_zip field.
     *
     * @var        string
     */
    protected $shipping_zip;

    /**
     * The value for the shipping_address field.
     *
     * @var        string
     */
    protected $shipping_address;

    /**
     * The value for the shipping_cost field.
     *
     * @var        string
     */
    protected $shipping_cost;

    /**
     * The value for the seller_note field.
     *
     * @var        string
     */
    protected $seller_note;

    /**
     * The value for the status field.
     *
     * @var        string
     */
    protected $status;

    /**
     * The value for the created_at field.
     *
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        DateTime
     */
    protected $created_at;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
    }

    /**
     * Initializes internal state of Propel\Model\Base\Orders object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>Orders</code> instance.  If
     * <code>obj</code> is an instance of <code>Orders</code>, delegates to
     * <code>equals(Orders)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param  string  $keyType                (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Get the [note] column value.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Get the [first_name] column value.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Get the [last_name] column value.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Get the [mobile] column value.
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [region] column value.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the [zip] column value.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Get the [shipping_first_name] column value.
     *
     * @return string
     */
    public function getShippingFirstName()
    {
        return $this->shipping_first_name;
    }

    /**
     * Get the [shipping_last_name] column value.
     *
     * @return string
     */
    public function getShippingLastName()
    {
        return $this->shipping_last_name;
    }

    /**
     * Get the [shipping_mobile] column value.
     *
     * @return string
     */
    public function getShippingMobile()
    {
        return $this->shipping_mobile;
    }

    /**
     * Get the [shipping_email] column value.
     *
     * @return string
     */
    public function getShippingEmail()
    {
        return $this->shipping_email;
    }

    /**
     * Get the [shipping_region] column value.
     *
     * @return string
     */
    public function getShippingRegion()
    {
        return $this->shipping_region;
    }

    /**
     * Get the [shipping_city] column value.
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shipping_city;
    }

    /**
     * Get the [shipping_zip] column value.
     *
     * @return string
     */
    public function getShippingZip()
    {
        return $this->shipping_zip;
    }

    /**
     * Get the [shipping_address] column value.
     *
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * Get the [shipping_cost] column value.
     *
     * @return string
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    /**
     * Get the [seller_note] column value.
     *
     * @return string
     */
    public function getSellerNote()
    {
        return $this->seller_note;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime : string)
     */
    public function getCreatedAt($format = null)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[OrdersTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [user_id] column.
     *
     * @param int $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[OrdersTableMap::COL_USER_ID] = true;
        }

        return $this;
    } // setUserId()

    /**
     * Set the value of [note] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[OrdersTableMap::COL_NOTE] = true;
        }

        return $this;
    } // setNote()

    /**
     * Set the value of [first_name] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setFirstName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->first_name !== $v) {
            $this->first_name = $v;
            $this->modifiedColumns[OrdersTableMap::COL_FIRST_NAME] = true;
        }

        return $this;
    } // setFirstName()

    /**
     * Set the value of [last_name] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setLastName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->last_name !== $v) {
            $this->last_name = $v;
            $this->modifiedColumns[OrdersTableMap::COL_LAST_NAME] = true;
        }

        return $this;
    } // setLastName()

    /**
     * Set the value of [mobile] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setMobile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mobile !== $v) {
            $this->mobile = $v;
            $this->modifiedColumns[OrdersTableMap::COL_MOBILE] = true;
        }

        return $this;
    } // setMobile()

    /**
     * Set the value of [email] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[OrdersTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [region] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setRegion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->region !== $v) {
            $this->region = $v;
            $this->modifiedColumns[OrdersTableMap::COL_REGION] = true;
        }

        return $this;
    } // setRegion()

    /**
     * Set the value of [city] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[OrdersTableMap::COL_CITY] = true;
        }

        return $this;
    } // setCity()

    /**
     * Set the value of [zip] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setZip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->zip !== $v) {
            $this->zip = $v;
            $this->modifiedColumns[OrdersTableMap::COL_ZIP] = true;
        }

        return $this;
    } // setZip()

    /**
     * Set the value of [address] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[OrdersTableMap::COL_ADDRESS] = true;
        }

        return $this;
    } // setAddress()

    /**
     * Set the value of [shipping_first_name] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingFirstName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_first_name !== $v) {
            $this->shipping_first_name = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_FIRST_NAME] = true;
        }

        return $this;
    } // setShippingFirstName()

    /**
     * Set the value of [shipping_last_name] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingLastName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_last_name !== $v) {
            $this->shipping_last_name = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_LAST_NAME] = true;
        }

        return $this;
    } // setShippingLastName()

    /**
     * Set the value of [shipping_mobile] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingMobile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_mobile !== $v) {
            $this->shipping_mobile = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_MOBILE] = true;
        }

        return $this;
    } // setShippingMobile()

    /**
     * Set the value of [shipping_email] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_email !== $v) {
            $this->shipping_email = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_EMAIL] = true;
        }

        return $this;
    } // setShippingEmail()

    /**
     * Set the value of [shipping_region] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingRegion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_region !== $v) {
            $this->shipping_region = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_REGION] = true;
        }

        return $this;
    } // setShippingRegion()

    /**
     * Set the value of [shipping_city] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingCity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_city !== $v) {
            $this->shipping_city = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_CITY] = true;
        }

        return $this;
    } // setShippingCity()

    /**
     * Set the value of [shipping_zip] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingZip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_zip !== $v) {
            $this->shipping_zip = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_ZIP] = true;
        }

        return $this;
    } // setShippingZip()

    /**
     * Set the value of [shipping_address] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_address !== $v) {
            $this->shipping_address = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_ADDRESS] = true;
        }

        return $this;
    } // setShippingAddress()

    /**
     * Set the value of [shipping_cost] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setShippingCost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->shipping_cost !== $v) {
            $this->shipping_cost = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SHIPPING_COST] = true;
        }

        return $this;
    } // setShippingCost()

    /**
     * Set the value of [seller_note] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setSellerNote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->seller_note !== $v) {
            $this->seller_note = $v;
            $this->modifiedColumns[OrdersTableMap::COL_SELLER_NOTE] = true;
        }

        return $this;
    } // setSellerNote()

    /**
     * Set the value of [status] column.
     *
     * @param string $v New value
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[OrdersTableMap::COL_STATUS] = true;
        }

        return $this;
    } // setStatus()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Propel\Model\Orders The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[OrdersTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : OrdersTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : OrdersTableMap::translateFieldName('UserId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->user_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : OrdersTableMap::translateFieldName('Note', TableMap::TYPE_PHPNAME, $indexType)];
            $this->note = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : OrdersTableMap::translateFieldName('FirstName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->first_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : OrdersTableMap::translateFieldName('LastName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->last_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : OrdersTableMap::translateFieldName('Mobile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mobile = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : OrdersTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : OrdersTableMap::translateFieldName('Region', TableMap::TYPE_PHPNAME, $indexType)];
            $this->region = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : OrdersTableMap::translateFieldName('City', TableMap::TYPE_PHPNAME, $indexType)];
            $this->city = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : OrdersTableMap::translateFieldName('Zip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->zip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : OrdersTableMap::translateFieldName('Address', TableMap::TYPE_PHPNAME, $indexType)];
            $this->address = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : OrdersTableMap::translateFieldName('ShippingFirstName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_first_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : OrdersTableMap::translateFieldName('ShippingLastName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_last_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : OrdersTableMap::translateFieldName('ShippingMobile', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_mobile = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : OrdersTableMap::translateFieldName('ShippingEmail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : OrdersTableMap::translateFieldName('ShippingRegion', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_region = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : OrdersTableMap::translateFieldName('ShippingCity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_city = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : OrdersTableMap::translateFieldName('ShippingZip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_zip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : OrdersTableMap::translateFieldName('ShippingAddress', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_address = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : OrdersTableMap::translateFieldName('ShippingCost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->shipping_cost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : OrdersTableMap::translateFieldName('SellerNote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->seller_note = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : OrdersTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : OrdersTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = OrdersTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Propel\\Model\\Orders'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(OrdersTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildOrdersQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Orders::setDeleted()
     * @see Orders::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(OrdersTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildOrdersQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(OrdersTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                OrdersTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[OrdersTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OrdersTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OrdersTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_USER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'user_id';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_NOTE)) {
            $modifiedColumns[':p' . $index++]  = 'note';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_FIRST_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'first_name';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_LAST_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'last_name';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_MOBILE)) {
            $modifiedColumns[':p' . $index++]  = 'mobile';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_REGION)) {
            $modifiedColumns[':p' . $index++]  = 'region';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_CITY)) {
            $modifiedColumns[':p' . $index++]  = 'city';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_ZIP)) {
            $modifiedColumns[':p' . $index++]  = 'zip';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'address';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_FIRST_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_first_name';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_LAST_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_last_name';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_MOBILE)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_mobile';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_email';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_REGION)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_region';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_CITY)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_city';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_ZIP)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_zip';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_address';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_COST)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_cost';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SELLER_NOTE)) {
            $modifiedColumns[':p' . $index++]  = 'seller_note';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(OrdersTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }

        $sql = sprintf(
            'INSERT INTO orders (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'user_id':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case 'note':
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                    case 'first_name':
                        $stmt->bindValue($identifier, $this->first_name, PDO::PARAM_STR);
                        break;
                    case 'last_name':
                        $stmt->bindValue($identifier, $this->last_name, PDO::PARAM_STR);
                        break;
                    case 'mobile':
                        $stmt->bindValue($identifier, $this->mobile, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'region':
                        $stmt->bindValue($identifier, $this->region, PDO::PARAM_STR);
                        break;
                    case 'city':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case 'zip':
                        $stmt->bindValue($identifier, $this->zip, PDO::PARAM_STR);
                        break;
                    case 'address':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case 'shipping_first_name':
                        $stmt->bindValue($identifier, $this->shipping_first_name, PDO::PARAM_STR);
                        break;
                    case 'shipping_last_name':
                        $stmt->bindValue($identifier, $this->shipping_last_name, PDO::PARAM_STR);
                        break;
                    case 'shipping_mobile':
                        $stmt->bindValue($identifier, $this->shipping_mobile, PDO::PARAM_STR);
                        break;
                    case 'shipping_email':
                        $stmt->bindValue($identifier, $this->shipping_email, PDO::PARAM_STR);
                        break;
                    case 'shipping_region':
                        $stmt->bindValue($identifier, $this->shipping_region, PDO::PARAM_STR);
                        break;
                    case 'shipping_city':
                        $stmt->bindValue($identifier, $this->shipping_city, PDO::PARAM_STR);
                        break;
                    case 'shipping_zip':
                        $stmt->bindValue($identifier, $this->shipping_zip, PDO::PARAM_STR);
                        break;
                    case 'shipping_address':
                        $stmt->bindValue($identifier, $this->shipping_address, PDO::PARAM_STR);
                        break;
                    case 'shipping_cost':
                        $stmt->bindValue($identifier, $this->shipping_cost, PDO::PARAM_STR);
                        break;
                    case 'seller_note':
                        $stmt->bindValue($identifier, $this->seller_note, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = OrdersTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getUserId();
                break;
            case 2:
                return $this->getNote();
                break;
            case 3:
                return $this->getFirstName();
                break;
            case 4:
                return $this->getLastName();
                break;
            case 5:
                return $this->getMobile();
                break;
            case 6:
                return $this->getEmail();
                break;
            case 7:
                return $this->getRegion();
                break;
            case 8:
                return $this->getCity();
                break;
            case 9:
                return $this->getZip();
                break;
            case 10:
                return $this->getAddress();
                break;
            case 11:
                return $this->getShippingFirstName();
                break;
            case 12:
                return $this->getShippingLastName();
                break;
            case 13:
                return $this->getShippingMobile();
                break;
            case 14:
                return $this->getShippingEmail();
                break;
            case 15:
                return $this->getShippingRegion();
                break;
            case 16:
                return $this->getShippingCity();
                break;
            case 17:
                return $this->getShippingZip();
                break;
            case 18:
                return $this->getShippingAddress();
                break;
            case 19:
                return $this->getShippingCost();
                break;
            case 20:
                return $this->getSellerNote();
                break;
            case 21:
                return $this->getStatus();
                break;
            case 22:
                return $this->getCreatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['Orders'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Orders'][$this->hashCode()] = true;
        $keys = OrdersTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserId(),
            $keys[2] => $this->getNote(),
            $keys[3] => $this->getFirstName(),
            $keys[4] => $this->getLastName(),
            $keys[5] => $this->getMobile(),
            $keys[6] => $this->getEmail(),
            $keys[7] => $this->getRegion(),
            $keys[8] => $this->getCity(),
            $keys[9] => $this->getZip(),
            $keys[10] => $this->getAddress(),
            $keys[11] => $this->getShippingFirstName(),
            $keys[12] => $this->getShippingLastName(),
            $keys[13] => $this->getShippingMobile(),
            $keys[14] => $this->getShippingEmail(),
            $keys[15] => $this->getShippingRegion(),
            $keys[16] => $this->getShippingCity(),
            $keys[17] => $this->getShippingZip(),
            $keys[18] => $this->getShippingAddress(),
            $keys[19] => $this->getShippingCost(),
            $keys[20] => $this->getSellerNote(),
            $keys[21] => $this->getStatus(),
            $keys[22] => $this->getCreatedAt(),
        );
        if ($result[$keys[22]] instanceof \DateTimeInterface) {
            $result[$keys[22]] = $result[$keys[22]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\Propel\Model\Orders
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = OrdersTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Propel\Model\Orders
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setUserId($value);
                break;
            case 2:
                $this->setNote($value);
                break;
            case 3:
                $this->setFirstName($value);
                break;
            case 4:
                $this->setLastName($value);
                break;
            case 5:
                $this->setMobile($value);
                break;
            case 6:
                $this->setEmail($value);
                break;
            case 7:
                $this->setRegion($value);
                break;
            case 8:
                $this->setCity($value);
                break;
            case 9:
                $this->setZip($value);
                break;
            case 10:
                $this->setAddress($value);
                break;
            case 11:
                $this->setShippingFirstName($value);
                break;
            case 12:
                $this->setShippingLastName($value);
                break;
            case 13:
                $this->setShippingMobile($value);
                break;
            case 14:
                $this->setShippingEmail($value);
                break;
            case 15:
                $this->setShippingRegion($value);
                break;
            case 16:
                $this->setShippingCity($value);
                break;
            case 17:
                $this->setShippingZip($value);
                break;
            case 18:
                $this->setShippingAddress($value);
                break;
            case 19:
                $this->setShippingCost($value);
                break;
            case 20:
                $this->setSellerNote($value);
                break;
            case 21:
                $this->setStatus($value);
                break;
            case 22:
                $this->setCreatedAt($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     $this|\Propel\Model\Orders
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = OrdersTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setUserId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setNote($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFirstName($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLastName($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setMobile($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setEmail($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRegion($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCity($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setZip($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setAddress($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setShippingFirstName($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setShippingLastName($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setShippingMobile($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setShippingEmail($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setShippingRegion($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setShippingCity($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setShippingZip($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setShippingAddress($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setShippingCost($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setSellerNote($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setStatus($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setCreatedAt($arr[$keys[22]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Propel\Model\Orders The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdersTableMap::DATABASE_NAME);

        if ($this->isColumnModified(OrdersTableMap::COL_ID)) {
            $criteria->add(OrdersTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_USER_ID)) {
            $criteria->add(OrdersTableMap::COL_USER_ID, $this->user_id);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_NOTE)) {
            $criteria->add(OrdersTableMap::COL_NOTE, $this->note);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_FIRST_NAME)) {
            $criteria->add(OrdersTableMap::COL_FIRST_NAME, $this->first_name);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_LAST_NAME)) {
            $criteria->add(OrdersTableMap::COL_LAST_NAME, $this->last_name);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_MOBILE)) {
            $criteria->add(OrdersTableMap::COL_MOBILE, $this->mobile);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_EMAIL)) {
            $criteria->add(OrdersTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_REGION)) {
            $criteria->add(OrdersTableMap::COL_REGION, $this->region);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_CITY)) {
            $criteria->add(OrdersTableMap::COL_CITY, $this->city);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_ZIP)) {
            $criteria->add(OrdersTableMap::COL_ZIP, $this->zip);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_ADDRESS)) {
            $criteria->add(OrdersTableMap::COL_ADDRESS, $this->address);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_FIRST_NAME)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_FIRST_NAME, $this->shipping_first_name);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_LAST_NAME)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_LAST_NAME, $this->shipping_last_name);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_MOBILE)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_MOBILE, $this->shipping_mobile);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_EMAIL)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_EMAIL, $this->shipping_email);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_REGION)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_REGION, $this->shipping_region);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_CITY)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_CITY, $this->shipping_city);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_ZIP)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_ZIP, $this->shipping_zip);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_ADDRESS)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_ADDRESS, $this->shipping_address);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SHIPPING_COST)) {
            $criteria->add(OrdersTableMap::COL_SHIPPING_COST, $this->shipping_cost);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_SELLER_NOTE)) {
            $criteria->add(OrdersTableMap::COL_SELLER_NOTE, $this->seller_note);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_STATUS)) {
            $criteria->add(OrdersTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(OrdersTableMap::COL_CREATED_AT)) {
            $criteria->add(OrdersTableMap::COL_CREATED_AT, $this->created_at);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildOrdersQuery::create();
        $criteria->add(OrdersTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Propel\Model\Orders (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserId($this->getUserId());
        $copyObj->setNote($this->getNote());
        $copyObj->setFirstName($this->getFirstName());
        $copyObj->setLastName($this->getLastName());
        $copyObj->setMobile($this->getMobile());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setRegion($this->getRegion());
        $copyObj->setCity($this->getCity());
        $copyObj->setZip($this->getZip());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setShippingFirstName($this->getShippingFirstName());
        $copyObj->setShippingLastName($this->getShippingLastName());
        $copyObj->setShippingMobile($this->getShippingMobile());
        $copyObj->setShippingEmail($this->getShippingEmail());
        $copyObj->setShippingRegion($this->getShippingRegion());
        $copyObj->setShippingCity($this->getShippingCity());
        $copyObj->setShippingZip($this->getShippingZip());
        $copyObj->setShippingAddress($this->getShippingAddress());
        $copyObj->setShippingCost($this->getShippingCost());
        $copyObj->setSellerNote($this->getSellerNote());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCreatedAt($this->getCreatedAt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Propel\Model\Orders Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id = null;
        $this->user_id = null;
        $this->note = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->mobile = null;
        $this->email = null;
        $this->region = null;
        $this->city = null;
        $this->zip = null;
        $this->address = null;
        $this->shipping_first_name = null;
        $this->shipping_last_name = null;
        $this->shipping_mobile = null;
        $this->shipping_email = null;
        $this->shipping_region = null;
        $this->shipping_city = null;
        $this->shipping_zip = null;
        $this->shipping_address = null;
        $this->shipping_cost = null;
        $this->seller_note = null;
        $this->status = null;
        $this->created_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OrdersTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
            }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
