@extends('layouts.master')
@section('contents')
    Admin Dashboard
    {{Auth::user()->name}}
    <br><br>
    <h5>User List</h5>
    <div class="container">
        <div class="col-sm-12">
            <table class="table-responsive" id="table" width="100%">
                <thead>
                <tr>
                    {{--<th class="text-center">{{__('ID')}}</th>--}}
                    <th class="text-center">{{__('Name')}}</th>
                    <th class="text-center">{{__('Email')}}</th>
                    <th class="text-center">{{__('Actions')}}</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>

    @push('scripts')
    <script>
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 10,
            bLengthChange: true,
            responsive:true,
            ajax: '{{route('admin.dashboard.yajra')}}',
            order:[0,'asc'],
            autoWidth:false,
            language: {
                paginate: {
                    next: 'Next &#8250;',
                    previous: '&#8249; Previous'
                },
                search: "_INPUT_",
                searchPlaceholder: "Search..."
            },
            columns: [
                // {"data": "id"},
                {"data": "name"},
                {"data": "email"},
                {"data": "actions"}
            ]
        });
    </script>
    @endpush
@endsection
