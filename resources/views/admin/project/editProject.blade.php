@extends('layouts.master')

@section('title')

    EMS-Project Edit
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">

                <!--  start of form inside the  modal  -->
                <form action="{{url('projectUpdate/'.$project->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text"  name= "title"  value="{{$project->title}}"   class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea  name="description" value="{{$project->description}}"  class="form-control"   id="message-text">{{$project->description}}</textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="/project"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
                        <button type="submit" class="btn btn-success">update Project</button>
                    </div>
                </form>
                <!--  end of form inside the  modal  -->

                </div>
            </div>
        </div>
    </div>

    </div>


@endsection

