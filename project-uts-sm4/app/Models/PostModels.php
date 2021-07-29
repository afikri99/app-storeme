<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModels extends Model
{
    protected $table = 'post';
    
    public function getPost($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->getRowArray();
        }
    }
    public function getComment($id)
    {
        //return $this->db->table($this->$comment)->getWhere(['postId' => $id])->getRowArray();
        $builder = $this->db->table('komentar');
    
        return $builder->where(['postId' => $id])->get()->getResult();
    }

    public function insertPost($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updatePost($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deletePost($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
