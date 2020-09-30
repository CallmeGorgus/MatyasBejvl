<?php

namespace Bejvl;

final class UserBejvl
{
    private $username = 'Matyas';
    
    private $password = '1234';
    
    protected $firstName = 'Matyáš';
    
    protected $lastName = 'Bejvl';
    
    protected $phone = 123456789;
    
    public $street = 'Plukovníka Mráze 17';
    
    public $zip = 27301; // psc
    
    public $invoiceId = 0123574112; // ico
    
    public $loginCount = 0;
    
    public $bornDate = 2001;
    
    public function __construct() {
    }
    
    function setUsernameBejvl(string $username) {
        $this->username = $username;
    }

    function setPasswordBejvl(string $password) {
        $this->password = $password;
    }

    function getStreetBejvl(): string {
        return $this->street;
    }

    function getZipBejvl(): int {
        return $this->zip;
    }

    function getInvoiceIdBejvl(): int {
        return $this->invoiceId;
    }

    function getLoginCountBejvl(): int {
        return $this->loginCount;
    }

    function getBornDateBejvl(): int {
        return $this->bornDate;
    }    
}

$maty = new UserBejvl;
$maty->setUsernameBejvl("Matyáš");

echo $maty->getStreetBejvl();
echo $maty->getZipBejvl();
echo $maty->getInvoiceIdBejvl();
echo $maty->getLoginCountBejvl();
echo $maty->getBornDateBejvl();

echo var_dump($maty);
