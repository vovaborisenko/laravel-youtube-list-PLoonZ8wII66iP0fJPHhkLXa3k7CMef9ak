<?php

namespace App\Observers;

use Carbon\Carbon;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostObserver
{
    /**
     * Handle the blog post "creating" event.
     *
     * @param  BlogPost  $blogPost
     * @return void|bool
     */
    public function creating(BlogPost $blogPost)
    {
        $this->setPublishedAt($blogPost);

        $this->setSlug($blogPost);

        $this->setContextHtml($blogPost);

        $this->setAuthor($blogPost);
    }

    /**
     * Handle the blog post "created" event.
     *
     * @param  BlogPost  $blogPost
     * @return void
     */
    public function created(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "updating" event.
     *
     * @param  BlogPost  $blogPost
     * @return void|bool
     */
    public function updating(BlogPost $blogPost)
    {
        $this->setPublishedAt($blogPost);

        $this->setSlug($blogPost);

        $this->setContextHtml($blogPost);
    }

    /**
     * Handle the blog post "updated" event.
     *
     * @param  BlogPost  $blogPost
     * @return void
     */
    public function updated(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "deleted" event.
     *
     * @param  BlogPost  $blogPost
     * @return void
     */
    public function deleted(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "restored" event.
     *
     * @param  BlogPost  $blogPost
     * @return void
     */
    public function restored(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "force deleted" event.
     *
     * @param  BlogPost  $blogPost
     * @return void
     */
    public function forceDeleted(BlogPost $blogPost)
    {
        //
    }

    /**
     * Устанавливает значение поля published_at
     *
     * @param  BlogPost  $blogPost
     */
    protected function setPublishedAt(BlogPost $blogPost)
    {
        if (empty($blogPost->published_at) && $blogPost->is_published) {
            $blogPost->published_at = Carbon::now();
        }
    }

    /**
     * Устанавливает значение поля slug, если оно пустое
     *
     * @param  BlogPost  $blogPost
     */
    protected function setSlug(BlogPost $blogPost)
    {
        if (empty($blogPost->slug)) {
            $blogPost->slug = Str::slug($blogPost->title);
        }
    }

    /**
     * Устанавливает значение поля context_html, преобразуя context_raw
     *
     * @param  BlogPost  $blogPost
     */
    protected function setContextHtml(BlogPost $blogPost)
    {
        if ($blogPost->isDirty('context_raw')) {
            // @TODO добавить преобразование MarkDown в HTML
            $blogPost->context_html = $blogPost->context_raw;
        }
    }

    /**
     * Устанавливает значение поля used_id (автор статьи)
     *
     * @param  BlogPost  $blogPost
     */
    protected function setAuthor(BlogPost $blogPost)
    {
        $blogPost->user_id = auth()->id ?? BlogPost::UNKNOWN_USER;
    }
}
