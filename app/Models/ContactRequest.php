<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
  protected $fillable = [
    'request_type',
    'firstname',
    'name',
    'address',
    'location',
    'email',
    'phone',
    'date_of_birth',
    'message'
  ];

  protected $casts = [
    'date_of_birth'  => 'date:d.m.Y',
  ];
}
