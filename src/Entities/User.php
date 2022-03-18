<?php

namespace bp\Entities;

class User{
    private string $username;
    private string $rawPassword;
    private string $name;

    /**
     * @param string $username
     * @param string $rawPassword
     * @param string $name
     * @param string $permissions
     */
    public function __construct(string $username, string $rawPassword, string $name, string $permissions)
    {
        $this->username = $username;
        $this->rawPassword = $rawPassword;
        $this->name = $name;
        $this->permissions = $permissions;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getRawPassword(): string
    {
        return $this->rawPassword;
    }

    /**
     * @param string $rawPassword
     */
    public function setRawPassword(string $rawPassword): void
    {
        $this->rawPassword = $rawPassword;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPermissions(): string
    {
        return $this->permissions;
    }

    /**
     * @param string $permissions
     */
    public function setPermissions(string $permissions): void
    {
        $this->permissions = $permissions;
    }
    private string $permissions;

}
