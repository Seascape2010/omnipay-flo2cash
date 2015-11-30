<?php

namespace Omnipay\Flo2cash;

use Omnipay\Common\AbstractGateway;
use Omnipay\Flo2cash\Message\AuthorizeRequest;

/**
 * Dummy Gateway
 *
 * This gateway is useful for testing. It simply authorizes any payment made using a valid
 * credit card number and expiry.
 *
 * Any card number which passes the Luhn algorithm and ends in an even number is authorized,
 * for example: 4242424242424242
 *
 * Any card number which passes the Luhn algorithm and ends in an odd number is declined,
 * for example: 4111111111111111
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Flo2cash Payments WS';
    }

    public function getDefaultParameters()
    {
        return array('AccountId' => 'myAccountId',
                     'Username' => 'myUsername',
                     'Password' => 'myPassword',
                     'storeCard' => 'false',
                     'email' => '',
                     );
    }

    public function createCard(array $parameters = array())
    {
        return $this->createRequest('Omnipay\Flo2cash\Message\CreateCardRequest', $parameters);
    }


    public function deleteCard(array $parameters = array())
    {
        return $this->createRequest('Omnipay\Flo2cash\Message\DeleteCardRequest', $parameters);
    }


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('Omnipay\Flo2cash\Message\PurchaseRequest', $parameters);
    }
    
    public function refund(array $parameters = array())
    {
        return $this->createRequest('Omnipay\Flo2cash\Message\RefundRequest', $parameters);
    }
     /**
     * Set the AccountId.
     *
     * @param string AccountId for this charge
     */
    public function setAccountId($value)
    {
         return $this->setParameter('AccountId', $value);
    }
     /**
     * Get the AccountId.
     *
     * @returns string AccountId for this charge
     */
    public function getAccountId()
    {
         return $this->getParameter('AccountId');
    }
    
    public function setUsername($value)
    {
         return $this->setParameter('Username', $value);
    }
    
    public function getUsername()
    {
         return $this->getParameter('Username');
    }
    
    public function setPassword($value)
    {
         return $this->setParameter('Password', $value);
    }
    
    public function getPassword()
    {
         return $this->getParameter('Password');
    }
     /**
     * Set the storeCard.
     *
     * @param string $StoreCard for this charge
     */
    public function setStoreCard($value)
    {
        return $this->setParameter('storeCard', $value);
    }

    /**
     * Get the storeCard.
     *
     * @returns string $Email for this charge.
     */
    public function getStoreCard()
    {
        return $this->getParameter('storeCard');
    }

        /**
     * Set the Email.
     *
     * @param string $Email for this charge
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get the Email.
     *
     * @returns string $Email for this charge.
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }
}
