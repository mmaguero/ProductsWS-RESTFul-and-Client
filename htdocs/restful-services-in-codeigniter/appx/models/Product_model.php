<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods: GET, OPTIONS, POST");

  class Product_model extends CI_Model {
       
      public function __construct(){
          
        $this->load->database();
        
      }
      
      //API call - get a record by id
      public function getproductbyid($id){  

           $this->db->select('a.id, code, a.name, description, imagen, GROUP_CONCAT(b.name SEPARATOR ", ") AS categories');

           $this->db->from('tbl_products a, tbl_products_categories c, tbl_categories b');

           $this->db->where('a.id=c.id_product and b.id=c.id_category and id_product=',$id);

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
    public function getallproducts(){   

        $this->db->select('id, code, name');

        $this->db->from('tbl_products');

        $this->db->where('(select count(id_product) from tbl_products_categories where id_product = id) > 0');

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

        if($this->db->insert('tbl_products', $data)){

           return true;

        }else{

           return false;

        }

    }

}
