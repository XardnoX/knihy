<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class seznamknih extends Model {
      protected $table = "zanr";

       protected $primaryKey = "idZanr";
      
       protected $returnType = "object";
       
       protected $allowedFields = ['nazevZ', 'idZanr'];
       protected $useSoftDeletes = "true";
       protected $deletedField = "deleted_at";
       protected $dateFormat = "int";
       protected $useTimeStamps = "true";
       protected $createdField = "created_at";  
       protected $updatedField = "updated_at";
  
        }