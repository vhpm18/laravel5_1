@extends('layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Middleware</td>
                                    <td>@Jota</td>
                                </tr>
                                <tr>
                                    <td>Middleware2</td>
                                    <td>@Jota</td>
                                </tr>
                                <tr>
                                    <td>Middleware3</td>
                                    <td>@Jota</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection