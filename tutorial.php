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
 * Sample call for getPrintRemarkDestination operation/method
 */
if ($get->getPrintRemarkDestination(new \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintRemarkDestinationRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedRemarksDestination operation/method
 */
if ($get->getAssignedRemarksDestination(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAssignedRemarksDestinationRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailablePrintTypesDestination operation/method
 */
if ($get->getAvailablePrintTypesDestination(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintTypesDestinationRequest()) !== false) {
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
 * Sample call for getAvailablePrintQueues4Orgunit operation/method
 */
if ($get->getAvailablePrintQueues4Orgunit(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintQueues4OrgunitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailablePrintQueues4User operation/method
 */
if ($get->getAvailablePrintQueues4User(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintQueues4UserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUsers4PrintQueue operation/method
 */
if ($get->getUsers4PrintQueue(new \Pggns\MidocoApi\MidocoSystem\StructType\GetUsers4PrintQueueRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgunits4PrintQueue operation/method
 */
if ($get->getOrgunits4PrintQueue(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunits4PrintQueueRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintJobs4PrintQueue operation/method
 */
if ($get->getPrintJobs4PrintQueue(new \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintjobs4PrintQueueRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintQueue4User operation/method
 */
if ($get->getPrintQueue4User(new \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintQueue4UserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintQueue4Orgunit operation/method
 */
if ($get->getPrintQueue4Orgunit(new \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintQueue4OrgunitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMfClassName operation/method
 */
if ($get->getMfClassName(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMfClassNameRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAttributeDefinition operation/method
 */
if ($get->getAttributeDefinition(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMidocoAttributeDefinitionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgunitForCrsAgency operation/method
 */
if ($get->getOrgunitForCrsAgency(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitForCrsAgencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoCredentialsForUserSession operation/method
 */
if ($get->getMidocoCredentialsForUserSession(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMidocoCredentialsForUserSessionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoGUIAttributeDefinition operation/method
 */
if ($get->getMidocoGUIAttributeDefinition(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMidocoGuiAttributeDefinitionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoOrgUnitGUIAttribute operation/method
 */
if ($get->getMidocoOrgUnitGUIAttribute(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMidocoOrgUnitGuiAttributeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintJob operation/method
 */
if ($get->getPrintJob(new \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintjobRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoOrgTemplateText operation/method
 */
if ($get->getMidocoOrgTemplateText(new \Pggns\MidocoApi\MidocoSystem\StructType\GetMidocoOrgTemplateTextRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgTemplateTextFooter operation/method
 */
if ($get->getOrgTemplateTextFooter(new \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgTemplateTextFooterRequest()) !== false) {
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
 * Sample call for getSessionStatus operation/method
 */
if ($get->getSessionStatus(new \Pggns\MidocoApi\MidocoSystem\StructType\GetSessionStatusRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrsExpedientForUserId operation/method
 */
if ($get->getCrsExpedientForUserId(new \Pggns\MidocoApi\MidocoSystem\StructType\GetCrsExpedientForUserIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAssignedSequenceRanges operation/method
 */
if ($get->getAssignedSequenceRanges(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAssignedSequenceRangesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUserHistory operation/method
 */
if ($get->getUserHistory(new \Pggns\MidocoApi\MidocoSystem\StructType\GetUserHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTssClient operation/method
 */
if ($get->getTssClient(new \Pggns\MidocoApi\MidocoSystem\StructType\GetTssClientRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTssClient4Unit operation/method
 */
if ($get->getTssClient4Unit(new \Pggns\MidocoApi\MidocoSystem\StructType\GetTssClient4UnitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllTssClients4Unit operation/method
 */
if ($get->getAllTssClients4Unit(new \Pggns\MidocoApi\MidocoSystem\StructType\GetAllTssClients4UnitRequest()) !== false) {
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
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for savePrintRemarkDestination operation/method
 */
if ($save->savePrintRemarkDestination(new \Pggns\MidocoApi\MidocoSystem\StructType\SavePrintRemarkDestinationRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePrintQueue operation/method
 */
if ($save->savePrintQueue(new \Pggns\MidocoApi\MidocoSystem\StructType\SavePrintQueueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMfLocal operation/method
 */
if ($save->saveMfLocal(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMfLocalRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAttributeDefinition operation/method
 */
if ($save->saveAttributeDefinition(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoAttributeDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAttributeLocalization operation/method
 */
if ($save->saveAttributeLocalization(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoAttributeLocalizationRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAttributeChoiceValue operation/method
 */
if ($save->saveAttributeChoiceValue(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoAttributeChoiceValueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoGuiAttributeDefinition operation/method
 */
if ($save->saveMidocoGuiAttributeDefinition(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoGuiAttributeDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoOrgUnitGuiAttribute operation/method
 */
if ($save->saveMidocoOrgUnitGuiAttribute(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoOrgUnitGuiAttributeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoOrgTemplateText operation/method
 */
if ($save->saveMidocoOrgTemplateText(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoOrgTemplateTextRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveUserHistory operation/method
 */
if ($save->saveUserHistory(new \Pggns\MidocoApi\MidocoSystem\StructType\SaveUserHistoryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deletePrintRemarkDestination operation/method
 */
if ($delete->deletePrintRemarkDestination(new \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintRemarkDestinationRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePrintQueue operation/method
 */
if ($delete->deletePrintQueue(new \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintQueueRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMfLocal operation/method
 */
if ($delete->deleteMfLocal(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMfLocalRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAttributeDefinition operation/method
 */
if ($delete->deleteAttributeDefinition(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAttributeLocalization operation/method
 */
if ($delete->deleteAttributeLocalization(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeLocalizationRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAttributeChoiceValue operation/method
 */
if ($delete->deleteAttributeChoiceValue(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeChoiceValueRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoGuiAttributeDefinition operation/method
 */
if ($delete->deleteMidocoGuiAttributeDefinition(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoGuiAttributeDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoOrgUnitGuiAttribute operation/method
 */
if ($delete->deleteMidocoOrgUnitGuiAttribute(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgUnitGuiAttributeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePrintJob operation/method
 */
if ($delete->deletePrintJob(new \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintjobRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoOrgTemplateText operation/method
 */
if ($delete->deleteMidocoOrgTemplateText(new \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgTemplateTextRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Revoke ServiceType
 */
$revoke = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Revoke($options);
$revoke->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for revokePrintsFromRemark operation/method
 */
if ($revoke->revokePrintsFromRemark(new \Pggns\MidocoApi\MidocoSystem\StructType\RevokePrintsFromRemarkRequest()) !== false) {
    print_r($revoke->getResult());
} else {
    print_r($revoke->getLastError());
}
/**
 * Samples for Grant ServiceType
 */
$grant = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Grant($options);
$grant->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for grantPrintsToRemark operation/method
 */
if ($grant->grantPrintsToRemark(new \Pggns\MidocoApi\MidocoSystem\StructType\GrantPrintsToRemarkRequest()) !== false) {
    print_r($grant->getResult());
} else {
    print_r($grant->getLastError());
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
 * Samples for Release ServiceType
 */
$release = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Release($options);
$release->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for releasePrintQueue operation/method
 */
if ($release->releasePrintQueue(new \Pggns\MidocoApi\MidocoSystem\StructType\ReleasePrintQueueRequest()) !== false) {
    print_r($release->getResult());
} else {
    print_r($release->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchAttributeLocalization operation/method
 */
if ($search->searchAttributeLocalization(new \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeLocalizationRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAttributeChoiceValue operation/method
 */
if ($search->searchAttributeChoiceValue(new \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeChoiceValueRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
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
 * Sample call for createSequenceRangeFromPool operation/method
 */
if ($create->createSequenceRangeFromPool(new \Pggns\MidocoApi\MidocoSystem\StructType\CreateSequenceRangeFromPoolRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createTssClient operation/method
 */
if ($create->createTssClient(new \Pggns\MidocoApi\MidocoSystem\StructType\CreateTssClientRequest()) !== false) {
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
 * Samples for Increment ServiceType
 */
$increment = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Increment($options);
$increment->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for incrementSequence operation/method
 */
if ($increment->incrementSequence(new \Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceRequest()) !== false) {
    print_r($increment->getResult());
} else {
    print_r($increment->getLastError());
}
/**
 * Samples for Push ServiceType
 */
$push = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Push($options);
$push->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for pushBackSequenceValue operation/method
 */
if ($push->pushBackSequenceValue(new \Pggns\MidocoApi\MidocoSystem\StructType\PushBackSequenceValueRequest()) !== false) {
    print_r($push->getResult());
} else {
    print_r($push->getLastError());
}
/**
 * Samples for Recompile ServiceType
 */
$recompile = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Recompile($options);
$recompile->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for recompileRulesets operation/method
 */
if ($recompile->recompileRulesets(new \Pggns\MidocoApi\MidocoSystem\StructType\RecompileRulesetsRequest()) !== false) {
    print_r($recompile->getResult());
} else {
    print_r($recompile->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\MidocoSystem\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listMidocoOrgTemplateText operation/method
 */
if ($list->listMidocoOrgTemplateText(new \Pggns\MidocoApi\MidocoSystem\StructType\ListMidocoOrgTemplateTextRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listPrintSelects operation/method
 */
if ($list->listPrintSelects(new \Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listTssClient operation/method
 */
if ($list->listTssClient(new \Pggns\MidocoApi\MidocoSystem\StructType\ListTssClientRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Compare ServiceType
 */
$compare = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Compare($options);
$compare->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for compareDatastoreEntry operation/method
 */
if ($compare->compareDatastoreEntry(new \Pggns\MidocoApi\MidocoSystem\StructType\CompareDatastoreEntryRequest()) !== false) {
    print_r($compare->getResult());
} else {
    print_r($compare->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Cancel($options);
$cancel->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for cancelLongOperation operation/method
 */
if ($cancel->cancelLongOperation(new \Pggns\MidocoApi\MidocoSystem\StructType\CancelLongOperationRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Sample call for cancelTssClient operation/method
 */
if ($cancel->cancelTssClient(new \Pggns\MidocoApi\MidocoSystem\StructType\CancelTssClientRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Modify ServiceType
 */
$modify = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Modify($options);
$modify->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for modifyTssClient operation/method
 */
if ($modify->modifyTssClient(new \Pggns\MidocoApi\MidocoSystem\StructType\ModifyTssClientRequest()) !== false) {
    print_r($modify->getResult());
} else {
    print_r($modify->getLastError());
}
/**
 * Samples for Refresh ServiceType
 */
$refresh = new \Pggns\MidocoApi\MidocoSystem\ServiceType\Refresh($options);
$refresh->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for refreshTssClients operation/method
 */
if ($refresh->refreshTssClients(new \Pggns\MidocoApi\MidocoSystem\StructType\RefreshTssClientStateRequest()) !== false) {
    print_r($refresh->getResult());
} else {
    print_r($refresh->getLastError());
}
