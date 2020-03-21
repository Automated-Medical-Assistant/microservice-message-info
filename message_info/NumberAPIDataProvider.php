<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class NumberAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var int */
    protected $doctorId;

    /** @var string */
    protected $number;

    /** @var string */
    protected $creationDate;

    /** @var string */
    protected $modifiedStateDate;

    /** @var bool */
    protected $status;


    /**
     * @return int
     */
    public function getDoctorId(): int
    {
        return $this->doctorId;
    }


    /**
     * @param int $doctorId
     * @return NumberAPIDataProvider
     */
    public function setDoctorId(int $doctorId)
    {
        $this->doctorId = $doctorId;

        return $this;
    }


    /**
     * @return NumberAPIDataProvider
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
     * @return NumberAPIDataProvider
     */
    public function setNumber(string $number)
    {
        $this->number = $number;

        return $this;
    }


    /**
     * @return NumberAPIDataProvider
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
     * @return NumberAPIDataProvider
     */
    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }


    /**
     * @return NumberAPIDataProvider
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
     * @return string
     */
    public function getModifiedStateDate(): ?string
    {
        return $this->modifiedStateDate;
    }


    /**
     * @param string $modifiedStateDate
     * @return NumberAPIDataProvider
     */
    public function setModifiedStateDate(?string $modifiedStateDate = null)
    {
        $this->modifiedStateDate = $modifiedStateDate;

        return $this;
    }


    /**
     * @return NumberAPIDataProvider
     */
    public function unsetModifiedStateDate()
    {
        $this->modifiedStateDate = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasModifiedStateDate()
    {
        return ($this->modifiedStateDate !== null && $this->modifiedStateDate !== []);
    }


    /**
     * @return bool
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }


    /**
     * @param bool $status
     * @return NumberAPIDataProvider
     */
    public function setStatus(?bool $status = null)
    {
        $this->status = $status;

        return $this;
    }


    /**
     * @return NumberAPIDataProvider
     */
    public function unsetStatus()
    {
        $this->status = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasStatus()
    {
        return ($this->status !== null && $this->status !== []);
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
          'modifiedStateDate' =>
          array (
            'name' => 'modifiedStateDate',
            'allownull' => true,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'status' =>
          array (
            'name' => 'status',
            'allownull' => true,
            'default' => '',
            'type' => 'bool',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
