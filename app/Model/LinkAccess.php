<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class LinkAccess extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'link_access';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];

    public function link()
    {
        return $this->belongsTo(Link::class, 'link_id', 'id');
    }
}
