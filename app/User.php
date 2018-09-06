<?php

namespace seeNameSpace;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use seeNameSpace\Models\CartaoUsuario;
use seeNameSpace\Models\Categoria;
use seeNameSpace\Models\Conta;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function contas()
    {
        return $this->hasMany(Conta::class)->where('ativo', true);
    }

    public function cartoes()
    {
        return $this->hasMany(CartaoUsuario::class)->where('ativo', true);
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class)->where('ativo', true);
    }
}
