@extends('admin.layout.master')
@section('title','Edit Goal')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Edit Goal</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('goal.update',$goal->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Goal Title</label>
                                    <input type="text" class="form-control" name="goal_name" value="{{ $goal->goal_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success text-white">Save</button>
                        <a href="{{ route('goal.index') }}"><button type="button" class="btn btn-inverse">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection