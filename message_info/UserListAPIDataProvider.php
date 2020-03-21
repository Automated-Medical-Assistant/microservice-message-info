<?php
declare(strict_types=1);
namespace MessageInfo;

/**
 * Auto generated data provider
 */
final class UserListAPIDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var \MessageInfo\UserAPIDataProvider[] */
    protected $Users = [];


    /**
     * @return \MessageInfo\UserAPIDataProvider[]
     */
    public function getUsers(): array
    {
        return $this->Users;
    }


    /**
     * @param \MessageInfo\UserAPIDataProvider[] $Users
     * @return UserListAPIDataProvider
     */
    public function setUsers(array $Users)
    {
        $this->Users = $Users;

        return $this;
    }


    /**
     * @return UserListAPIDataProvider
     */
    public function unsetUsers()
    {
        $this->Users = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasUsers()
    {
        return ($this->Users !== null && $this->Users !== []);
    }


    /**
     * @param \MessageInfo\UserAPIDataProvider $User
     * @return UserListAPIDataProvider
     */
    public function addUser(UserAPIDataProvider $User)
    {
        $this->Users[] = $User; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'Users' =>
          array (
            'name' => 'Users',
            'allownull' => false,
            'default' => '',
            'type' => '\\MessageInfo\\UserAPIDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'User',
            'singleton_type' => '\\MessageInfo\\UserAPIDataProvider',
          ),
        );
    }
}
