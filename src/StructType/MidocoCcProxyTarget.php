<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcProxyTarget StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCcProxyTarget extends CcproxyTargetDTO
{
    /**
     * The MidocoCcProxyHandler
     * Meta information extracted from the WSDL
     * - ref: MidocoCcProxyHandler
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO $MidocoCcProxyHandler = null;
    /**
     * Constructor method for MidocoCcProxyTarget
     * @uses MidocoCcProxyTarget::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO $midocoCcProxyHandler = null)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO|null
     */
    public function getMidocoCcProxyHandler(): ?\Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCcProxyTarget
     */
    public function setMidocoCcProxyHandler(?\Pggns\MidocoApi\MidocoSystem\StructType\CcproxyHandlerDTO $midocoCcProxyHandler = null): self
    {
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
}
