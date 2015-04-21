<?php namespace Modules\Faq\Entities;

use Illuminate\Database\Eloquent\Model;

class AnswerTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['content'];
    protected $table = 'faq__answers_translations';
}
