
<?php




class Model extends DatabaseConnect{

     

     public function mvc_add_data($table , $array_data = array() )

         {
 
            $key = array();
            $val = array();

            foreach ($array_data as $k => $v) {

                 $key[count($key)] =   $k  ;
                 $val[count($val)] =   $v  ;

            }

             $key = str_replace("," , "" ,$key) ;
             $val = str_replace(array(",","'",'"') , array("","\'",'\"') ,$val) ;
            
             $key =  "`".implode("`,`", $key ). "`" ;
             $val = "'". implode("','", $val ) . "'";
             $val =  htmlentities($val) ;

            $resulte = $this->mysqli->query(" INSERT INTO `$table` ($key) VALUES ($val) " );
         
            if($resulte == true)
           {
               return true ;
           }
                
          


         }


     public function mvc_get_data($table = null, $text = null){

        

         $resulte = $this->mysqli->query(sprintf(" select * from `$table` %s",$text));
          
             if($resulte == false)
                 return null;
          
                 $num = $resulte->num_rows;
          
                     $resuelt = array();
          
                         for($i=0;$i<$num;$i++)
                         {

                             $resuelt[count($resuelt)] = $resulte->fetch_object(); 

                         }
          
          
             return $resuelt;
                 
             
       
        

    }       


}


?>
