<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.paypal.order.translations' shared service.

return $this->services['ps_checkout.paypal.order.translations'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider(($this->services['ps_checkout.translations.translations'] ?? $this->load('getPsCheckout_Translations_TranslationsService.php')), ($this->services['ps_checkout.funding_source.translation'] ?? $this->load('getPsCheckout_FundingSource_TranslationService.php')));
