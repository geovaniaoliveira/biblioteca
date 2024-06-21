    <div class="container">
        <h2>Livro</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Novo
        </button>
    <table class="table">
    </div>
    <thead>
       <tr>
        <td>ID</td>
        <td>Quantidades Disponivel</td>
        <td>Status</td>
        <td>Obra</td>
    </thead>
    <TBody>
        <?php foreach($listaLivros as $l) :?>
            <tr>
                <td>
                    <?=$l['id']?>
                </td>    
                <td>
                    <?=$l['disponivel']?>
                </td>
                <td>
                    <?=$l['status']?>
                </td>
                <td>
                <?php foreach($listaObras as $obra) : ?>
                    <?php if($obra['id'] == $l['id_obra']) : ?>
                        <?=$obra['titulo']?> 
                    <?php endif; ?>
                <?php endforeach; ?>
                </td>
                    <td>
                    <?=anchor("Livro/editar/".$l['id']," ",["class"=>"fas fa-edit btn btn-primary"])?>
                    <?=anchor("Livro/excluir/".$l["id"]," ",["class"=>"fas fa-trash-alt btn btn-outline-danger"])?>
               </td>
            </tr>
        <?php endforeach?>
    </TBody>
</table>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Livro/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="disponivel">Disponivel</label>
                    <input id="disponivel" name="disponivel" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input id="status" name="status" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="obra">Obra</label>
                    <select name="id_obra" id="id_obra" class="form-control">
                        <option value="">Selecione uma Obra</option>
                        <?php foreach($listaObras as $obra):?>
                            <option value="<?=$obra['id']?>"><?=$obra['titulo']?></option>
                        <?php endforeach?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>