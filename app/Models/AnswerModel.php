<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    protected $table='unswers';
    public $timestamps=false;
    protected $fillable=[
        'id',
        'question_id',
        'unswer',
        'is_true'
    ];




    public function question(){
        return $this->belongsTo('App\Models\QuestionModel');
    }
}
