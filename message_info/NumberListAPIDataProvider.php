<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class NumberListAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var \MessageInfo\NumberAPIDataProvider[] */
    protected $setNumbers = [];


    /**
     * @return \MessageInfo\NumberAPIDataProvider[]
     */
    public function getSetNumbers(): array
    {
        return $this->setNumbers;
    }


    /**
     * @param \MessageInfo\NumberAPIDataProvider[] $setNumbers
     * @return NumberListAPIDataProvider
     */
    public function setSetNumbers(array $setNumbers)
    {
        $this->setNumbers = $setNumbers;

        return $this;
    }


    /**
     * @return NumberListAPIDataProvider
     */
    public function unsetSetNumbers()
    {
        $this->setNumbers = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasSetNumbers()
    {
        return ($this->setNumbers !== null && $this->setNumbers !== []);
    }


    /**
     * @param \MessageInfo\NumberAPIDataProvider $addNumber
     * @return NumberListAPIDataProvider
     */
    public function addaddNumber(NumberAPIDataProvider $addNumber)
    {
        $this->setNumbers[] = $addNumber; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'setNumbers' =>
          array (
            'name' => 'setNumbers',
            'allownull' => false,
            'default' => '',
            'type' => '\\MessageInfo\\NumberAPIDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'addNumber',
            'singleton_type' => '\\MessageInfo\\NumberAPIDataProvider',
          ),
        );
    }
}
