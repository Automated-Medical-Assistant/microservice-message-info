<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class RoleDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $doctor = 'doctor';

    /** @var string */
    protected $testCenter = 'testCenter';

    /** @var string */
    protected $labor = 'labor';


    /**
     * @return string
     */
    public function getDoctor(): string
    {
        return $this->doctor;
    }


    /**
     * @param string $doctor
     * @return RoleDataProvider
     */
    public function setDoctor(string $doctor = 'doctor')
    {
        $this->doctor = $doctor;

        return $this;
    }


    /**
     * @return RoleDataProvider
     */
    public function unsetDoctor()
    {
        $this->doctor = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasDoctor()
    {
        return ($this->doctor !== null && $this->doctor !== []);
    }


    /**
     * @return string
     */
    public function getTestCenter(): string
    {
        return $this->testCenter;
    }


    /**
     * @param string $testCenter
     * @return RoleDataProvider
     */
    public function setTestCenter(string $testCenter = 'testCenter')
    {
        $this->testCenter = $testCenter;

        return $this;
    }


    /**
     * @return RoleDataProvider
     */
    public function unsetTestCenter()
    {
        $this->testCenter = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTestCenter()
    {
        return ($this->testCenter !== null && $this->testCenter !== []);
    }


    /**
     * @return string
     */
    public function getLabor(): string
    {
        return $this->labor;
    }


    /**
     * @param string $labor
     * @return RoleDataProvider
     */
    public function setLabor(string $labor = 'labor')
    {
        $this->labor = $labor;

        return $this;
    }


    /**
     * @return RoleDataProvider
     */
    public function unsetLabor()
    {
        $this->labor = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasLabor()
    {
        return ($this->labor !== null && $this->labor !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'doctor' =>
          array (
            'name' => 'doctor',
            'allownull' => false,
            'default' => 'doctor',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'testCenter' =>
          array (
            'name' => 'testCenter',
            'allownull' => false,
            'default' => 'testCenter',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'labor' =>
          array (
            'name' => 'labor',
            'allownull' => false,
            'default' => 'labor',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
