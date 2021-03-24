@extends('layouts.master')

@section('title')

    EMS-projects page
@endsection

@section('content')
    <!-- Modal code is here -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

                <!--  start of form inside the  modal  -->
             <form action="/save-project" method="post">
                 {{csrf_field()}}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text"  name= "title"    class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea  name="description"  class="form-control"   id="message-text"></textarea>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Project</button>
                </div>
                </form>
                <!--  end of form inside the  modal  -->
            </div>
        </div>
    </div>

    <!-- modal code ends  -->


    <div class="row">
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Project Table
             <button type="button" class="btn btn-primary float-right"  data-toggle="modal" data-target="#exampleModal" >Add Project </button>
                    </h4>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Id
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Descriptions
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>

                            </thead>
                            <tbody>


        @foreach($projects as $data)

                <tr>
                    <td>
                        {{$data->id}}
                    </td>
                    <td>
                        {{$data->title}}
                    </td>
                    <td>
                        {{$data->description}}
                    </td>

                    <td>
                        <a href="{{url('project/'.$data->id)}}"> <button type="button" class="btn btn-success">Edit</button></a>
                    </td>

                    <!-- Delete button  code is here -->
                    <td>
                    <form action="{{url('projectDelete/'.$data->id)}}" method ="post">
                        {{csrf_field()}}
                        {{Method_field('DELETE')}}

                        <button type="submit" class="btn btn-danger">Delete</button>
                        <!-- Delete button  code is here -->
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endsection
