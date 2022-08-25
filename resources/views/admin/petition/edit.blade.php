@extends('admin.layout.master')
@section('title',$petition->p_title)
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">View Petition {{ $petition->p_title }}</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('goal.update',$goal->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Petition Title</label>
                                    <input type="text" id="firstName" class="form-control" readonly value="{{ $petition->p_title }}">
                            </div>
                            <!--/span-->
                            <div class="col-md-12">
                                <div class="form-group has-danger">
                                    <label class="form-label">Description</label>
                                    <form method="post">
                                        <textarea id="mymce" readonly name="area">{!! $petition->p_desc !!}</textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        {{-- <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button> --}}
                        <a href="{{ route('petition.index') }}"><button type="button" class="btn btn-inverse">Back</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection