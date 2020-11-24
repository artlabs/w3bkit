<?php

    /**
     * MySQL. A simple class to handle mySQL databases.
     */
    class MySQL {

        /**
         * Holds the hostname.
         * @var string
         */
        private $host;

        /**
         * Holds the username.
         * @var string
         */
        private $user;

        /**
         * Holds the password.
         * @var string
         */
        private $pwd;

        /**
         * Holds the name of the database.
         * @var string
         */
        private $db;

        /**
         * Holds the database connection.
         * @var Ressource
         */
        private $connection;

        /**
         * Holds the latest result, produced by a sql-query.
         * @var array
         */
        private $result;

        /**
         * Class constructor. Saves the given parameters into the respective attributes.
         * Builds a connection to the database.
         * @param string $host The hostname.
         * @param string $user The username.
         * @param string $pwd The password.
         * @param string $db The name of the database.
         */
        public function __construct($host="localhost", $user="root", $pwd="", $db="") {
            $this->host = $host;
            $this->user = $user;
            $this->pwd = $pwd;
            $this->db = $db;
            $this->connect();
            if($this->error()) $this->connection = false;
        }

        /**
         * Class destructor. Closes the database connnection, if there is one.
         */
        public function __destruct() {
            if($this->connection) mysqli_close($this->connection);
        }

        /**
         * Gets called when an object of this class is used as a string.
         * @return string A String, describing the object.
         */
        public function __toString() {
            return $this->user.'@'.$this->host.':'.$this->db;
        }

        /**
         * Setter. Implementation of the magic function __set.
         * @param string $name The name of the attribute.
         * @param string $value The value to be set.
         */
        public function __set($name, $value) {
            $this->$name = $value;
        }

        /**
         * 
         * @return array
         */
        public function __sleep() {
            return array('host', 'user', 'db');
        }

        /**
         * 
         */
        public function __wakeup() {
            
        }

        /**
         * 
         * @return array
         */
        public function __serialize() {
            return [
                'host' => $this->host,
                'user' => $this->user,
                'db' => $this->db,
            ];
        }

        /**
         * 
         */
        public function __unserialize($data) {
            $this->host = $data['host'];
            $this->user = $data['user'];
            $this->db = $data['db'];
        }

        /**
         * Takes an optional parameter and saves it into the respective attribute, if it is given.
         * When there is a database connection, it selects the new database, if not, it connects
         * to the database.
         * @param string The name of the database to connect to.
         */
        public function connect($db="") {
            if($db) $this->db = $db;
            if($this->connection) mysqli_close($this->connection);
            $this->connection = @ mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
        }

        /**
         * Checks if there is a database connection and returns true if there is one and false if not.
         * @return boolean Returns true if there is a database connection and false if not.
         */
        public function connection() {
            return ($this->connection) ? true : false ;
        }

        /**
         * 
         */
        public function select($db) {
            return @ mysqli_select_db($this->connection, $db);
        }

        /**
         * Returns a possible connection error.
         * @return string The error message.
         */
        public function error() {
            return mysqli_connect_error();
        }

        /**
         * Sends a sql-query to the database and saves the result. Returns the number of rows in the result.
         * @param string $query The query that gets send to the database.
         * @return int The total number of rows in the result.
         */
        public function sql($query) {
            $this->result = mysqli_query($this->connection, $query);
            return @ mysqli_num_rows($this->result);
        }

        /**
         * Returns the latest result returned by a sql-query.
         * @return array The latest result.
         */
        public function result() {
            return $this->result;
        }

        /**
         * 
         */
        public function fetch($index="") {
            if(!$this->result) return "";
            return ($index) ? mysqli_fetch_assoc($this->result)[$index] : mysqli_fetch_assoc($this->result);
        }

    }

?>