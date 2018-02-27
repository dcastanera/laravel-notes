<?php

namespace DCastanera\Notes;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Table
     */
    protected $table = 'notes';

    /**
     * Fillable fields
     */
    protected $fillable = [
        'note',
        'user_id',
    ];

    /**
     * Carbon dates
     */
    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];

    /**
     * Eloquent Notable
     * @return  Note object
     */
    function notable()
    {
        return $this->morphTo();
    }


    function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}
