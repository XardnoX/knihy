<?php
namespace App\Models;
    use CodeIgniter\Model;

    class modelB extends Model {
        protected $table = "kniha";
        protected $primaryKey = "idkniha";

        protected $returnType = "object";
    }