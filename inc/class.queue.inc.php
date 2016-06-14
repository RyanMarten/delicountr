<?php /*
Create a ticket
Update the ticket Name and Description
Remove your ticket (manually or after marked complete)
Retrieve ticket information
*/

include_once "constants.inc.php";
 
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
class Queue
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
    public function loadQueueTickets(){
        $sql = "SELECT * FROM tickets";
        //can do this type of if statement for all of them
        if($stmt = $this->_db->prepare($sql))
        {
        $stmt->execute();
        while($row = $stmt->fetch())
            {
            echo "
                 <li>
                <div class='collapsible-header'><b>#". $row['ticketID'] . "</b> " . $row['ticketName'] . "<a href='#!' class='secondary-content'><i class='material-icons red-color'>delete</i></a></div>
                <div class='collapsible-body'>
                    <p>" . $row['ticketDesc']."</p>
                </div>
            </li>";
            
            }
            $stmt->closeCursor();
        }
        else {
             echo "<li> Something went wrong. ", $db->errorInfo, "</li>";
        }
    }
    public function loadTicketFromID($targetID){
        $sql = "SELECT * FROM tickets WHERE ticketID=:id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':id', $targetID, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        $stmt->closeCursor();
        return $row;
    }
    public function addTicket()
    {
        $ticketDesc = strip_tags(urldecode(trim($_POST['description'])), WHITELIST);
        $ticketName = strip_tags(urldecode(trim($_POST['name'])), WHITELIST);
        $sql = "SELECT ticketID FROM tickets ORDER BY ticketID DESC LIMIT 1";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();
        $ticketID =  $row['ticketID'] + 1;
        $sql = "INSERT INTO tickets
                    (ticketID, ticketName, ticketDesc, ticketStatus)
                VALUES (:ID, :Name, :Desc, 'inactive')";
        try
        {
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':ID', $ticketID, PDO::PARAM_INT);
            $stmt->bindParam(':Name', $ticketName, PDO::PARAM_STR);
            $stmt->bindParam(':Desc', $ticketDesc, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();
            return $this->_db->lastInsertId();
        }
        catch(PDOException $e)
        {
            return $e->getMessage();
        }
    }
    public function updateTicket(){
        
    }
    public function removeTicketFromID($id){
        $sql = "DELETE FROM tickets WHERE ticketID=". $id;
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function loadTicketFromTop(){
        $sql = "SELECT * FROM tickets WHERE ticketStatus='inactive' LIMIT 1";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();
        $id = $row['ticketID'];
        $sql = "UPDATE tickets SET ticketStatus='active' WHERE ticketID=" . $id;
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
        return $id;
    }
    public function clearQueue(){
        $sql = "DELETE FROM tickets WHERE 1=1";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
    }
}
?>