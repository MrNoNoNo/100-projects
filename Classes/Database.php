<?php

/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 21-Jun-17
 * Time: 6:49 PM
 */
class database {

    var $host;
    var $user;
    var $password;
    var $database;
    public $dbconn;


    public function connect($setHost, $setUser, $setPassword, $setDatabase) {
        $this->host = $setHost;
        $this->user = $setUser;
        $this->password = $setPassword;
        $this->database = $setDatabase;

        $this->dbconn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    public function query($sql) {
        return mysqli_query($this->dbconn, $sql);
    }
}