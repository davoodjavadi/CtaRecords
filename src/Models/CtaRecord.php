<?php
namespace davoodjavadi\ctaRecords\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CtaRecord extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['mobile','url'];
}
