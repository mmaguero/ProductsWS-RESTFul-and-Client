<?php

require(APPPATH.'/libraries/REST_Controller.php');
 
class Api2 extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();

        $this->load->model('category_model');
    }

    //API - client sends id and on valid id category information is sent back
    function categoryById_get(){

        $id  = $this->get('id');
        
        if(!$id){

            $this->response("No id specified", 400);

            exit;
        }

        $result = $this->category_model->getcategorybyid( $id );

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
    function categories_get(){

        $result = $this->category_model->getallcategories();

        if($result){

            $this->response($result, 200); 

        } 

        else{

            $this->response("No record found", 404);

        }
    }
     
    //API - create a new item in database.
    function addCategory_post(){

         $name           = $this->post('name');
        
         if(!$name){

                $this->response("Enter complete category information to save", 400);

         }else{

            $result = $this->category_model->add(array("name"=>$name));

            if($result === 0){

                $this->response("Category information could not be saved. Try again.", 404);

            }else{

                $this->response("success", 200);  
           
            }

        }

    }

    //API - create a new item in database.
    function addProductCategory_post(){

         $id_category          = $this->post('id_category');
         $id_product           = $this->post('id_product');
        
         if(!$id_category || !$id_product){

                $this->response("Enter complete product/category information to save", 400);

         }else{

            $result = $this->category_model->addproductcategory(array("id_category"=>$id_category, "id_product"=>$id_product));

            if($result === 0){

                $this->response("Product/Category information could not be saved. Try again.", 404);

            }else{

                $this->response("success", 200);  
           
            }

        }

    }


}
