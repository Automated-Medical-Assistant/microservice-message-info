<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class NumberCreationRequestAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var int */
    protected $doctorId;

    /** @var string */
    protected $number;

    /** @var string */
    protected $creationDate;


    /**
     * @return int
     */
    public function getDoctorId(): int
    {
        return $this->doctorId;
    }


    /**
     * @param int $doctorId
     * @return NumberCreationRequestAPIDataProvider
     */
    public function setDoctorId(int $doctorId)
    {
        $this->doctorId = $doctorId;

        return $this;
    }


    /**
     * @return NumberCreationRequestAPIDataProvider
     */
    public function unsetDoctorId()
    {
        $this->doctorId = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasDoctorId()
    {
        return ($this->doctorId !== null && $this->doctorId !== []);
    }


    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }


    /**
     * @param string $number
     * @return NumberCreationRequestAPIDataProvider
     */
    public function setNumber(string $number)
    {
        $this->number = $number;

        return $this;
    }


    /**
     * @return NumberCreationRequestAPIDataProvider
     */
    public function unsetNumber()
    {
        $this->number = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasNumber()
    {
        return ($this->number !== null && $this->number !== []);
    }


    /**
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }


    /**
     * @param string $creationDate
     * @return NumberCreationRequestAPIDataProvider
     */
    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }


    /**
     * @return NumberCreationRequestAPIDataProvider
     */
    public function unsetCreationDate()
    {
        $this->creationDate = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasCreationDate()
    {
        return ($this->creationDate !== null && $this->creationDate !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'doctorId' =>
          array (
            'name' => 'doctorId',
            'allownull' => false,
            'default' => '',
            'type' => 'int',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'number' =>
          array (
            'name' => 'number',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'creationDate' =>
          array (
            'name' => 'creationDate',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
