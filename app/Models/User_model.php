<?php namespace App\Models;
 
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class User_model extends Model
{
     
    protected $table = 'user1';
 
    public function getUser()
    {
        $builder = $this->db->table('user1');
        $builder->select('*');
        return $builder->get();
    }
 
    public function saveUser($data)
    {
        $query = $this->db->table('user1')->insert($data);
        return $query;
    }
 
    public function updateUser($data, $id)
    {
        $query = $this->db->table('user1')->update($data, array('firstname' => $id));
        return $query;
    }
 
    public function deleteUser($id)
    {
        $query = $this->db->table('user1')->delete(array('firstname' => $id));
        return $query;
    } 
}