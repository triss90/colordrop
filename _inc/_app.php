<?php
// App Settings
date_default_timezone_set('Europe/London'); // Defining timezone
setlocale(LC_ALL, 'en_GB.UTF-8'); // Setting "local"
error_reporting(E_ALL ^ E_NOTICE); // Enableing error reporting (except "notice"-messages)
ini_set("display_errors", 1); // Enables error messages (set to 0 to hide)


class MyApp {

    // Connect to a database (MySQL or SQLite)
    // Database credentials
    private static $db;

    //	private $MySQLUsername = 'username';
    //	private $MySQLPassword = 'Passw0rd';
    //	private $MySQLHostname = 'localhost';
    //	private $MySQLDatabase = 'MyDatabase';
    // private $ProjectRoot = $_SERVER['DOCUMENT_ROOT'] . '/colors.db'

     // private $SQLiteDatabase = '/var/www/colordrop.io/public_html/colors.db';
     private $SQLiteDatabase = __DIR__ . '/colors.db';

    // Connect to MySQL database
    //	public function __construct() {
    //		if (!isset(self::$db)) {
    //			try {
    //				self::$db = new PDO('mysql:host=' . $this->MySQLHostname . ';dbname=' . $this->MySQLDatabase . ';charset=utf8;', $this->MySQLUsername, $this->MySQLPassword);
    //				self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //			}
    //			catch (PDOException $e) {
    //				die("Could not connect to the database, please check your credentials. Error message: " . $e->getMessage());
    //			}
    //		}
    //	}


    // Connect to SQLite database
    public function __construct() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO('sqlite:' . $this->SQLiteDatabase);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Could not connect to the database, please check your credentials. Error message: " . $e->getMessage());
            }
        }
    }

    // Get data from the database (several lines)
    // DatabasePrepareQuery( "SELECT * FROM Library", array() )
    // DatabasePrepareQuery( "SELECT * FROM Library WHERE title = ?", array('Moby-Dick') )
    // DatabasePrepareQuery( "SELECT * FROM Library WHERE title LIKE ?", array('%Moby-Dick%') )
    public function DatabasePrepareQuery($query, $data_array) {
        try {
            $stmt = self::$db->prepare($query);
            $stmt->execute($data_array);
            return $stmt;
        } catch (PDOException $e) {
            // Catch error message and display it
            echo 'An error has occurred - error message: ' . $e->getMessage();
            exit;
        }
    }

    // Get data from the database (one line)
    // DatabasePrepareQueryReturnFirstField( "SELECT * FROM Library WHERE id = ?", array(1) )
    public function DatabasePrepareQueryReturnFirstField($query, $data_array) {
        try {
            $stmt = self::$db->prepare($query);
            $stmt->execute($data_array);
            return $stmt->fetch();
        } catch (PDOException $e) {
            // Catch error message and display it
            echo 'An error has occurred - error message: ' . $e->getMessage();
            exit;
        }
    }

    // Delete something from the database
    // DatabaseDelete( "Library", "WHERE id = ?", array(1) )
    public function DatabaseDelete($TableName, $WhereField, $WhereValues) {
        if (is_array($WhereValues) && isset($WhereField) && isset($TableName)) {
            try {
                $prepareInsert = self::$db->prepare('DELETE FROM ' . $TableName . ' ' . $WhereField);
                $prepareInsert->execute($WhereValues);
                return $prepareInsert->rowCount();
            } catch (PDOException $e) {
                // Catch error message and display it
                echo 'An error has occurred - error message: ' . $e->getMessage();
                exit;
            }
        } else {
            return 0;
        }
    }

    // Insert something in the database
    // DatabaseInsert( "Library", array('title','author'), array('Moby-Dick','Herman Melville') )
    public function DatabaseInsert($TableName, $Fields, $Values) {
        $buildFields = '';
        if (is_array($Fields)) {
            // Loop through all our fields
            foreach ($Fields as $key => $field):
                if ($key == 0) {
                    // First field
                    $buildFields .= $field;
                } else {
                    // Subsequent fields starting with ","
                    $buildFields .= ', ' . $field;
                }
            endforeach;
        } else {
            // Only inserting one field. No need for the loop above
            $buildFields .= $Fields;
        }
        $buildValues = '';
        if (is_array($Values)) {
            // Loop through all our values
            foreach ($Values as $key => $value):
                if ($key == 0) {
                    // First value
                    $buildValues .= '?';
                } else {
                    // Subsequent values starting with ","
                    $buildValues .= ', ?';
                }
            endforeach;
        } else {
            // Only inserting one field, no need for the loop above
            $buildValues .= ':value';
        }
        try {
            $prepareInsert = self::$db->prepare('INSERT INTO ' . $TableName . ' (' . $buildFields . ') VALUES (' . $buildValues . ')');
            if (is_array($Values)) {
                $prepareInsert->execute($Values);
            } else {
                $prepareInsert->execute(array(
                    ':value' => $Values
                ));
            }
            // Return last insert ID
            return self::$db->lastInsertId();

        } catch (PDOException $e) {
            // Catch error message and display it
            echo 'An error has occurred - error message: ' . $e->getMessage();
            exit;
        }
    }

    // Update something in our database
    // DatabaseUpdate( "Library", array('title'), array('Moby-Dick', 1), "WHERE id = ?" )
    public function DatabaseUpdate($TableName, $Fields, $Values, $WhereFields) {
        $buildFields = '';
        if (is_array($Fields)) {
            foreach ($Fields as $key => $field):
                if ($key == 0) {
                    $buildFields .= $field . " = ?";
                } else {
                    $buildFields .= ', ' . $field . " = ?";
                }
            endforeach;

        } else {
            $buildFields .= $Fields . " = :value";
        }
        try {
            $prepareInsert = self::$db->prepare('UPDATE ' . $TableName . ' SET ' . $buildFields . ' ' . $WhereFields);
            if (is_array($Values)) {
                $prepareInsert->execute($Values);
            } else {
                $prepareInsert->execute(array(
                    ':value' => $Values
                ));
            }
            return self::$db->lastInsertId();
        } catch (PDOException $e) {
            echo 'An error has occurred - error message: ' . $e->getMessage();
            exit;
        }
    }
}
