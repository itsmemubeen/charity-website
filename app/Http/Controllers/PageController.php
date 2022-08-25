<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::all();
        return view('admin.page.index', ['page' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Goal::all();
        return view('admin.page.create', ['goal' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');

            $imageName =
                'page-image-' .
                (strtotime(now()) . rand(111, 99)) .
                '.' .
                $img->getClientOriginalExtension();
            $request
                ->file('image')
                ->move(public_path() . '/assets/images/', $imageName);
            $data['image'] = $imageName;
        }

        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        $status = Page::create($data);
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Page Successfully Added');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while adding page');
        }
        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Page::find($id);
        $dataGoal = Goal::all();
        return view('admin.page.edit', ['page' => $data, 'goal' => $dataGoal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $img = $request->file('image');

            $imageName =
                'page-image-' .
                (strtotime(now()) . rand(111, 99)) .
                '.' .
                $img->getClientOriginalExtension();
            $request
                ->file('image')
                ->move(public_path() . '/assets/images/', $imageName);
            $data['image'] = $imageName;
        }
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;

        $status = $page->fill($data)->save();
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Page Successfully Updated');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while updating page');
        }
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Page::findOrFail($id);
        $status = $data->delete();
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Page Deleted Successfully');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while deleting page');
        }
        return redirect()->route('page.index');
    }
}