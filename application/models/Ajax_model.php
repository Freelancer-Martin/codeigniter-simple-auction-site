<?php

class Ajax_model extends CI_Model
{

  public function InsertAjaxModel( $models  )
  {
     $query = $this->db->query("INSERT INTO tbl_models
       (
         models
       )
        VALUES
       (
         '$models'
       )");
  }


  public function InsertAjaxMark( $mark  )
     {
     $query = $this->db->query("INSERT INTO tbl_mark
       (
         mark
       )
        VALUES
       (
         '$mark'
       )");
  }

}
