<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EditoraModel;

class Editora extends BaseController
{
    private $editoraModel;
    public function __construct(){
        $this->editoraModel = new EditoraModel();
    }
    public function index()
    {
        $dados = $this->editoraModel->findAll();
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('editora/index',['listaEditoras' => $dados]);
        echo view('_partials/footer');
    }
    public function cadastrar(){
        $editora = $this->request->getPost();
        $this->editoraModel->save($editora);
        return redirect()->to('editora/index');
    }
    public function editar($id){
        $dados = $this->editoraModel->find($id);
        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('editora/edit',['editora' => $dados]);
        echo view('_partials/footer');
    }
    public function salvar(){
        $editora = $this->request->getPost();
        $this->editoraModel->save($editora);
        return redirect()->to('editora/index');
    }
    public function excluir($id){
        $this->editoraModel->delete($id);
        return redirect()->to('editora/index');
    }
}