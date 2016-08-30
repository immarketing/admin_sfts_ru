@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">Группы обучающихся</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12" >
                                    <table class="table table-condensed table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>№ группы</th>
                                            <th>Код группы</th>
                                            <th>Наименование</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pplgroups as $group)
                                            <tr id="ag-pplgroups-tr-id-{{$group->id}}">
                                                <td>{{$group->id}}</td>
                                                <td>{{$group->getCode()}}</td>
                                                <td>{{$group->getName()}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Действия.... <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выход</a></li>
                                                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-edit"></i> Редактировать</a></li>
                                                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-eye-open"></i> Смотреть состав</a></li>
                                                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-edit"></i> Редактировать состав</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr id="ag-pplgroups-tr-id-edit">
                                            <form action="" method="POST">
                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td>{{$group->id}}</td>
                                                <td><input type="text" id="title-field" name="title" class="form-control" value=""/></td>
                                                <td><input type="text" id="title-field" name="title" class="form-control" value=""/></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-xs ">Save</button>
                                                    <button type="submit" class="btn btn-danger btn-xs ">Отмена</button>
                                                </td>
                                            </form>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="panel-footer">Panel Footer
                            <a type="button" class="btn btn-success btn-xs pull-right" href="{{ route('tweets.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>                    </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse2">Collapsible panel</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Panel Body</div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse3">Collapsible panel</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Panel Body</div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
