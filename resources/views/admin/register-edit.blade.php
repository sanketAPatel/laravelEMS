@extends('layouts.master')

@section('title')

    Edit employee
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Employee Role:=</h4>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                    </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <form action="/role-register-update/{{$users->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("PUT") }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <label>
                                        <input type="text" name="uname" value="{{$users->name}}" class="form-control">
                                    </label>

                                </div>

                                <div class="form-group">
                                    <label>Apply Role(Admin/Employee)</label>
                                    <select name="utype" class="form-control">
                                        <option value="admin">admin</option>
                                        <option value="Emp">Employee</option>
                                    </select>

                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role-register">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


@endsection


@section('scripts')


@endsection
