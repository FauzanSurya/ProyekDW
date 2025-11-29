<?php

namespace App\Models;

// Baris-baris ini WAJIB ada:
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Izinkan kolom ini diisi
    protected $fillable = ['name', 'email', 'message'];
}