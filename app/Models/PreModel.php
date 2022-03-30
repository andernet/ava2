<?php

namespace App\Models;

use CodeIgniter\Model;

class PreModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 's_pre_curso';
    protected $primaryKey       = 'id_pre_curso';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'cod_aluno',
        'id_curso',
        'conhecimento_deste_curso',
        'conhecimento_deste_curso_outro',
        'interesse',
        'expectativa_conhecimentos',
        'facilidades_dificuldades',
        'aplicacao_conhecimentos',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
