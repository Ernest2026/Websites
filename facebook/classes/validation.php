<?php


class validation {
    
    public $error = [];
    public function input() {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
           
            if (isset($_POST['submit'])) {
                return "borderred";
            }

        } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['[REQUEST_METHOD'] == "get"){
            
        }
    }

    // public function input($fieldName) {
    //     if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
           
    //         return trim($_POST[$fieldName]);

    //     } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['[REQUEST_METHOD'] == "get"){
    //         return trim($_GET[$fieldName]);
    //     }
    // }

    public function validate($fieldName, $label, $rules) {

        $allRules = explode('|',$rules);
        $value    = $this->input($fieldName);
        $pattern  = "/^[a-zA-Z ]+$/";

        if(in_array("required", $allRules)){
           
            if(empty($value)){
               
              return $this->errors[$fieldName] = $label . " is required";
    
            }
    
           }

    }

    public function run(){
        if(empty($this->errors)){
            return true;
        } else {
            return false;
        }
           
       }

    public function setValue($fieldName){
       
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == 'post'){
         
            if(isset($_POST[$fieldName])){
                return $_POST[$fieldName];
            }

        } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == 'get'){
             if(isset($_GET[$fieldName])){
                 return $_GET[$fieldName];
             }
        }


    }

    public function isSet($fieldName){

        if(isset($_POST[$fieldName])){
            if (!empty($_POST['name']) || !empty($_POST['name'])) {
                return true;
                // echo "The field is not empty";
            }
        }

    }

    public function isSetE($fieldName){

        if(isset($_POST[$fieldName])){
            if (empty($_POST['name']) || empty($_POST['name'])) {
                return true;
                // echo "The field is empty";
            }
        }

    }


}





?>