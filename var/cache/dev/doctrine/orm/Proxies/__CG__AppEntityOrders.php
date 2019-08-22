<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Orders extends \App\Entity\Orders implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'payment_method_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'delivery_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'user_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'address_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'orderItems', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'transactionInfo', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'comment'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'payment_method_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'delivery_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'user_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'address_id', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'orderItems', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'transactionInfo', '' . "\0" . 'App\\Entity\\Orders' . "\0" . 'comment'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Orders $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentMethodId(): ?\App\Entity\PaymentMethod
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentMethodId', []);

        return parent::getPaymentMethodId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentMethodId(?\App\Entity\PaymentMethod $payment_method_id): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentMethodId', [$payment_method_id]);

        return parent::setPaymentMethodId($payment_method_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryId(): ?\App\Entity\Delivery
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryId', []);

        return parent::getDeliveryId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryId(?\App\Entity\Delivery $delivery_id): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryId', [$delivery_id]);

        return parent::setDeliveryId($delivery_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTimeInterface $created): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId(): ?\App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', []);

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId(?\App\Entity\Users $user_id): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', [$user_id]);

        return parent::setUserId($user_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressId(): ?\App\Entity\Address
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressId', []);

        return parent::getAddressId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressId(?\App\Entity\Address $address_id): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressId', [$address_id]);

        return parent::setAddressId($address_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItems(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItems', []);

        return parent::getOrderItems();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrderItem(\App\Entity\OrderItem $orderItem): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrderItem', [$orderItem]);

        return parent::addOrderItem($orderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrderItem(\App\Entity\OrderItem $orderItem): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrderItem', [$orderItem]);

        return parent::removeOrderItem($orderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransactionInfo(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransactionInfo', []);

        return parent::getTransactionInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function addTransactionInfo(\App\Entity\TransactionLog $transactionInfo): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransactionInfo', [$transactionInfo]);

        return parent::addTransactionInfo($transactionInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransactionInfo(\App\Entity\TransactionLog $transactionInfo): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransactionInfo', [$transactionInfo]);

        return parent::removeTransactionInfo($transactionInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', []);

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setComment(?string $comment): \App\Entity\Orders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', [$comment]);

        return parent::setComment($comment);
    }

}
