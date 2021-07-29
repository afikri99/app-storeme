<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModels extends Model
{
    protected $table = 'komentar';

    public function getKomentar($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->getRowArray();
        }
    }

    public function insertKomentar($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateKomentar($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteKomentar($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
