<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Goal;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::all();
        return view('admin.blog.index', ['blog' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Goal::all();
        return view('admin.blog.create', ['goal' => $data]);
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

        $status = Blog::create($data);
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Blog Successfully Added');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while adding blog');
        }
        return redirect()->route('blog.index');
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
        $data = Blog::find($id);
        $dataGoal = Goal::all();
        return view('admin.blog.edit', ['blog' => $data, 'goal' => $dataGoal]);
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
        $blog = Blog::findOrFail($id);
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

        $status = $blog->fill($data)->save();
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Blog Successfully Updated');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while updating blog');
        }
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
