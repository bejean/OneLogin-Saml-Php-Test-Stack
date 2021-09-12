<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
    'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
    'SingleLogoutService' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
);

$metadata['https://localhost/php-saml/test-simpleSamlPhpIdp/metadata.php'] = array(
    'AssertionConsumerService' => 'https://localhost/php-saml/test-simpleSamlPhpIdp/index.php?acs',
    'SingleLogoutService' => 'https://localhost/php-saml/test-simpleSamlPhpIdp/index.php?sls',
);
