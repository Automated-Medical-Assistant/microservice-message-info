<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class NumberChangeStateRequestAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $number;

    /** @var string */
    protected $modifiedStateDate;

    /** @var bool */
    protected $status;


    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }


    /**
     * @param string $number
     * @return NumberChangeStateRequestAPIDataProvider
     */
    public function setNumber(string $number)
    {
        $this->number = $number;

        return $this;
    }


    /**
     * @return NumberChangeStateRequestAPIDataProvider
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
    public function getModifiedStateDate(): string
    {
        return $this->modifiedStateDate;
    }


    /**
     * @param string $modifiedStateDate
     * @return NumberChangeStateRequestAPIDataProvider
     */
    public function setModifiedStateDate(string $modifiedStateDate)
    {
        $this->modifiedStateDate = $modifiedStateDate;

        return $this;
    }


    /**
     * @return NumberChangeStateRequestAPIDataProvider
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
    public function getStatus(): bool
    {
        return $this->status;
    }


    /**
     * @param bool $status
     * @return NumberChangeStateRequestAPIDataProvider
     */
    public function setStatus(bool $status)
    {
        $this->status = $status;

        return $this;
    }


    /**
     * @return NumberChangeStateRequestAPIDataProvider
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
          'modifiedStateDate' =>
          array (
            'name' => 'modifiedStateDate',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'status' =>
          array (
            'name' => 'status',
            'allownull' => false,
            'default' => '',
            'type' => 'bool',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
