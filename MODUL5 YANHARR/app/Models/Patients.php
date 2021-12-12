<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $table = "patients";
    protected $primaryKey = "id";
    protected $fillable = [
        'vaccine_id',
        'name',
        'nik',
        'alamat',
        'image_ktp',
        'no_hp',
    ];

    public function vaccine()
    {
        return $this->hasOne(Vaccines::class, 'id', 'vaccine_id');
    }
}
