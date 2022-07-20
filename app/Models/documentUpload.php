<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentUpload extends Model
{
    protected $fillable = [
 'user_id',
 'ref_number',
 'document_name',
 'document_note',
 'purpose',
 'document_pdf',
 'document_action',
 'document_pdf_action',
 'action_pic',
 'pic_pdf'
    ];
}
