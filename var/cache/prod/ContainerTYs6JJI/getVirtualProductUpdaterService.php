<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update\VirtualProductUpdater' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Update\\VirtualProductUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update\VirtualProductUpdater(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\File\\Uploader\\VirtualProductFileUploader'] ?? $this->load('getVirtualProductFileUploaderService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Repository\\VirtualProductFileRepository'] ?? $this->load('getVirtualProductFileRepositoryService.php')));
