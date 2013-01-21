<?php
namespace Odl\ActivityStreamBundle\Model;

class Property
{
    /**
     * Activity can have extra properties
     *
     * @var array
     */
    protected $properties;

    public function getProperty($name)
    {
        if (isset($this->properties[$name])) {
            return $this->properties[$name];
        }
    }

    public function setProperty($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function removeProperty($name)
    {
        unset($this->properties[$name]);
    }

    /**
     * @return the $properties
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param multitype: $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * Set field value
     *
     * Magic method for setting fields as properties of this document
     * object, by field name.
     *
     * If you supply NULL as the value the field will be removed
     * If you supply an array a multivalue field will be created.
     * In all cases any existing (multi)value will be overwritten.
     *
     * @param string $name
     * @param string|null $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->setProperty($name, $value);
    }

    /**
     * Get field value by name
     *
     * Magic access method for accessing fields as properties of this document
     * object, by field name.
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->getProperty($name);
    }

    /**
     * Unset field value
     *
     * Magic method for removing fields by unsetting object properties
     *
     * @param string $name
     * @return void
     */
    public function __unset($name)
    {
        $this->removeProperty($name);
    }
}
