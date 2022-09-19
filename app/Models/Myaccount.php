<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Myaccount extends Model
{
    use Notifiable;

    protected $table= 'myaccount';
    protected $fillable = [
         'uid', 'name',];
}
