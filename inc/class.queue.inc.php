<?php /*
Create a ticket
Update the ticket Name and Description
Remove your ticket (manually or after marked complete)
Retrieve ticket information
*/
 
/**
 * Handles queue interactions within the app
 *
 * PHP version 5
 *
 * @author Ryan Marten
 * @copyright 2016 Ryan Marten
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 *
 */
class DelicountrQueue
{
    /**
     * The database object
     *
     * @var object
     */
    private $_db;
 
    /**
     * Checks for a database object and creates one if none is found
     *
     * @param object $db
     * @return void
     */
    public function __construct($db=NULL)
    {
        if(is_object($db))
        {
            $this->_db = $db;
        }
        else
        {
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
            $this->_db = new PDO($dsn, DB_USER, DB_PASS);
        }
    }
}
?>