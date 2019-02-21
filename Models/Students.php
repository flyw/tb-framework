<?php
/**
 * Created by PhpStorm.
 * User: yuan
 * Date: 2019-02-21
 * Time: 16:26
 */

class Students extends Database
{
    public function getAllUsers() {
        $sql = 'SELECT * FROM users';
        return $this->query($sql);
    }
}
