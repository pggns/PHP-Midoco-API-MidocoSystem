<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\MidocoSystem\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitRequest $paramGetOrgUnitRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO|bool
     */
    public function getOrgUnit(\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitRequest $paramGetOrgUnitRequest)
    {
        try {
            $this->setResult($resultGetOrgUnit = $this->getSoapClient()->__soapCall('getOrgUnit', [
                $paramGetOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getChildrenForOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetChildrenForOrgUnitRequest $paramGetChildrenForOrgUnitRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetChildrenForOrgUnitResponse|bool
     */
    public function getChildrenForOrgUnit(\Pggns\MidocoApi\MidocoSystem\StructType\GetChildrenForOrgUnitRequest $paramGetChildrenForOrgUnitRequest)
    {
        try {
            $this->setResult($resultGetChildrenForOrgUnit = $this->getSoapClient()->__soapCall('getChildrenForOrgUnit', [
                $paramGetChildrenForOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetChildrenForOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllowedRolesForCurrentUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetAllowedRolesForCurrentUserRequest $paramGetAllowedRolesForCurrentUserRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAllowedRolesForCurrentUserResponse|bool
     */
    public function getAllowedRolesForCurrentUser(\Pggns\MidocoApi\MidocoSystem\StructType\GetAllowedRolesForCurrentUserRequest $paramGetAllowedRolesForCurrentUserRequest)
    {
        try {
            $this->setResult($resultGetAllowedRolesForCurrentUser = $this->getSoapClient()->__soapCall('getAllowedRolesForCurrentUser', [
                $paramGetAllowedRolesForCurrentUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllowedRolesForCurrentUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getApplicationsForCurrentRole
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleRequest $paramGetApplicationsForCurrentRoleRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleResponse|bool
     */
    public function getApplicationsForCurrentRole(\Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleRequest $paramGetApplicationsForCurrentRoleRequest)
    {
        try {
            $this->setResult($resultGetApplicationsForCurrentRole = $this->getSoapClient()->__soapCall('getApplicationsForCurrentRole', [
                $paramGetApplicationsForCurrentRoleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApplicationsForCurrentRole;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitsForUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsForUserRequest $paramGetOrgUnitsForUserRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsForUserResponse|bool
     */
    public function getOrgUnitsForUser(\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsForUserRequest $paramGetOrgUnitsForUserRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitsForUser = $this->getSoapClient()->__soapCall('getOrgUnitsForUser', [
                $paramGetOrgUnitsForUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitsForUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetUserRequest $paramGetUserRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserDTO|bool
     */
    public function getUser(\Pggns\MidocoApi\MidocoSystem\StructType\GetUserRequest $paramGetUserRequest)
    {
        try {
            $this->setResult($resultGetUser = $this->getSoapClient()->__soapCall('getUser', [
                $paramGetUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetUserByIdRequest $paramGetUserByIdRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserDTO|bool
     */
    public function getUserById(\Pggns\MidocoApi\MidocoSystem\StructType\GetUserByIdRequest $paramGetUserByIdRequest)
    {
        try {
            $this->setResult($resultGetUserById = $this->getSoapClient()->__soapCall('getUserById', [
                $paramGetUserByIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitSequence
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitSequenceRequest $paramGetOrgUnitSequenceRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitSequenceResponse|bool
     */
    public function getOrgUnitSequence(\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitSequenceRequest $paramGetOrgUnitSequenceRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitSequence = $this->getSoapClient()->__soapCall('getOrgUnitSequence', [
                $paramGetOrgUnitSequenceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitSequence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetMfGroupRequest $paramGetMfGroupRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetMfGroupResponse|bool
     */
    public function getMfGroup(\Pggns\MidocoApi\MidocoSystem\StructType\GetMfGroupRequest $paramGetMfGroupRequest)
    {
        try {
            $this->setResult($resultGetMfGroup = $this->getSoapClient()->__soapCall('getMfGroup', [
                $paramGetMfGroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfs4Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetMfs4GroupRequest $paramGetMfs4GroupRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetMfs4GroupResponse|bool
     */
    public function getMfs4Group(\Pggns\MidocoApi\MidocoSystem\StructType\GetMfs4GroupRequest $paramGetMfs4GroupRequest)
    {
        try {
            $this->setResult($resultGetMfs4Group = $this->getSoapClient()->__soapCall('getMfs4Group', [
                $paramGetMfs4GroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfs4Group;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInexsoUrl
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest $paramGetInexsoUrlRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlResponse|bool
     */
    public function getInexsoUrl(\Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest $paramGetInexsoUrlRequest)
    {
        try {
            $this->setResult($resultGetInexsoUrl = $this->getSoapClient()->__soapCall('getInexsoUrl', [
                $paramGetInexsoUrlRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInexsoUrl;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetMfLocalRequest $paramGetMfLocalRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetMfLocalResponse|bool
     */
    public function getMfLocal(\Pggns\MidocoApi\MidocoSystem\StructType\GetMfLocalRequest $paramGetMfLocalRequest)
    {
        try {
            $this->setResult($resultGetMfLocal = $this->getSoapClient()->__soapCall('getMfLocal', [
                $paramGetMfLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitName4UserSession
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetUnitName4UserSessionRequest $paramGetUnitName4UserSessionRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUnitName4UserSessionResponse|bool
     */
    public function getUnitName4UserSession(\Pggns\MidocoApi\MidocoSystem\StructType\GetUnitName4UserSessionRequest $paramGetUnitName4UserSessionRequest)
    {
        try {
            $this->setResult($resultGetUnitName4UserSession = $this->getSoapClient()->__soapCall('getUnitName4UserSession', [
                $paramGetUnitName4UserSessionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnitName4UserSession;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoRequest $paramGetOrgUnitInfoRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoResponse|bool
     */
    public function getOrgUnitInfo(\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoRequest $paramGetOrgUnitInfoRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitInfo = $this->getSoapClient()->__soapCall('getOrgUnitInfo', [
                $paramGetOrgUnitInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAllowedRolesForCurrentUserResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetChildrenForOrgUnitResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetMfGroupResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetMfLocalResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetMfs4GroupResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitSequenceResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsForUserResponse|\Pggns\MidocoApi\MidocoSystem\StructType\GetUnitName4UserSessionResponse|\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO|\Pggns\MidocoApi\MidocoSystem\StructType\UserDTO
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
