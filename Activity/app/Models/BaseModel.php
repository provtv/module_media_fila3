<?php

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Base Model for Activity Module.
 */
abstract class BaseModel extends Model {
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    protected $incrementing;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    protected $timestamps;

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage;

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [];
} 