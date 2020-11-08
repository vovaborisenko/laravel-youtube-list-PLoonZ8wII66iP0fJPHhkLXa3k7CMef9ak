<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\BlogCategory;

class BlogCategoryObserver
{
    /**
     * Handle the blog category "creating" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function creating(BlogCategory $blogCategory)
    {
        $this->setSlug($blogCategory);
    }

    /**
     * Handle the blog category "created" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function created(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Handle the blog category "updating" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function updating(BlogCategory $blogCategory)
    {
        $this->setSlug($blogCategory);
    }

    /**
     * Handle the blog category "updated" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function updated(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Handle the blog category "deleted" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function deleted(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Handle the blog category "restored" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function restored(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Handle the blog category "force deleted" event.
     *
     * @param  BlogCategory  $blogCategory
     * @return void
     */
    public function forceDeleted(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Устанавливает значение поля slug, если оно пустое
     *
     * @param  BlogCategory  $blogCategory
     */
    protected function setSlug(BlogCategory $blogCategory)
    {
        if (empty($blogCategory->slug)) {
            $blogCategory->slug = Str::slug($blogCategory->title);
        }
    }
}
