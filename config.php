 <?php
/**
 * using mysqli connect for database connection
 */
class DatabaseConnect{

    private   $databaseHost    = 'localhost';
    private   $databaseName     = 'crud_db';
    private   $databaseUsername = 'root';
    private   $databasePassword = '12345'; 
    public    $mysqli ; 
    
    public function __construct()
    {
   
           $this->mysqli =  new mysqli($this->databaseHost,$this->databaseUsername,$this->databasePassword,$this->databaseName);
   
                if($this->mysqli->connect_error) 
                     die("لا يوجد قاعدة بيانات متصلة ");
        	  
               $this->mysqli->set_charset("utf8");
   
           
    }
  
  
   
    public function __destruct(){
  
         $this->mysqli->close();
  
    }
  
}

//تشغيل الكلاس للتجريب   
//$resuelt = new DatabaseConnect();


?>
