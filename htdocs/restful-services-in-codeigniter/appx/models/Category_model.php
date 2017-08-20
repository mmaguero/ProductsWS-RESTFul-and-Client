<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods: GET, OPTIONS, POST");

  class Category_model extends CI_Model {
       
      public function __construct(){
          
        $this->load->database();
        
      }
      
      //API call - get a record by id
      public function getcategorybyid($id){  

           $this->db->select('b.id, b.name, GROUP_CONCAT(a.name SEPARATOR ", ") AS products');

           $this->db->from('tbl_products a, tbl_products_categories c, tbl_categories b');

           $this->db->where('a.id=c.id_product and b.id=c.id_category and id_category=',$id);

           $query = $this->db->get();
           
           if($query->num_rows() == 1)
           {

               return $query->result_array();

           }
           else
           {

             return 0;

          }

      }

    //API call - get all record
    public function getallcategories(){   

        $this->db->select('id, name');

        $this->db->from('tbl_categories');

        $this->db->order_by("id", "desc"); 

        $query = $this->db->get();

        if($query->num_rows() > 0){

          return $query->result_array();

        }else{

          return 0;

        }

    }
   
   //API call - add new record
    public function add($data){

        if($this->db->insert('tbl_categories', $data)){

           return true;

        }else{

           return false;

        }

    }

   //API call - add new record
    public function addproductcategory($data){

        if($this->db->insert('tbl_products_categories', $data)){

           return true;

        }else{

           return false;

        }

    }

}
