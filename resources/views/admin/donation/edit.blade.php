@extends('admin.layout.master')
@section('title','Edit Donation')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Edit Donation {{ $donation->d_title }}</h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Donation Title</label>
                                    <input type="text" id="firstName" value="{{ $donation->d_title }}" class="form-control" placeholder="John doe">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="form-label">Donation Amount</label>
                                    <input type="text" id="lastName" value="{{ $donation->d_amount }}" class="form-control form-control-danger" placeholder="12n">
                                    <small class="form-control-feedback"> This field has error. </small> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection