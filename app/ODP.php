<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ODP extends Model
{
  protected $table = 'odp';
  protected $fillable = ['id_odp', 'Kandatel', 'id_sto', 'nama_odp', 'alamat_odp'];
}