<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.psr7.argument_value_resolver.server_request' shared service.

$a = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->privates['sensio_framework_extra.psr7.argument_value_resolver.server_request'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentValueResolver\Psr7ServerRequestResolver(new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($a, $a, $a, $a));