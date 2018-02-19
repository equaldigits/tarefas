@extends('layouts.app')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button data-toggle="modal" data-target="#add_task_model" class="btn btn-primary btn-xs pull-right">
                            + Nova Tarefa
                        </button>
                        &nbspMinhas Tarefas
                    </div>
                    <hr>
 
                    <div class="panel-body ml auto">
                        <hr>
                        <caption class="lead"><strong>Tarefas Completas</strong></caption>
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    ID Tarefa
                                </th>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Descrição
                                </th>

                                <th>
                                    Action
                                </th>
                            </tr>
                            @foreach($completeTasks as $completeTask)        
                            <tr>
                                <td>
                                    {{ $completeTask->id }}
                                </td>
                                <td>
                                    {{ $completeTask->name }}
                                </td>
                                <td>
                                    {{ $completeTask->description }}
                                </td>
                                <td>
                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#update_task_model">Editar</button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_task_model">Apagar</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    <br><br><br>
                    <hr>
                    <caption class="lead"><strong>Tarefas Incompletas</strong></caption>

                        <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                                <th>
                                                    ID Tarefa
                                                </th>
                                                <th>
                                                    Nome
                                                </th>
                                                <th>
                                                    Descrição
                                                </th>
                
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                    @foreach($incompleteTasks as $incompleteTask)        
                                    <tr>
                                        <td>
                                            {{ $incompleteTask->id }}
                                        </td>
                                        <td>
                                            {{ $incompleteTask->name }}
                                        </td>
                                        <td>
                                            {{ $incompleteTask->description }}
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#update_task_model">Editar</button>
                                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_task_model">Apagar</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>




 
@include('layouts.create')
 

@include('layouts.delete')


@include('layouts.update')

@endsection