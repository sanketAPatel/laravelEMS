@extends('layouts.master')

@section('title')

    EMS-projects page
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Project Table</h4>
                </div>
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
                            <tr>
                                <td>
                                    sanket
                                </td>
                                <td>
                                    p
                                </td>
                                <td>
                                    Oud-Turnhout
                                </td>
                                <td>
                                <a href="#"> <button type="button" class="btn btn-success">Cancel</button></a>
                                </td>
                                <td>
                                <a href="#"> <button type="button" class="btn btn-danger">Cancel</button></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection


@section('scripts')


@endsection
