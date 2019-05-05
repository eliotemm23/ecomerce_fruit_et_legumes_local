<?php

class Paginator_5216356 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->setDefaultPaginatorOptions($options);
    }

    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->paginate($target, $page, $limit, $options);
    }

    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->subscribe($subscriber);
    }

    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializeree362 && ($this->initializeree362->__invoke($valueHolderfd59e, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializeree362) || 1) && $this->valueHolderfd59e = $valueHolderfd59e;

        return $this->valueHolderfd59e->connect($eventName, $listener, $priority);
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

        unset($instance->eventDispatcher, $instance->defaultOptions);

        $instance->initializeree362 = $initializer;

        return $instance;
    }

    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;

        if (! $this->valueHolderfd59e) {
            $reflection = $reflection ?: new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolderfd59e = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);

        }

        $this->valueHolderfd59e->__construct($eventDispatcher);
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
        unset($this->eventDispatcher, $this->defaultOptions);
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
