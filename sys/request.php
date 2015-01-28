<?php
    class Request{
        
        static private $pregunta=array();
        static private $contador;
        static private $accion;
        static private $tpregunta;
        static private $parametro=array();
        static private $parametros;

        static function retrieve(){	
           self::$pregunta =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$pregunta;    
        }
       static function getCount(){	
           if(empty(self::$pregunta[2])){
                self::$contador="home";
            }else{
            self::$contador=self::$pregunta[2];
            } 
            return self::$contador;
        }

        static function getParams(){	
            $tpregunta = count(self::$pregunta);
            $j2=0;
            if($tpregunta > 3){
                if($tpregunta % 3 != 0){
    	            for($j=2;$j < $tpregunta;$j++){ 
    	            	self::$parametro[$j2]= self::$pregunta[$j];
           				$j2++;  
    	            }
                    return self::$parametro;
            	}else{
            		echo "El parametres son incorrectes";
            	}
            }else{
                echo "Els parametres son correctes";
            }
        }

          static function getAction(){  
           
            if(empty(self::$pregunta[3])){
                self::$accion="Home";
               
            }else{
                    self::$accion = self::$pregunta[3];
            }  
            return self::$accion;
        }
    }
?>