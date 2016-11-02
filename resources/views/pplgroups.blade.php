@extends('layouts.app')

@section('content')
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Modal -->
    <div class="modal " id="ag-ppl-group-editing-div" tabindex="-1" role="dialog" aria-labelledby="ag-ppl-group-editing-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ag-ppl-group-editing-label">
                        <span id="ag-ppl-group-editing-title-action"></span> группы обучающихся</h4>
                </div>
                <div class="modal-body">
                    <form id="ag-ppl-group-editing-form">
                        <input type="hidden" name="_action" value=""> <!-- i u d -->
                        <input type="hidden" name="_method" value="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>
                            <div class="form-group">
                                <label for="ag-ppl-group-editing-form-pplgrp-nmber">Номер группы:</label>
                                <input class="form-control" id="ag-ppl-group-editing-form-pplgrp-nmber"
                                       name="ag-ppl-group-editing-form-pplgrp-nmber" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ag-ppl-group-editing-form-pplgrp-code">Код группы:</label>
                                <input class="form-control" id="ag-ppl-group-editing-form-pplgrp-code"
                                       name="ag-ppl-group-editing-form-pplgrp-code">
                            </div>
                            <div class="form-group">
                                <label for="ag-ppl-group-editing-form-pplgrp-name">Наименование:</label>
                                <input class="form-control" id="ag-ppl-group-editing-form-pplgrp-name"
                                       name="ag-ppl-group-editing-form-pplgrp-name">
                            </div>
                            <div class="form-group alert alert-danger" id="ag-ppl-group-editing-form-pplgrp-oppresult-div">

                                <label for="ag-ppl-group-editing-form-pplgrp-oppresult">Результат операции:</label>
                                <input class="form-control" id="ag-ppl-group-editing-form-pplgrp-oppresult"
                                       name="ag-ppl-group-editing-form-pplgrp-oppresult" readonly>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ag-ppl-group-editing-form-button-cancel" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" id="ag-ppl-group-editing-form-button-save" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var agPplGroup = {};
    </script>

    <div class="container">
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
                        <tr id="ag-pplgroups-tr-id-{{$group->id}}" class="ag-pplgroups-tr">
                            <td>{{$group->id}}</td>
                            <td>{{$group->getCode()}}</td>
                            <td>{{$group->getName()}}</td>
                            <script>
                                agPplGroup['{{$group->id}}'] = {id: '{{$group->id}}', code : '{{$group->getCode()}}', name: '{{$group->getName()}}'};
                            </script>
                            <td>
                                <button class="btn btn-warning btn-xs btn-ag-dsbl-on-edit btn-ag-edit" type="button" data-ag-pplgroupid="{{$group->id}}" onclick="agEditPplgroup({{$group->id}});">
                                    <i class="glyphicon glyphicon-edit"></i> Редактировать
                                </button>
                                <button type="button" class="btn btn-danger btn-xs btn-ag-dsbl-on-edit btn-ag-remove" data-ag-pplgroupid="{{$group->id}}" onclick="agRemovePplgroup({{$group->id}});">
                                    <i class="glyphicon glyphicon-remove"></i> Удалить
                                </button>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-xs btn-ag-dsbl-on-edit dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="row">
            <a id="create-pplgroup" type="button" class="btn btn-ag-dsbl-on-edit btn-success btn-xs pull-right btn-ag-create" >
                <i class="glyphicon glyphicon-plus"></i> Create</a>
        </div>
    </div>
@endsection
