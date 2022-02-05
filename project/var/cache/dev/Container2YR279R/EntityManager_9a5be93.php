<?php

namespace Container2YR279R;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee13b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0158 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties79ed6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getConnection', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getMetadataFactory', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getExpressionBuilder', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'beginTransaction', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getCache', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'transactional', array('func' => $func), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'commit', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->commit();
    }

    public function rollback()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'rollback', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getClassMetadata', array('className' => $className), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'createQuery', array('dql' => $dql), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'createNamedQuery', array('name' => $name), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'createQueryBuilder', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'flush', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'clear', array('entityName' => $entityName), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->clear($entityName);
    }

    public function close()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'close', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->close();
    }

    public function persist($entity)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'persist', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'remove', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'refresh', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'detach', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'merge', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'contains', array('entity' => $entity), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getEventManager', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getConfiguration', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'isOpen', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getUnitOfWork', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getProxyFactory', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'initializeObject', array('obj' => $obj), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'getFilters', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'isFiltersStateClean', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'hasFilters', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return $this->valueHolderee13b->hasFilters();
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

        $instance->initializera0158 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee13b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee13b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee13b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, '__get', ['name' => $name], $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        if (isset(self::$publicProperties79ed6[$name])) {
            return $this->valueHolderee13b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee13b;

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

        $targetObject = $this->valueHolderee13b;
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
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee13b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee13b;
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
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, '__isset', array('name' => $name), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee13b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee13b;
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
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, '__unset', array('name' => $name), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee13b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee13b;
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
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, '__clone', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        $this->valueHolderee13b = clone $this->valueHolderee13b;
    }

    public function __sleep()
    {
        $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, '__sleep', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;

        return array('valueHolderee13b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0158 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0158;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera0158 && ($this->initializera0158->__invoke($valueHolderee13b, $this, 'initializeProxy', array(), $this->initializera0158) || 1) && $this->valueHolderee13b = $valueHolderee13b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee13b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee13b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
