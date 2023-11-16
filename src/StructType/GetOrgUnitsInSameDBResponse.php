<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitsInSameDBResponse StructType
 * @subpackage Structs
 */
class GetOrgUnitsInSameDBResponse extends AbstractStructBase
{
    /**
     * The MidocoSearchUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSearchUnit
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit[]
     */
    protected array $MidocoSearchUnit = [];
    /**
     * Constructor method for GetOrgUnitsInSameDBResponse
     * @uses GetOrgUnitsInSameDBResponse::setMidocoSearchUnit()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit[] $midocoSearchUnit
     */
    public function __construct(array $midocoSearchUnit = [])
    {
        $this
            ->setMidocoSearchUnit($midocoSearchUnit);
    }
    /**
     * Get MidocoSearchUnit value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit[]
     */
    public function getMidocoSearchUnit(): array
    {
        return $this->MidocoSearchUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSearchUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSearchUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSearchUnitForArrayConstraintsFromSetMidocoSearchUnit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitsInSameDBResponseMidocoSearchUnitItem) {
            // validation for constraint: itemType
            if (!$getOrgUnitsInSameDBResponseMidocoSearchUnitItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit) {
                $invalidValues[] = is_object($getOrgUnitsInSameDBResponseMidocoSearchUnitItem) ? get_class($getOrgUnitsInSameDBResponseMidocoSearchUnitItem) : sprintf('%s(%s)', gettype($getOrgUnitsInSameDBResponseMidocoSearchUnitItem), var_export($getOrgUnitsInSameDBResponseMidocoSearchUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSearchUnit property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSearchUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit[] $midocoSearchUnit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBResponse
     */
    public function setMidocoSearchUnit(array $midocoSearchUnit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSearchUnitArrayErrorMessage = self::validateMidocoSearchUnitForArrayConstraintsFromSetMidocoSearchUnit($midocoSearchUnit))) {
            throw new InvalidArgumentException($midocoSearchUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoSearchUnit = $midocoSearchUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoSearchUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBResponse
     */
    public function addToMidocoSearchUnit(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoSearchUnit property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoSearchUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSearchUnit[] = $item;
        
        return $this;
    }
}
