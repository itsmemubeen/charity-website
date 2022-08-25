@extends('admin.layout.master')
@section('title','Edit Page')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Edit Page</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('page.update',$page->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Page Title*</label>
                                    <input type="text" class="form-control" name="title" value="{{ $page->title }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">Page Description*</label>
                                    <textarea class="form-control" name="description" >{{ $page->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">Page Image*</label>
                                <input type="file" class="form-control" name="image" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Goals</label>
                                <select class="form-control form-select" name="goal_id" data-placeholder="Choose a Category" tabindex="1" required>
                                    @foreach ($goal as $data)
                                        <option value="{{ $data->id }}">{{ $data->goal_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success text-white">Save</button>
                        <a href="{{ route('page.index') }}"><button type="button" class="btn btn-inverse">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection