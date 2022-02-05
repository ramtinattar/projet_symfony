<?php

namespace ContainerIED0zZx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderab917 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc24e1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3f896 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getConnection', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getMetadataFactory', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getExpressionBuilder', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'beginTransaction', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getCache', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'transactional', array('func' => $func), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'commit', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->commit();
    }

    public function rollback()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'rollback', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getClassMetadata', array('className' => $className), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'createQuery', array('dql' => $dql), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'createNamedQuery', array('name' => $name), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'createQueryBuilder', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'flush', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'clear', array('entityName' => $entityName), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->clear($entityName);
    }

    public function close()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'close', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->close();
    }

    public function persist($entity)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'persist', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'remove', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'refresh', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'detach', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'merge', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'contains', array('entity' => $entity), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getEventManager', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getConfiguration', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'isOpen', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getUnitOfWork', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getProxyFactory', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'initializeObject', array('obj' => $obj), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'getFilters', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'isFiltersStateClean', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'hasFilters', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return $this->valueHolderab917->hasFilters();
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

        $instance->initializerc24e1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderab917) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderab917 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderab917->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, '__get', ['name' => $name], $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        if (isset(self::$publicProperties3f896[$name])) {
            return $this->valueHolderab917->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab917;

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

        $targetObject = $this->valueHolderab917;
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
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab917;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderab917;
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
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, '__isset', array('name' => $name), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab917;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderab917;
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
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, '__unset', array('name' => $name), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab917;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderab917;
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
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, '__clone', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        $this->valueHolderab917 = clone $this->valueHolderab917;
    }

    public function __sleep()
    {
        $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, '__sleep', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;

        return array('valueHolderab917');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc24e1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc24e1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc24e1 && ($this->initializerc24e1->__invoke($valueHolderab917, $this, 'initializeProxy', array(), $this->initializerc24e1) || 1) && $this->valueHolderab917 = $valueHolderab917;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderab917;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderab917;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
