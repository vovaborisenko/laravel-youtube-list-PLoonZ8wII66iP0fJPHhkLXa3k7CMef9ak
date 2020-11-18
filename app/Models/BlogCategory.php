<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'description',
    ];

    /**
     * Родительские категории.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        // статья принадлежит категории
        return $this->belongsTo(BlogCategory::class, 'parent_id', 'id');
    }

    /**
     * Accesssor родительской категории.
     *
     * @return string
     */
    public function getParentTitleAttribute()
    {
        return $this->parentCategory->title ?? 'Корень';
    }
}
