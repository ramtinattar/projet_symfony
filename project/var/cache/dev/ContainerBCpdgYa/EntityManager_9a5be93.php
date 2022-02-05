<?php

namespace ContainerBCpdgYa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0925f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer36a32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8265e = [
        
    ];

    public function getConnection()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getConnection', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getMetadataFactory', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getExpressionBuilder', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'beginTransaction', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getCache', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'transactional', array('func' => $func), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'commit', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->commit();
    }

    public function rollback()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'rollback', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getClassMetadata', array('className' => $className), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'createQuery', array('dql' => $dql), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'createNamedQuery', array('name' => $name), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'createQueryBuilder', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'flush', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'clear', array('entityName' => $entityName), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->clear($entityName);
    }

    public function close()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'close', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->close();
    }

    public function persist($entity)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'persist', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'remove', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'refresh', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'detach', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'merge', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'contains', array('entity' => $entity), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getEventManager', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getConfiguration', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'isOpen', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getUnitOfWork', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getProxyFactory', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'initializeObject', array('obj' => $obj), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'getFilters', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'isFiltersStateClean', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'hasFilters', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return $this->valueHolder0925f->hasFilters();
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

        $instance->initializer36a32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0925f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0925f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0925f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, '__get', ['name' => $name], $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        if (isset(self::$publicProperties8265e[$name])) {
            return $this->valueHolder0925f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0925f;

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

        $targetObject = $this->valueHolder0925f;
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
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0925f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0925f;
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
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, '__isset', array('name' => $name), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0925f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0925f;
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
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, '__unset', array('name' => $name), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0925f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0925f;
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
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, '__clone', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        $this->valueHolder0925f = clone $this->valueHolder0925f;
    }

    public function __sleep()
    {
        $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, '__sleep', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;

        return array('valueHolder0925f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer36a32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer36a32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer36a32 && ($this->initializer36a32->__invoke($valueHolder0925f, $this, 'initializeProxy', array(), $this->initializer36a32) || 1) && $this->valueHolder0925f = $valueHolder0925f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0925f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0925f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
