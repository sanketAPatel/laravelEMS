@extends('layouts.master')

@section('title')

    EMS-dashboard panel
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Registered Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead class=" text-primary">
                            <th>
                                id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Usertype
                            </th>
                            <th class="text-right">
                                EDIT
                            </th>
                            <th class="text-right">
                                DELETE
                            </th>

                            </thead>
                            <tbody>

                            @foreach($users as $row)
                            <tr>
                                <td>
                                    {{$row->id}}
                                </td>
                                <td>
                                    {{$row->name}}
                                </td>
                                <td>
                                    {{$row->phone}}
                                </td>
                                <td>
                                    {{$row->email}}
                                </td>
                                <td>
                                    {{$row->usertype}}
                                </td>
                                <td class="text-right">
                                    <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                                </td>
                                <td class="text-right">
                                    <form action="/role-delete/{{$row->id}}" method="post">
                                       {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                    <button type="submit"  class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection


@section('scripts')

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">

    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



    <!--  start of  Added for pagination and search  -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <!--  start of  Added for pagination and search  -->


@endsection
