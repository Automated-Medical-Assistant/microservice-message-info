<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class UserListAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var \MessageInfo\UserAPIDataProvider[] */
    protected $setUsers = [];


    /**
     * @return \MessageInfo\UserAPIDataProvider[]
     */
    public function getSetUsers(): array
    {
        return $this->setUsers;
    }


    /**
     * @param \MessageInfo\UserAPIDataProvider[] $setUsers
     * @return UserListAPIDataProvider
     */
    public function setSetUsers(array $setUsers)
    {
        $this->setUsers = $setUsers;

        return $this;
    }


    /**
     * @return UserListAPIDataProvider
     */
    public function unsetSetUsers()
    {
        $this->setUsers = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasSetUsers()
    {
        return ($this->setUsers !== null && $this->setUsers !== []);
    }


    /**
     * @param \MessageInfo\UserAPIDataProvider $addUser
     * @return UserListAPIDataProvider
     */
    public function addaddUser(UserAPIDataProvider $addUser)
    {
        $this->setUsers[] = $addUser; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'setUsers' =>
          array (
            'name' => 'setUsers',
            'allownull' => false,
            'default' => '',
            'type' => '\\MessageInfo\\UserAPIDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'addUser',
            'singleton_type' => '\\MessageInfo\\UserAPIDataProvider',
          ),
        );
    }
}
