<?php
namespace Dealweb\Payments;

class CreditCard
{
    /** @var string */
    private $bank;

    /** @var int */
    private $number;

    /** @var string */
    private $cardHolder;

    /** @var int */
    private $expiryMonth;

    /** @var int */
    private $expiryYear;

    /** @var int */
    private $cvc;

    /** @var int */
    private $installments;

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param string $cardHolder
     * @return $this
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param int $expiryMonth
     * @return $this
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param int $expiryYear
     * @return $this
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * @param int $cvc
     * @return $this
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;

        return $this;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * @return int
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param int $installments
     * @return $this
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }
}
