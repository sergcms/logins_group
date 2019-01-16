<?php

namespace App\Http\Controllers;

use Validator;
use App\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function list()
    {
        $seo = Seo::all();

        return view('admin.seo-list', ['seo' => $seo]);
    }

    public function show($id = '')
    {
        if ($id) {
            $seo = Seo::find($id);

            return view('form.seo', ['seo' => $seo, 'id' => $id]);
        }

        return view('form.seo');
    }

    public function create(Request $request)
    {
        Seo::create([
            'url' => $request->url,
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);

        return redirect(route('seo-list'));
    }

    public function update(Request $request, $id)
    {
        Seo::where('id', $id)
            ->update([
                'url' => $request->url,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'description' => $request->description,
            ]);

        return redirect(route('seo-list'));
    }

    public function delete($id)
    {
        Seo::where('id', $id)->delete();

        return redirect(route('seo-list'));
    }

}
