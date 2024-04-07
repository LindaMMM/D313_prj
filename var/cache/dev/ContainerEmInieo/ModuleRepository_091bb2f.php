<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder684ba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer19f62 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese098e = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getList', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getInstalledModules', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getMustBeConfiguredModules', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getUpgradableModules', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'setActionUrls', array('collection' => $collection), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer19f62 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder684ba) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder684ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder684ba->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__get', ['name' => $name], $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        if (isset(self::$publicPropertiese098e[$name])) {
            return $this->valueHolder684ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder684ba;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder684ba;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder684ba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder684ba;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__isset', array('name' => $name), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder684ba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder684ba;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__unset', array('name' => $name), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder684ba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder684ba;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__clone', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        $this->valueHolder684ba = clone $this->valueHolder684ba;
    }

    public function __sleep()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__sleep', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return array('valueHolder684ba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer19f62 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer19f62;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'initializeProxy', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder684ba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder684ba;
    }
}
