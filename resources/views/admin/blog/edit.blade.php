@extends('admin.layout.master')
@section('title','Create Blog')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Create Blog</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Blog Title*</label>
                                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">Short Description*</label>
                                    <textarea class="form-control" name="short_description" required>{{ $blog->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">Long Description*</label>
                                    <textarea class="form-control" name="long_description" required>{{ $blog->long_description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">Blog Image*</label>
                                <input type="file" class="form-control" name="image" value="" required>
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
                        <a href="{{ route('blog.index') }}"><button type="button" class="btn btn-inverse">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection