<div class="container">
    <h2>Usuário</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Novo
    </button>
    <!-- Tabela de Usuários -->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>E-MAIL</td>
                <td>TELEFONE</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaUsuarios as $u) : ?>
                <tr>
                    <td><?=$u['id']?></td>
                    <td>
                        <?=anchor("Usuario/editar/".$u['id'],$u['nome'])?>
                    </td>
                    <td><?=$u['email']?></td>
                    <td><?=$u['telefone']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Usuario/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class='form-control' type="text" id='nome' name='nome'>
                </div>  
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class='form-control' type="text" id='email' name='email'>
                </div>  
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input class='form-control' type="text" id='telefone' name='telefone'>
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