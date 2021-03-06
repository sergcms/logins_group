<?php

namespace App\Http\Controllers;

use App\Seo;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SeoController extends Controller
{
    /**
     * validation fields on form
     */
    protected function validator(Request $request)
    {
        $fields = [
            'url' => ['required', 'string', 'min:3', 'max:100',
                Rule::unique('seo')->ignore($request->id),
            ], 
            'title' => 'required|string|min:5|max:100',
            'keywords' => 'required|string',
            'description' => 'required|string|max:100',
        ];
        
        return Validator::make($request->all(), $fields)->validate();
    }
    
    /**
     * show list seo in admin panel 
     */
    public function list()
    {
        $seo = Seo::all();

        return view('admin.seo-list', ['seo' => $seo]);
    }

    /**
     * show form for create or edit seo
     */
    public function show($id = '')
    {
        if ($id) {
            $seo = Seo::find($id);

            return view('form.seo', ['seo' => $seo, 'id' => $id]);
        }

        return view('form.seo');
    }

    /**
     * create seo in DB
     */
    public function create(Request $request)
    {
        $this->validator($request);

        Seo::create([
            'url' => $request->url,
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);

        return redirect(route('seo-list'));
    }

    /**
     * update seo in DB
     */
    public function update(Request $request, $id)
    {
        $this->validator($request);

        Seo::where('id', $id)
            ->update([
                'url' => $request->url,
                'title' => $request->title,
                'keywords' => $request->keywords,
                'description' => $request->description,
            ]);

        return redirect(route('seo-list'));
    }

    /**
     * delete seo in DB
     */
    public function delete($id)
    {
        Seo::where('id', $id)->delete();

        return redirect(route('seo-list'));
    }

}
