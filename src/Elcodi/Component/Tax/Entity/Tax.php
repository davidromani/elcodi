<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Component\Tax\Entity;

use Elcodi\Component\Core\Entity\Traits\EnabledTrait;
use Elcodi\Component\Tax\Entity\Interfaces\TaxGroupInterface;
use Elcodi\Component\Tax\Entity\Interfaces\TaxInterface;

/**
 * Class Tax
 */
class Tax implements TaxInterface
{
    use EnabledTrait;

    /**
     * @var integer
     *
     * Identifier
     */
    protected $id;

    /**
     * @var string
     *
     * Tax name
     */
    protected $name;

    /**
     * @var string
     *
     * Tax description
     */
    protected $description;

    /**
     * @var float
     *
     * Tax percent value
     */
    protected $value;

    /**
     * @var TaxGroupInterface
     *
     * Tax Group
     */
    protected $taxGroup;

    /**
     * Get Id
     *
     * @return int Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets Id
     *
     * @param int $id Id
     *
     * @return $this Self object
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets Tax name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets tax name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Tax description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets Tax description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Sets Tax value in percentage
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Gets Tax value in percentage
     *
     * @param float $value
     *
     * @return $this;
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get TaxGroup
     *
     * @return TaxGroupInterface TaxGroup
     */
    public function getTaxGroup()
    {
        return $this->taxGroup;
    }

    /**
     * Sets TaxGroup
     *
     * @param TaxGroupInterface $taxGroup TaxGroup
     *
     * @return $this Self object
     */
    public function setTaxGroup($taxGroup)
    {
        $this->taxGroup = $taxGroup;

        return $this;
    }

    /**
     * Returns the tax name
     *
     * @return string
     */
    public function __toString()
    {
        return (string)$this->name;
    }
}
