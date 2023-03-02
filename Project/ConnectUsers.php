<?php

    class ConnectUsers{

        private $connection;

    //connection to MySQL works continue the program Attempt to connect to the Database
    public function connectToDBMS(){
        require_once ('mylogin.php');
        $this->connection = new mysqli($hn, $un, $pw, $db);
        if($this->connection===FALSE)
            die("Fatal Error - Not possible to connect to MySQL <br>" . mysqli_connect_error());
        else
            return TRUE;
    }



        //Attributes initializations
        private $user_name;
        private $password;


            //Connection variable  
        
    

        //getters

        public function getUser_name() 
        { 

        return $this->user_name; 

        } 

    

        public function getPassword() 

        { 

        return $this->password; 

        } 

        

        //Constructor and destructor
        function __construct($uname,$password){

        $this->user_name = $uname; 

        $this->password = $password; 

        }

        function __destruct(){ 

            $this->connection->close();
    
        } 

    

    //Connection to database 'accounts'
    private function connectToDB(){

        $check_connect_to_db = mysqli_select_db($this->connection, 'accounts');
        if($check_connect_to_db===FALSE)
            die("Fatal Error - Attempt to create DB but not possible to connect to it" . $this->connection->error);
            return TRUE;
    }

    //connect to table 'users'
    private function connectToTable(){
        $sql_desc_table = "DESC users";
        $check_table_exists = $this->connection->query($sql_desc_table);
        if($check_table_exists===FALSE)
            die("Fatal Error - Table does not exist" . $this->connection->error); 
            return TRUE;
    }

    //Select user
    private function selectUser(int $flag){
        
        $sql_select_query = "SELECT username FROM users where username='$this->user_name'";
        $select_query = $this->connection->query($sql_select_query);
        
        if ($select_query->num_rows === 0) {
            
            if ($flag===0){
                echo "You entered a wrong username!" . $this->connection->error;
                return FALSE;
            }else if($flag===1){
                //User does not exist, it can be registered
                return TRUE;
            }else{
                echo "Username does not exist!" . $this->connection->error;
                return FALSE;
            }

            
        }
        else if ($select_query->num_rows === 1){
            //check user for login
            if ($flag===0){
                $select_query->close();
                $sql_select_query = "SELECT * FROM users where username='$this->user_name' and password='$this->password'";
                $select_query = $this->connection->query($sql_select_query);
                if ($select_query->num_rows === 0) {
                    echo "You entered a wrong password!" . $this->connection->error;                  
                    return FALSE;
                }else{
            
                    return TRUE;
                }
            //check user for register
            }else if($flag===1){
                echo "User ".$this->user_name." already exist";
                return FALSE;              
            }
            else{
                return TRUE;
            }
        }               
        
    }


    //insert user
    private function createUser(){
        $sql_insert_query="INSERT INTO users (username, password) 
                        VALUES ('$this->user_name', '$this->password') ";
        $insert_query = $this->connection->query($sql_insert_query);
        if($insert_query===FALSE)
            die("Fatal Error - Data cannot be inserted in the table<br>" . $connection->error);
        return TRUE;
    }

    //update user
    private function updateUser(){
        $sql_insert_query="update users set password='$this->password' where username='$this->user_name' ";
        $update_query = $this->connection->query($sql_insert_query);
        if($update_query===FALSE)
            die("Fatal Error - Data cannot be updated in the table<br>" . $connection->error);
        return TRUE;
    }


    //login connect function
    public function login(){
        $this->connectToDBMS();
        $this->connectToDB();
        $this->connectToTable();
        if($this->selectUser(0)===TRUE)
            return TRUE;
        return FALSE;
    }

    //insert user function
    public function insert_user(){
        $this->connectToDBMS();
        $this->connectToDB();
        $this->connectToTable();
        if($this->selectUser(1)===TRUE){
                if($this->createUser()===TRUE)
                    return TRUE;
            return FALSE;
        }

        
    }

    //update user function
    public function update_user(){
        $this->connectToDBMS();
        $this->connectToDB();
        $this->connectToTable();
        if($this->selectUser(2)===TRUE){
            if($this->updateUser()===TRUE)
                return TRUE;
        return FALSE;
        }
        
    }

    } 

?>