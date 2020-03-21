<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class NumberListAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var \MessageInfo\NumberAPIDataProvider[] */
    protected $Numbers = [];


    /**
     * @return \MessageInfo\NumberAPIDataProvider[]
     */
    public function getNumbers(): array
    {
        return $this->Numbers;
    }


    /**
     * @param \MessageInfo\NumberAPIDataProvider[] $Numbers
     * @return NumberListAPIDataProvider
     */
    public function setNumbers(array $Numbers)
    {
        $this->Numbers = $Numbers;

        return $this;
    }


    /**
     * @return NumberListAPIDataProvider
     */
    public function unsetNumbers()
    {
        $this->Numbers = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasNumbers()
    {
        return ($this->Numbers !== null && $this->Numbers !== []);
    }


    /**
     * @param \MessageInfo\NumberAPIDataProvider $Number
     * @return NumberListAPIDataProvider
     */
    public function addNumber(NumberAPIDataProvider $Number)
    {
        $this->Numbers[] = $Number; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'Numbers' =>
          array (
            'name' => 'Numbers',
            'allownull' => false,
            'default' => '',
            'type' => '\\MessageInfo\\NumberAPIDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'Number',
            'singleton_type' => '\\MessageInfo\\NumberAPIDataProvider',
          ),
        );
    }
}
