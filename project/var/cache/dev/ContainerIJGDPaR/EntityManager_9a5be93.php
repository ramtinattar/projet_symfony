<?php

namespace ContainerIJGDPaR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf81f3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer12c59 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties92668 = [
        
    ];

    public function getConnection()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getConnection', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getMetadataFactory', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getExpressionBuilder', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'beginTransaction', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getCache', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'transactional', array('func' => $func), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'commit', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->commit();
    }

    public function rollback()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'rollback', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getClassMetadata', array('className' => $className), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'createQuery', array('dql' => $dql), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'createNamedQuery', array('name' => $name), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'createQueryBuilder', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'flush', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'clear', array('entityName' => $entityName), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->clear($entityName);
    }

    public function close()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'close', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->close();
    }

    public function persist($entity)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'persist', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'remove', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'refresh', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'detach', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'merge', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'contains', array('entity' => $entity), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getEventManager', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getConfiguration', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'isOpen', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getUnitOfWork', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getProxyFactory', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'initializeObject', array('obj' => $obj), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'getFilters', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'isFiltersStateClean', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'hasFilters', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return $this->valueHolderf81f3->hasFilters();
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

        $instance->initializer12c59 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf81f3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf81f3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf81f3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, '__get', ['name' => $name], $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        if (isset(self::$publicProperties92668[$name])) {
            return $this->valueHolderf81f3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf81f3;

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

        $targetObject = $this->valueHolderf81f3;
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
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf81f3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf81f3;
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
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, '__isset', array('name' => $name), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf81f3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf81f3;
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
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, '__unset', array('name' => $name), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf81f3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf81f3;
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
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, '__clone', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        $this->valueHolderf81f3 = clone $this->valueHolderf81f3;
    }

    public function __sleep()
    {
        $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, '__sleep', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;

        return array('valueHolderf81f3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer12c59 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer12c59;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer12c59 && ($this->initializer12c59->__invoke($valueHolderf81f3, $this, 'initializeProxy', array(), $this->initializer12c59) || 1) && $this->valueHolderf81f3 = $valueHolderf81f3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf81f3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf81f3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
