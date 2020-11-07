<?php

namespace App\Observers;

use App\Models\BlogCategory;

class BlogCategoryObserver
{
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
}
