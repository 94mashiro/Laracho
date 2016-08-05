<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Overtrue\Pinyin\Pinyin;

class ArticleController extends Controller
{
    public function postAddArticle(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',

            'body' => 'required',
            'category' => 'required'
        ]);
        $article = new Article();
        $article->title = $request['title'];
        $article->body = $request['body'];
        $article->category_id = $request['category'];
        $article->url = $request['url'];
        $message = '发生未知错误';
        if ($request->user()->hasManyArticles()->save($article)) {
            $message = '文章发布成功!';
        }
        return redirect()->route('admin.gotoarticle')->with(['message', $message]);
    }
    public function postConvertUrl(Request $request)
    {
        $title = $request['title'];
        $pinyin = new Pinyin();
        $convert = $pinyin->permalink($title);
        return response()->json(['title' => $convert]);
    }
}