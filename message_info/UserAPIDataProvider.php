<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class UserAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var int */
    protected $userId;

    /** @var string */
    protected $email;

    /** @var string */
    protected $role;

    /** @var string */
    protected $stateIso;


    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }


    /**
     * @param int $userId
     * @return UserAPIDataProvider
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;

        return $this;
    }


    /**
     * @return UserAPIDataProvider
     */
    public function unsetUserId()
    {
        $this->userId = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasUserId()
    {
        return ($this->userId !== null && $this->userId !== []);
    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }


    /**
     * @param string $email
     * @return UserAPIDataProvider
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }


    /**
     * @return UserAPIDataProvider
     */
    public function unsetEmail()
    {
        $this->email = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasEmail()
    {
        return ($this->email !== null && $this->email !== []);
    }


    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }


    /**
     * @param string $role
     * @return UserAPIDataProvider
     */
    public function setRole(string $role)
    {
        $this->role = $role;

        return $this;
    }


    /**
     * @return UserAPIDataProvider
     */
    public function unsetRole()
    {
        $this->role = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasRole()
    {
        return ($this->role !== null && $this->role !== []);
    }


    /**
     * @return string
     */
    public function getStateIso(): string
    {
        return $this->stateIso;
    }


    /**
     * @param string $stateIso
     * @return UserAPIDataProvider
     */
    public function setStateIso(string $stateIso)
    {
        $this->stateIso = $stateIso;

        return $this;
    }


    /**
     * @return UserAPIDataProvider
     */
    public function unsetStateIso()
    {
        $this->stateIso = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasStateIso()
    {
        return ($this->stateIso !== null && $this->stateIso !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'userId' =>
          array (
            'name' => 'userId',
            'allownull' => false,
            'default' => '',
            'type' => 'int',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'email' =>
          array (
            'name' => 'email',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'role' =>
          array (
            'name' => 'role',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'stateIso' =>
          array (
            'name' => 'stateIso',
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
