<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_edition_basic.ps_accounts.facade' shared service.

return $this->services['ps_edition_basic.ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['ps_edition_basic.ps_accounts.installer'] ?? ($this->services['ps_edition_basic.ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.2.5'))));
