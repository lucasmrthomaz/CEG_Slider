<?php
/**
 * Created by PhpStorm.
 * User: Thomaz
 * Date: 29/09/2017
 * Time: 08:08
 */

class Database{

    private $dsn = "mysql:dbname=test;host=localhost";
    private $dbuser = "root";
    private $dbpasswd = "";

    /**
     * @return string
     */
    public function getDbuser()
    {
        return $this->dbuser;
    }

    /**
     * @param string $dbuser
     */
    public function setDbuser($dbuser)
    {
        $this->dbuser = $dbuser;
    }

    /**
     * @return string
     */
    public function getDbpasswd()
    {
        return $this->dbpasswd;
    }

    /**
     * @param string $dbpasswd
     */
    public function setDbpasswd($dbpasswd)
    {
        $this->dbpasswd = $dbpasswd;
    }

    /**
     * @return string
     */
    public function getDsn()
    {
        return $this->dsn;
    }

    /**
     * @param string $dsn
     */
    public function setDsn($dsn)
    {
        $this->dsn = $dsn;
    }

    public function prepareConnection(){
        
        try{
            $pdo = new PDO($this->getDsn(), $this->getDbuser(), $this->getDbpasswd());
        } catch (PDOException $e){
            echo "Houve um problema de comunicação com o banco de dados ".$e->getMessage();
        }

        return $pdo;
    }

    /**
    *
    */
    public function setUpConnection(){
       
    }

}


?>