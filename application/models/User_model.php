<?php 
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    /**
     * authenticate user login
     *
     * @return bool
     */
    function authenticate($username, $password) {
        $this->db->select('1', True);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $q = $this->db->get('user');
        return $q->num_rows()===1;
    }
}
