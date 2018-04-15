<?php


use Badassprof\Controllers\ArticleController;
use Badassprof\Providers\TemplateEngine;


Route::get('/', function() {
    return TemplateEngine::getBlade()->make('index');
});

Route::prefix('article')->group(function () {


    Route::get('/', function (){
        $articles = ArticleController::all();
        return TemplateEngine::getBlade()->make('articles.all', $articles);
    });

    Route::get('/create', function (){
        return TemplateEngine::getBlade()->make('articles.new');
    });

    Route::get('/show/{id}', function ($id){
        $article = ArticleController::show($id);
        return TemplateEngine::getBlade()->make('articles.show', $article);
    });

    Route::post('/store', function () {
        ArticleController::store();
        Gears\Router::redirectTo('/articles');
    });

    Route::delete('/delete/{id}', function ($id) {
        ArticleController::delete($id);
        Gears\Router::redirectTo('/articles');
    });

    Route::patch('/update/{id}', function ($id) {
        ArticleController::update($id);
        Gears\Router::redirectTo('/articles');
    });


});



