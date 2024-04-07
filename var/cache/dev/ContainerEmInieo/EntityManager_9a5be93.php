<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getConnection', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getMetadataFactory', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getExpressionBuilder', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'beginTransaction', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getCache', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getCache();
    }

    public function transactional($func)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'transactional', array('func' => $func), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'wrapInTransaction', array('func' => $func), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'commit', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->commit();
    }

    public function rollback()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'rollback', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getClassMetadata', array('className' => $className), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'createQuery', array('dql' => $dql), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'createNamedQuery', array('name' => $name), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'createQueryBuilder', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'flush', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'clear', array('entityName' => $entityName), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->clear($entityName);
    }

    public function close()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'close', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->close();
    }

    public function persist($entity)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'persist', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'remove', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'refresh', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'detach', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'merge', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'contains', array('entity' => $entity), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getEventManager', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getConfiguration', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'isOpen', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getUnitOfWork', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getProxyFactory', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'initializeObject', array('obj' => $obj), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'getFilters', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'isFiltersStateClean', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, 'hasFilters', array(), $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        return $this->valueHolder684ba->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer19f62 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder684ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder684ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder684ba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer19f62 && ($this->initializer19f62->__invoke($valueHolder684ba, $this, '__get', ['name' => $name], $this->initializer19f62) || 1) && $this->valueHolder684ba = $valueHolder684ba;

        if (isset(self::$publicPropertiese098e[$name])) {
            return $this->valueHolder684ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
