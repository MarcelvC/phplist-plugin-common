<?php
/**
 * CommonPlugin for phplist
 * 
 * This file is a part of CommonPlugin.
 *
 * @category  phplist
 * @package   CommonPlugin
 * @author    Duncan Cameron
 * @copyright 2011-2012 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */

/**
 * DAO class providing access to the user table
 * 
 */
class CommonPlugin_DAO_User extends CommonPlugin_DAO
{
    public function userByEmail($email)
    {
        $email = sql_escape($email);
        $sql =
            "SELECT * FROM {$this->tables['user']}
            WHERE email = '$email'";

        return $this->dbCommand->queryRow($sql);
    }

    public function userById($id)
    {
        $sql =
            "SELECT * FROM {$this->tables['user']}
            WHERE id = $id";

        return $this->dbCommand->queryRow($sql);
    }

    public function userByUniqid($uid)
    {
        $uid = sql_escape($uid);
        $sql =
            "SELECT * FROM {$this->tables['user']}
            WHERE uniqid = '$uid'";

        return $this->dbCommand->queryRow($sql);
    }

    public function unconfirmUser($email)
    {
        $email = sql_escape($email);
        $sql =
            "UPDATE {$this->tables['user']} u
            SET confirmed = 0
            WHERE email = '$email'";

        return $this->dbCommand->queryAffectedRows($sql);
    }
}
