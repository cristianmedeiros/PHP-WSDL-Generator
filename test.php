<?php
$wsdl = 'http://localhost/ws/service.php?class=contactManager&wsdl';
$client = new SoapClient($wsdl, array('soap_version'   => SOAP_1_2));
var_dump($client);
