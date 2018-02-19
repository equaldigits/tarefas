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