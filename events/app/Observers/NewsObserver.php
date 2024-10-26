<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Log;

class NewsObserver
{
    /**
     * Handle the News "saved" event.
     */
    public function saved(News $news): void
    {
        Log::info("News {$news->getAttribute('id')} saved");
    }
}
