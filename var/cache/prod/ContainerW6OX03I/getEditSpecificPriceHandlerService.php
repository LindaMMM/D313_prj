<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler\EditSpecificPriceHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\CommandHandler\\EditSpecificPriceHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler\EditSpecificPriceHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\Repository\\SpecificPriceRepository'] ?? $this->load('getSpecificPriceRepository2Service.php')));
