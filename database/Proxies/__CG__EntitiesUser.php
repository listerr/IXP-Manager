<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Entities\User implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = ['username' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->username);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'username', 'password', 'email', 'authorisedMobile', 'uid', 'privs', 'disabled', 'lastupdated', 'lastupdatedby', 'creator', 'created', 'id', 'Preferences', 'Customer', 'Children', 'Contact', 'LastLogins', '' . "\0" . 'Entities\\User' . "\0" . 'ApiKeys', '_className', '_preferenceClassName', '' . "\0" . 'Entities\\User' . "\0" . '_cache', '' . "\0" . 'Entities\\User' . "\0" . '_namespace'];
        }

        return ['__isInitialized__', 'password', 'email', 'authorisedMobile', 'uid', 'privs', 'disabled', 'lastupdated', 'lastupdatedby', 'creator', 'created', 'id', 'Preferences', 'Customer', 'Children', 'Contact', 'LastLogins', '' . "\0" . 'Entities\\User' . "\0" . 'ApiKeys', '_className', '_preferenceClassName', '' . "\0" . 'Entities\\User' . "\0" . '_cache', '' . "\0" . 'Entities\\User' . "\0" . '_namespace'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->username);
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthorisedMobile($authorisedMobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorisedMobile', [$authorisedMobile]);

        return parent::setAuthorisedMobile($authorisedMobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorisedMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorisedMobile', []);

        return parent::getAuthorisedMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUid($uid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUid', [$uid]);

        return parent::setUid($uid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUid', []);

        return parent::getUid();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivs($privs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivs', [$privs]);

        return parent::setPrivs($privs);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivs', []);

        return parent::getPrivs();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisabled($disabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisabled', [$disabled]);

        return parent::setDisabled($disabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisabled', []);

        return parent::getDisabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastupdated($lastupdated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastupdated', [$lastupdated]);

        return parent::setLastupdated($lastupdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastupdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastupdated', []);

        return parent::getLastupdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastupdatedby($lastupdatedby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastupdatedby', [$lastupdatedby]);

        return parent::setLastupdatedby($lastupdatedby);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastupdatedby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastupdatedby', []);

        return parent::getLastupdatedby();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator($creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function addPreference(\Entities\UserPreference $preferences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPreference', [$preferences]);

        return parent::addPreference($preferences);
    }

    /**
     * {@inheritDoc}
     */
    public function removePreference(\Entities\UserPreference $preferences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePreference', [$preferences]);

        return parent::removePreference($preferences);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreferences', []);

        return parent::getPreferences();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Entities\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren(\Entities\User $children = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', [$children]);

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormattedName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormattedName', []);

        return parent::getFormattedName();
    }

    /**
     * {@inheritDoc}
     */
    public function addChildren(\Entities\User $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChildren', [$children]);

        return parent::addChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChildren(\Entities\User $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChildren', [$children]);

        return parent::removeChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function setContact(\Entities\Contact $contact = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', [$contact]);

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function addLastLogin(\Entities\UserLoginHistory $lastLogins)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLastLogin', [$lastLogins]);

        return parent::addLastLogin($lastLogins);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLastLogin(\Entities\UserLoginHistory $lastLogins)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLastLogin', [$lastLogins]);

        return parent::removeLastLogin($lastLogins);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogins()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogins', []);

        return parent::getLastLogins();
    }

    /**
     * {@inheritDoc}
     */
    public function addApiKey(\Entities\ApiKey $apiKeys)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApiKey', [$apiKeys]);

        return parent::addApiKey($apiKeys);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApiKey(\Entities\ApiKey $apiKeys)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApiKey', [$apiKeys]);

        return parent::removeApiKey($apiKeys);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiKeys()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiKeys', []);

        return parent::getApiKeys();
    }

    /**
     * {@inheritDoc}
     */
    public function isCustUser(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCustUser', []);

        return parent::isCustUser();
    }

    /**
     * {@inheritDoc}
     */
    public function isCustAdmin(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCustAdmin', []);

        return parent::isCustAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperUser(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperUser', []);

        return parent::isSuperUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifier', []);

        return parent::getAuthIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifierName', []);

        return parent::getAuthIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthPassword', []);

        return parent::getAuthPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberToken', []);

        return parent::getRememberToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setRememberToken($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRememberToken', [$value]);

        return parent::setRememberToken($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberTokenName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberTokenName', []);

        return parent::getRememberTokenName();
    }

    /**
     * {@inheritDoc}
     */
    public function loadPreference($attribute, $index = 0, $includeExpired = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadPreference', [$attribute, $index, $includeExpired]);

        return parent::loadPreference($attribute, $index, $includeExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function hasPreference($attribute, $index = 0, $includeExpired = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPreference', [$attribute, $index, $includeExpired]);

        return parent::hasPreference($attribute, $index, $includeExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreference($attribute, $index = 0, $includeExpired = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreference', [$attribute, $index, $includeExpired]);

        return parent::getPreference($attribute, $index, $includeExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreference($attribute, $value, $operator = '=', $expires = 0, $index = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreference', [$attribute, $value, $operator, $expires, $index]);

        return parent::setPreference($attribute, $value, $operator, $expires, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function addIndexedPreference($attribute, $value, $operator = '=', $expires = 0, $max = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIndexedPreference', [$attribute, $value, $operator, $expires, $max]);

        return parent::addIndexedPreference($attribute, $value, $operator, $expires, $max);
    }

    /**
     * {@inheritDoc}
     */
    public function cleanExpiredPreferences($asOf = NULL, $attribute = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cleanExpiredPreferences', [$asOf, $attribute]);

        return parent::cleanExpiredPreferences($asOf, $attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function deletePreference($attribute, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deletePreference', [$attribute, $index]);

        return parent::deletePreference($attribute, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function expungePreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'expungePreferences', []);

        return parent::expungePreferences();
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexedPreference($attribute, $withIndex = false, $ignoreExpired = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndexedPreference', [$attribute, $withIndex, $ignoreExpired]);

        return parent::getIndexedPreference($attribute, $withIndex, $ignoreExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssocPreference($attribute, $index = NULL, $ignoreExpired = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssocPreference', [$attribute, $index, $ignoreExpired]);

        return parent::getAssocPreference($attribute, $index, $ignoreExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteAssocPreference($attribute, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteAssocPreference', [$attribute, $index]);

        return parent::deleteAssocPreference($attribute, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreferences', []);

        return parent::_getPreferences();
    }

}
