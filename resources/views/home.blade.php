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
                                            <th class="col-xs-1">№ группы</th>
                                            <th class="col-xs-4">Код группы</th>
                                            <th class="col-xs-4">Наименование</th>
                                            <th class="col-xs-3">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pplgroups as $group)
                                            <tr id="ag-pplgroups-tr-id-{{$group->id}}" >
                                                <td>{{$group->id}}</td>
                                                <td>{{$group->getCode()}}</td>
                                                <td>{{$group->getName()}}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-xs btn-ag-edit" type="button" onclick="agEditPplgroup({{$group->id}});">
                                                        <i class="glyphicon glyphicon-edit"></i> Редактировать
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-ag-remove" onclick="agRemovePplgroup({{$group->id}});">
                                                        <i class="glyphicon glyphicon-remove"></i> Удалить
                                                    </button>
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Состав.... <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-edit"></i> ...редактировать</a></li>
                                                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-eye-open"></i> ...смотреть</a></li>
                                                            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-eye-open"></i> ...обновить по отредактированному</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="ag-pplgroups-tr-id-{{$group->id}}-edit" class="ag-pplgroups-tr-edit">
                                                <form action="" method="POST" id="ag-pplgroups-form-id-{{$group->id}}-edit" name="ag-pplgroups-form-id-{{$group->id}}-edit">
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <td>{{$group->id}}</td>
                                                    <td><input type="text" id="title-field" name="title" class="form-control" value="{{$group->getCode()}}" readonly/></td>
                                                    <td><input type="text" id="title-field" name="title" class="form-control" value="{{$group->getName()}}"/></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-xs ">Сохранить</button>
                                                        <button type="button" class="btn btn-danger btn-xs" onclick="agEditPplgroupCancel({{$group->id}});">Отмена</button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                        <tr id="ag-pplgroups-tr-id-0-create" class="ag-pplgroups-tr-create" >
                                            <form action="" method="POST" id="ag-pplgroups-form-id-0-create" name="ag-pplgroups-form-id-0-create">
                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <td></td>
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
                            <a type="button" class="btn btn-success btn-xs pull-right btn-ag-create" href="{{ route('tweets.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>                    </div>
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
