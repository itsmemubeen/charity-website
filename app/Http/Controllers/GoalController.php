<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use Illuminate\Support\Str;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Goal::all();
        return view('admin.goal.index', ['goal' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'goal_name' => 'string|required|max:50',
        ]);
        $data = $request->all();

        $slug = Str::slug($request->goal_name);

        $data['goal_slug'] = $slug;
        $status = Goal::create($data);
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Goal Added Successfully');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while adding goal');
        }
        return redirect()->route('goal.index');
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
        $data = Goal::find($id);
        return view('admin.goal.edit', ['goal' => $data]);
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
        $goal = Goal::findOrFail($id);

        $this->validate($request, [
            'goal_name' => 'string|required|max:50',
        ]);
        $data = $request->all();

        $slug = Str::slug($request->goal_name);

        $data['goal_slug'] = $slug;
        $status = $goal->fill($data)->save();
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Goal Successfully Updated');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while updating goal');
        }
        return redirect()->route('goal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Goal::findOrFail($id);
        $status = $data->delete();
        if ($status) {
            request()
                ->session()
                ->flash('success', 'Goal Deleted Successfully');
        } else {
            request()
                ->session()
                ->flash('error', 'Error occurred while deleting banner');
        }
        return redirect()->route('goal.index');
    }
}