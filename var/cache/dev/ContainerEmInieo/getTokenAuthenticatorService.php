<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Security\TokenAuthenticator' shared service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Security\\TokenAuthenticator'] = new \PrestaShop\PrestaShop\Core\Security\TokenAuthenticator(new \PrestaShopBundle\Security\OAuth2\ResourceServer(new \League\OAuth2\Server\ResourceServer(($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \League\OAuth2\Server\CryptKey('-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzfbpEqI4OPmHmO3xg+CO'."\n".'li+5qpZXKMM7wIs+5UbH1c35lVsYxkVEtWoQPSU/nsrjv6OjHbi2Kx7V5+HY2J1w'."\n".'32eDctYPSQ+FYefw/ubtfLaX9Cpt23G7KMzjWM+JxHbNxKwLQxmmRDsl0/E2+bZ2'."\n".'LMKNUB2eDjnYM/D77ZAvqoK9DiYSjks+QRg3bB3DSHTHl5dxSK1SqKpjxTYSw2Hv'."\n".'LGTnzTAXJQuhKYt2Tq7zWWpRWI80xbocy7RpMudG6mkURHtbTUv8gllJw7U8lSHQ'."\n".'G2uF1NZIYtsN1qFljM9SH0takXgwPSyl/UIIR7+gY4KXK7t7UO39NBCKkOxmDvTy'."\n".'DQIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'')), ($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])))), ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')));
