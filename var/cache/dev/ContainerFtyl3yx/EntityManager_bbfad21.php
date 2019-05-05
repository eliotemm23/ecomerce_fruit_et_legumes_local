<?php

class EntityManager_bbfad21 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderfd59e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeree362 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15ce3 = [
        
    ];

    public function getConnection()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getConnection', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getMetadataFactory', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getExpressionBuilder', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'beginTransaction', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getCache', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getCache();
    }

    public function transactional($func)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'transactional', array('func' => $func), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->transactional($func);
    }

    public function commit()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'commit', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->commit();
    }

    public function rollback()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'rollback', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getClassMetadata', array('className' => $className), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'createQuery', array('dql' => $dql), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'createNamedQuery', array('name' => $name), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'createQueryBuilder', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'flush', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'clear', array('entityName' => $entityName), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->clear($entityName);
    }

    public function close()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'close', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->close();
    }

    public function persist($entity)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'persist', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'remove', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'refresh', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'detach', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'merge', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getRepository', array('entityName' => $entityName), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'contains', array('entity' => $entity), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getEventManager', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getConfiguration', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'isOpen', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getUnitOfWork', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getProxyFactory', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'initializeObject', array('obj' => $obj), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'getFilters', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'isFiltersStateClean', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'hasFilters', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeree362 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd59e) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd59e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd59e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, '__get', ['name' => $name], $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        if (isset(self::$publicProperties15ce3[$name])) {
            return $this->valueHolderfd59e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd59e;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderfd59e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd59e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderfd59e;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, '__isset', array('name' => $name), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd59e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfd59e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, '__unset', array('name' => $name), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd59e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfd59e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, '__clone', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        $this->valueHolderfd59e = clone $this->valueHolderfd59e;
    }

    public function __sleep()
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, '__sleep', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return array('valueHolderfd59e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializeree362 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializeree362;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'initializeProxy', array(), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd59e;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderfd59e;
    }


}
