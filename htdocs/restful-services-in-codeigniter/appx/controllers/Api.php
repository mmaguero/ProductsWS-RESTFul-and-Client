<?php

require(APPPATH.'/libraries/REST_Controller.php');
 
class Api extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();

        $this->load->model('product_model');
    }

    //API - client sends id and on valid id product information is sent back
    function productById_get(){

        $id  = $this->get('id');
        
        if(!$id){

            $this->response("No id specified", 400);

            exit;
        }

        $result = $this->product_model->getproductbyid( $id );

        if($result){

            $this->response($result, 200); 

            exit;
        } 
        else{

             $this->response("Invalid id", 404);

            exit;
        }
    } 

    //API -  Fetch All 
    function products_get(){

        $result = $this->product_model->getallproducts();

        if($result){

            $this->response($result, 200); 

        } 

        else{

            $this->response("No record found", 404);

        }
    }
     
    //API - create a new item in database.
    function addProduct_post(){

         $name           = $this->post('name');

         $code           = $this->post('code');

         $description    = $this->post('description');

         $imagen         = $this->post('imagen');
        
         if(!$name || !$code || !$description || !$imagen){

                $this->response("Enter complete product information to save", 400);

         }else{

            $result = $this->product_model->add(array("name"=>$name, "code"=>$code, "description"=>$description, "imagen"=>$imagen));

            if($result === 0){

                $this->response("Product information could not be saved. Try again.", 404);

            }else{

                $this->response("success", 200);  
           
            }

        }

    }

}
