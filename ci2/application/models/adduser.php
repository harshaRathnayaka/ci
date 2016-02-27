<?php

class adduser extends CI_Model
{
function __construct()
{
    parent::_construct();
}

    function form_insert($data)
    {

        $this->db->insert('admin',$data);
    }

}
?>