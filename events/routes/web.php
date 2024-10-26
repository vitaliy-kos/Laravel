<?php

use App\Events\NewsHidden;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news/create-test', function () {
    $news = new News();
    $news->title = 'Test news title';
    $news->body = 'Test news body';
    $news->slug = Str::slug($news->title);
    $news->save();

    return $news;
});

Route::get('/news/{id}/hide', function ($id) {
    $news = News::findOrFail($id);

    $news->hidden = true;
    $news->save();

    NewsHidden::dispatch($news);

    return 'News hidden';
});
