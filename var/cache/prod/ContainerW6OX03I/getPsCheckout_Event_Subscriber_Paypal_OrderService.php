<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.event.subscriber.paypal.order' shared service.

return $this->services['ps_checkout.event.subscriber.paypal.order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber(($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php')), ($this->services['ps_checkout.repository.pscheckoutcart'] ?? $this->load('getPsCheckout_Repository_PscheckoutcartService.php')), ($this->services['ps_checkout.cache.paypal.order'] ?? $this->load('getPsCheckout_Cache_Paypal_OrderService.php')), ($this->services['ps_checkout.checkout.checker'] ?? $this->load('getPsCheckout_Checkout_CheckerService.php')), ($this->services['ps_checkout.paypal.order.service.check_transition_paypal_order_status'] ?? ($this->services['ps_checkout.paypal.order.service.check_transition_paypal_order_status'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService())), ($this->services['ps_checkout.order.state.service.order_state_mapper'] ?? $this->load('getPsCheckout_Order_State_Service_OrderStateMapperService.php')));