<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDN9ukSojg4+YeY'."\n".'7fGD4I6WL7mqllcowzvAiz7lRsfVzfmVWxjGRUS1ahA9JT+eyuO/o6MduLYrHtXn'."\n".'4djYnXDfZ4Ny1g9JD4Vh5/D+5u18tpf0Km3bcbsozONYz4nEds3ErAtDGaZEOyXT'."\n".'8Tb5tnYswo1QHZ4OOdgz8PvtkC+qgr0OJhKOSz5BGDdsHcNIdMeXl3FIrVKoqmPF'."\n".'NhLDYe8sZOfNMBclC6Epi3ZOrvNZalFYjzTFuhzLtGky50bqaRREe1tNS/yCWUnD'."\n".'tTyVIdAba4XU1khi2w3WoWWMz1IfS1qReDA9LKX9QghHv6Bjgpcru3tQ7f00EIqQ'."\n".'7GYO9PINAgMBAAECggEAGkWF6k4N3NqbXLrxJRC2L1sMFEHUAUuR6hf44Fb8c32v'."\n".'+ciiatv4DSnnw1zmdhNMJKwzSL3AYtSulULeHZdLh/uUrUe3sGqN6XSj7We4YEGM'."\n".'NWVaGPUzWdt0nmXunURIL++ACkGRzz86LoQkroqDHWd9jfwRJqBjPxDcmatcISQM'."\n".'U1p7YxYhrOvnIE/Woux1EoYOTDZ9Zb7lOPhBsHO2xQViawW/gu0YzA/BX+RUggrZ'."\n".'0XXdwF2clfOfemRhwIo2rVgCkWaGZwnp91SaJzV7PrF4fWUXx9vWVQ+BoUW5iGW4'."\n".'nT/CeSZ29e6i0U6UJtErYaK1Wifqkmt9+vpShNRhowKBgQD1SssdN0UdQqLtKQzG'."\n".'hy3RrYw7etxK3K4zM//ERD2Ra/DMKyiUpe1vR+1/AgukMKl37QwC5CqtdOjqW4o1'."\n".'C+C4UCQgs33VTvUcgAod6aaGC/xCmPYeu5Xte4Z4mhacLU6yHB2Cl3XEHOeCclxj'."\n".'wg80VaB8pA0Gzb6LZk+8QhEEVwKBgQDW9J6hMucNj8AmCu8Wm9obuE6G31MWJvWn'."\n".'Cilg5SsYv8KBwD/+kE9W2tEj8cVOA8OYKpWT9k/oQV38nOgsl0mO8P8757G1qTEI'."\n".'6/HBEujVCo8PVKHqFGzTCKfKFvQ4BCtzbyQ0/f1QUw1fqaUIjtorPqcJvBNFPuu3'."\n".'VtLSV3deOwKBgQC1kD00TPrto6txnJcGRH0X3TwVsuVozFxtLio9nr1r7Nf6aF/L'."\n".'V96eJkGXZ24yhIqMaHwhj74/UnAtOMDebwJRq5ByXCniQGWSSPw0FATc5/Y7XXmg'."\n".'Wf2qIWrxziy6QZcko0b8qRvUpAiBOCFG/he/BzqZx9yUkqpeCMcwdD6gVQKBgQCE'."\n".'umlU2gyHeDLKisfU6wlDQovihfVU4Vuf+AtS1E7HKmkdGyuosUz8MYMgMcKGCJb2'."\n".'15yiz13J6MrzF6PZHNWD2NWRFODLbhxkCOSvNlDkc2+gpL6Rvmjv6hFJHOFR0WlP'."\n".'DtqJiienOJEyd5r67NJUD4yu2x3/DPoZrBfjX7TKTwKBgQDi02z6cQITOu7XBow4'."\n".'ruyUDMRI/NX2xhhH6FNUGljbBkJWewXmbGH68GGMHM6Wb/BSAAr9pv76tP1qvASo'."\n".'9H0XXdaKEgTkF/fJcTQ4sfvbXmQy9sqre9bCoCnFrlXwbJFbtmJIU3xoj24x3dRR'."\n".'eGR6mxKXYl7idOLXCchaW8cfXg=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def0000060ed2a0dd1ec332e2281af2736325f7f01cbe4db48e7e2543936c2ee30e119e33119ecc978827f13ebddb97d747035c3c7f9373e9baea3e9d113cdc944839d27');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
