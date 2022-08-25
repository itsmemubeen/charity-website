@extends('admin.layout.master')
@section('title','Users')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Users List <button class="dt-button buttons-copy buttons-html5 btn btn-primary me-1" style="float: right">Add User</button></h4>
            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6>
            <div class="table-responsive m-t-40">
                <div id="example23_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="dt-buttons">          
                    <button class="dt-button buttons-copy buttons-html5 btn btn-primary me-1" tabindex="0" aria-controls="example23"><span>Copy</span></button> <button class="dt-button buttons-csv buttons-html5 btn btn-primary me-1" tabindex="0" aria-controls="example23"><span>CSV</span></button> <button class="dt-button buttons-excel buttons-html5 btn btn-primary me-1" tabindex="0" aria-controls="example23"><span>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5 btn btn-primary me-1" tabindex="0" aria-controls="example23"><span>PDF</span></button> <button class="dt-button buttons-print btn btn-primary me-1" tabindex="0" aria-controls="example23"><span>Print</span></button> </div><div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example23"></label></div><table id="example23" class="display nowrap table table-hover table-striped border dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th rowspan="1" colspan="1">S.no</th>
                            <th rowspan="1" colspan="1">First Name</th>
                            <th rowspan="1" colspan="1">Last Name</th>
                            <th rowspan="1" colspan="1">Country</th>
                            <th rowspan="1" colspan="1">Email</th>
                            <th rowspan="1" colspan="1">Petitions By This Users</th>
                            <th rowspan="1" colspan="1">Donations Raising</th>
                            <th rowspan="1" colspan="1">Joinded Date</th>
                            <th rowspan="1" colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($user as  $data)
                    <tr role="row" class="odd">
                            <td class="sorting_1">{{ $i }}</td>
                            <td>{{ $data->f_name }}</td>
                            <td>{{ $data->l_name }}</td>
                            <td>{{ $data->country }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ App\Models\Petition::countPetitionsByUser($data->id) }}</td>
                            <td>${{ App\Models\Donation::countDonationRaising($data->id) }}</td>
                            <td>{{ date_format($data->created_at,"d/m/Y") }}</td>
                            <td>
                                <a href="{{ route('user.edit',[$data->id]) }}"><button class="dt-button buttons-copy buttons-html5 btn btn-primary me-1" style="float: right">Edit</button></a>
                                <form method="POST" action="{{route('user.destroy',[$data->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="dt-button buttons-copy buttons-html5 btn btn-danger me-1" style="float: right">Delete</button>
                                </form>
                            </td>
                        </tr>  
                        @php
                            $i++;
                        @endphp  
                                      
                    @endforeach
                    </tbody>
                </table>
                {{ $user->links() }}
                {{-- <div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example23_previous"><a href="#" aria-controls="example23" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example23" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example23" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example23" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example23" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example23" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example23" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example23_next"><a href="#" aria-controls="example23" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div> --}}
            </div>
        </div>
    </div>
</div>
@endsection