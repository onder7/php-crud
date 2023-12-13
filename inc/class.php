<?php



class Veritabani {

    private $pdo;


    public function __construct($dsn, $username, $password) {
        $this->pdo = new PDO($dsn, $username, $password);
    }

    public function query($sql) {
        return $this->pdo->query($sql);
    }

    public function exec($sql) {
        return $this->pdo->exec($sql);
    }

    public function insert($table, $data) {
        $keys = array_keys($data);
        $values = array_values($data);

        $sql = "INSERT INTO $table (";
        $sql .= implode(", ", $keys);
        $sql .= ") VALUES (";
        $sql .= implode(", ", array_map(function ($value) {
            return "'$value'";
        }, $values));
        $sql .= ")";

        return $this->exec($sql);
    }

    public function update($table, $data, $where) {
        $set = array_map(function ($key, $value) {
            return "$key = '$value'";
        }, array_keys($data), array_values($data));

        $sql = "UPDATE $table SET ";
        $sql .= implode(", ", $set);
        $sql .= " WHERE $where";

        return $this->exec($sql);
    }

    public function delete($table, $where) {



        
        $sql = "DELETE FROM $table WHERE $where";
        return $this->exec($sql);
      }


      /////////////////
    public function select($table, $columns = "*", $where = null, $orderBy = null, $limit = null) {
        $sql = "SELECT $columns FROM $table";
    
        if ($where) {
            $sql .= " WHERE $where";
        }
    
        if ($orderBy) {
            $sql .= " ORDER BY $orderBy";
        }
    
        if ($limit) {
            $sql .= " LIMIT $limit";
        }
    
        return $this->query($sql);
    } ///
      
}

function selectUsers($table,$a) {
    $database = new PDO("mysql:host=localhost;dbname=blog", "root", "");
  
    $sql = "SELECT * FROM $table WHERE baslik LIKE 'rrrrrrrrrq'";
    $statement = $database->query($sql);
 
        $statement = $database->query($sql);
      while ($user = $statement->fetch()) {
            echo $user['baslik'] . " - " . $user['yazi'] . "<br>";
            return;
        }
        }




      
    