<?php

namespace App\Http\Controllers;

use App\News;
use Validator;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class NewsController extends Controller
{
    protected function validator(Request $request)
    {
        $fields = [
            'alias' => ['required', 'string', 'min:3', 'max:50',
                Rule::unique('news')->ignore($request->id),
            ], 
            'title' => 'required|string|min:3|max:50',
            'image' => 'required|image',
            'preview' => 'required|string',
            'news_content' => 'required', 
        ];
        
        return Validator::make($request->all(), $fields)->validate();
    }
    
    public function list()
    {
        $news = News::all();

        return view('admin.news-list', ['news' => $news]);
    }

    public function showNewsOnHome()
    {
        $countNews = env('COUNT_NEWS');
        
        $news = News::where('published', 1)
                    ->orderBy('id', 'desc')
                    ->limit($countNews)
                    ->get();

        return view('index', ['news' => $news]);
    }

    public function showNews($alias)
    {
        $news = News::where('alias', $alias)->first();

        if (empty($news) || $news->published == 0) {
            abort(404);
        }

        $newsPrev = News::where('id', '<', $news->id)
            ->where('published', 1)
            ->orderBy('id', 'desc')
            ->first();

        $newsNext = News::where('id', '>', $news->id)
            ->where('published', 1)
            ->orderBy('id', 'asc')
            ->first();

        return view('news', ['news' => $news, 'prev' => $newsPrev, 'next' => $newsNext]);
    }
    
    public function show($id = '')
    {
        if ($id) {
            $news = News::find($id);

            return view('form.news', ['news' => $news, 'id' => $id]);
        }

        return view('form.news');
    }

    public function create(Request $request)
    {
        $this->validator($request);

        $pathImage = $this->saveImage($request->file('image'));

        News::create([
            'alias' => $request->alias,
            'title' => $request->title,
            'image' => $pathImage,
            'preview' => $request->preview,
            'text' => $request->news_content,
            'date_publish' => $request->date_publish,
            'published' => $request->published == '1' ? 1 : 0, 
        ]);

        return redirect(route('news'));
    }

    public function update(Request $request, $id)
    {
        $this->validator($request);

        $pathImage = $this->saveImage($request->file('image'));

        News::where('id', $id)
            ->update([
            'alias' => $request->alias,
            'title' => $request->title,
            'image' => $pathImage,
            'preview' => $request->preview,
            'text' => $request->news_content,
            'date_publish' => $request->date_publish,
            'published' => $request->published == '1' ? 1 : 0, 
        ]);

        return redirect(route('news'));
    }

    public function delete($id)
    {
        News::find($id)->delete();

        return redirect(route('news'));
    }

    public function saveImage($image)
    {
        Storage::putFileAs('/public/news/img', $image, $image->getClientOriginalName());        
        
        return '/news/img/' . $image->getClientOriginalName();
    }

}
