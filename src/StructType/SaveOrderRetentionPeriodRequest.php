<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRetentionPeriodRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderRetentionPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod = null;
    /**
     * Constructor method for SaveOrderRetentionPeriodRequest
     * @uses SaveOrderRetentionPeriodRequest::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod|null
     */
    public function getMidocoOrderRetentionPeriod(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrderRetentionPeriodRequest
     */
    public function setMidocoOrderRetentionPeriod(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
