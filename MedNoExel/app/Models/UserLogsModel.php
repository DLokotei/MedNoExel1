<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLogsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_logs';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'user_id' => 0,
        'action' => "unknown",
        'value' => "{[]}",
        'from_id' => 0,
    ];
}
