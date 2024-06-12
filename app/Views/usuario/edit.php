<div class="container mt-5">
    <div class="row ">
        <div class="col-3"></div>
        <div class="col-6 bg-dark text-white p-4" data-bs-theme='dark'>
    
    <?=form_open('Usuario/salvar')?>
    <input type="hidden" id='id' name='id' value='<?=$usuario['id']?>'>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome</label>
        </div>
        <div class="col-10">
            <input value='<?=$usuario['nome']?>' class='form-control' name='nome' id='nome' type="text">
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="email">E-mail</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$usuario['email']?>' type="email" id='email' name='email'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$usuario['telefone']?>' type="text" id='telefone' name='telefone'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <button type="button" class="btn btn-outline-secondary">Cancelar</button>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <?=anchor('Usuario/excluir/'.$usuario['id'],
                    'Excluir',
                    ['class'=>'btn btn-outline-danger']
                    )?>
            </div>
        </div>
    </div>
    <?=form_close()?>
    </div>
    <div class="col-3"></div>
    </div>
</div>
