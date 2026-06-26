<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Empleado extends Authenticatable
{
    use Notifiable;

    protected $table = 'empleados';

    protected $primaryKey = 'empleado_id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'correo',
        'contrasena',
        'rol',
        'estado'
    ];

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_empleado');
    }

    public function Administrador()
    {
    return $this->rol === 'Administrador';
    }

    public function Supervisor()
    {
        return $this->rol === 'Supervisor';
    }

    public function Vendedor()
    {
        return $this->rol === 'Vendedor';
    }

}