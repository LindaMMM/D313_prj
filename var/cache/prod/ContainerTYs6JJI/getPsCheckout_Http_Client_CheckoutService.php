<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.http.client.checkout' shared service.

return $this->services['ps_checkout.http.client.checkout'] = new \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient(($this->services['ps_checkout.http.client'] ?? $this->load('getPsCheckout_Http_ClientService.php')));
