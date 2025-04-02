<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact'
    ];

    public function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'contact' => 'required|digits:9',
            'email' => 'required|email|unique:contacts,email,' . $this->id
        ];
    }
}
