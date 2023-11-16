<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSequenceRangesResponse StructType
 * @subpackage Structs
 */
class GetAssignedSequenceRangesResponse extends AbstractStructBase
{
    /**
     * The MidocoSequenceRange
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSequenceRange
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[]
     */
    protected array $MidocoSequenceRange = [];
    /**
     * Constructor method for GetAssignedSequenceRangesResponse
     * @uses GetAssignedSequenceRangesResponse::setMidocoSequenceRange()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[] $midocoSequenceRange
     */
    public function __construct(array $midocoSequenceRange = [])
    {
        $this
            ->setMidocoSequenceRange($midocoSequenceRange);
    }
    /**
     * Get MidocoSequenceRange value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[]
     */
    public function getMidocoSequenceRange(): array
    {
        return $this->MidocoSequenceRange;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSequenceRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSequenceRange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSequenceRangeForArrayConstraintsFromSetMidocoSequenceRange(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedSequenceRangesResponseMidocoSequenceRangeItem) {
            // validation for constraint: itemType
            if (!$getAssignedSequenceRangesResponseMidocoSequenceRangeItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO) {
                $invalidValues[] = is_object($getAssignedSequenceRangesResponseMidocoSequenceRangeItem) ? get_class($getAssignedSequenceRangesResponseMidocoSequenceRangeItem) : sprintf('%s(%s)', gettype($getAssignedSequenceRangesResponseMidocoSequenceRangeItem), var_export($getAssignedSequenceRangesResponseMidocoSequenceRangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSequenceRange property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSequenceRange value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO[] $midocoSequenceRange
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAssignedSequenceRangesResponse
     */
    public function setMidocoSequenceRange(array $midocoSequenceRange = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSequenceRangeArrayErrorMessage = self::validateMidocoSequenceRangeForArrayConstraintsFromSetMidocoSequenceRange($midocoSequenceRange))) {
            throw new InvalidArgumentException($midocoSequenceRangeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSequenceRange = $midocoSequenceRange;
        
        return $this;
    }
    /**
     * Add item to MidocoSequenceRange value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAssignedSequenceRangesResponse
     */
    public function addToMidocoSequenceRange(\Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSequenceRange property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\SequencerangeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSequenceRange[] = $item;
        
        return $this;
    }
}
