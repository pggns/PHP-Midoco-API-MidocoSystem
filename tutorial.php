<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/MidocoSystemService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/MidocoSystemService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\MidocoSystem\ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getOrgUnit operation/method
 */
if ($get->getOrgUnit(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getChildrenForOrgUnit operation/method
 */
if ($get->getChildrenForOrgUnit(new \Pggns\MidocoApi\MidocoSystem\StructType\GetChildrenForOrgUnitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllowedRolesForCurrentUser operation/method
 */
if ($get->getAllowedRolesForCurrentUser(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAllowedRolesForCurrentUserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getApplicationsForCurrentRole operation/method
 */
if ($get->getApplicationsForCurrentRole(new \Pggns\MidocoApi\MidocoSystem\StructType\GetApplicationsForCurrentRoleRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgUnitsForUser operation/method
 */
if ($get->getOrgUnitsForUser(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsForUserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUser operation/method
 */
if ($get->getUser(new \Pggns\MidocoApi\MidocoSystem\StructType\GetUserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUserById operation/method
 */
if ($get->getUserById(new \Pggns\MidocoApi\MidocoSystem\StructType\GetUserByIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgUnitSequence operation/method
 */
if ($get->getOrgUnitSequence(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitSequenceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMfGroup operation/method
 */
if ($get->getMfGroup(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMfGroupRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMfs4Group operation/method
 */
if ($get->getMfs4Group(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMfs4GroupRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInexsoUrl operation/method
 */
if ($get->getInexsoUrl(new \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMfLocal operation/method
 */
if ($get->getMfLocal(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMfLocalRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnitName4UserSession operation/method
 */
if ($get->getUnitName4UserSession(new \Pggns\MidocoApi\MidocoSystem\StructType\GetUnitName4UserSessionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgUnitInfo operation/method
 */
if ($get->getOrgUnitInfo(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Change($options);
$change->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for changeUserPassword operation/method
 */
if ($change->changeUserPassword(new \Pggns\MidocoApi\MidocoSystem\StructType\ChangeUserPasswordRequest()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Is($options);
$is->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for isAppModuleAllowedForOrgunit operation/method
 */
if ($is->isAppModuleAllowedForOrgunit(new \Pggns\MidocoApi\MidocoSystem\StructType\IsAppModuleAllowedForOrgunitRequest()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for isInitializedFor2FaAuth operation/method
 */
if ($is->isInitializedFor2FaAuth(new \Pggns\MidocoApi\MidocoSystem\StructType\IsInitializedFor2FaRequest()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Send($options);
$send->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for sendEmail operation/method
 */
if ($send->sendEmail(new \Pggns\MidocoApi\MidocoSystem\StructType\SendEmailRequest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for send2FaAuthCode operation/method
 */
if ($send->send2FaAuthCode(new \Pggns\MidocoApi\MidocoSystem\StructType\Send2FaCodeRequest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Create($options);
$create->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for createUserSession operation/method
 */
if ($create->createUserSession(new \Pggns\MidocoApi\MidocoSystem\StructType\CreateUserSessionRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Terminate ServiceType
 */
$terminate = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Terminate($options);
$terminate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for terminateUserSession operation/method
 */
if ($terminate->terminateUserSession(new \Pggns\MidocoApi\MidocoSystem\StructType\TerminateUserSessionRequest()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\MidocoSystem\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listPrintSelects operation/method
 */
if ($list->listPrintSelects(new \Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
