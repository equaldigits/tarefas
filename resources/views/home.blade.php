@extends('layouts.app')

@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Numero
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
                            <tr >
                                <td>1</td>
                                <td>
                                    Tarefa
                                </td>
                                <td>
                                    foi muito boa
                                </td>
                                    
                                <td>
                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#update_task_model">Editar</button>
                                    <button class="btn btn-danger btn-xs">Apagar</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="modal fade" tabindex="-1" role="dialog" id="add_task_model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Adicionar Nova Tarefa</h4>
                    </div>
                    <div class="modal-body">
 
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" id="name" placeholder="nome da tarefa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição:</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                                      placeholder="descrição da tarefa" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="checkbox">Completa: &nbsp</label>
                            <input type="checkbox"></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Submeter</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
 
        <div class="modal fade" tabindex="-1" role="dialog" id="update_task_model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Actualizar Tarefa</h4>
                    </div>
                    <div class="modal-body">
 
 
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" placeholder="nome da tarefa" class="form-control"
>
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição:</label>
                            <textarea cols="30" rows="5" class="form-control"
                                      placeholder="descriçao da tarefa"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button"  class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
@endsection