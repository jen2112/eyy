<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminLog_model extends Model {
    public function getadmin(){
        return $this->db->table('tbluser')->get_all();
    }
    public function findAdminEmail($email){
        return $this->db->table('tbluser')->where('email', $email)->get();
    }
}
?>
