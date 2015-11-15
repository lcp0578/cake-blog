<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ArticlesDatas Controller
 *
 * @property \App\Model\Table\ArticlesDatasTable $ArticlesDatas
 */
class ArticlesDatasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Types']
        ];
        $this->set('articlesDatas', $this->paginate($this->ArticlesDatas));
        $this->set('_serialize', ['articlesDatas']);
    }

    /**
     * View method
     *
     * @param string|null $id Articles Data id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articlesData = $this->ArticlesDatas->get($id, [
            'contain' => ['Articles', 'Types']
        ]);
        $this->set('articlesData', $articlesData);
        $this->set('_serialize', ['articlesData']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlesData = $this->ArticlesDatas->newEntity();
        if ($this->request->is('post')) {
            $articlesData = $this->ArticlesDatas->patchEntity($articlesData, $this->request->data);
            if ($this->ArticlesDatas->save($articlesData)) {
                $this->Flash->success(__('The articles data has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The articles data could not be saved. Please, try again.'));
            }
        }
        $articles = $this->ArticlesDatas->Articles->find('list', ['limit' => 200]);
        $types = $this->ArticlesDatas->Types->find('list', ['limit' => 200]);
        $this->set(compact('articlesData', 'articles', 'types'));
        $this->set('_serialize', ['articlesData']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Articles Data id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlesData = $this->ArticlesDatas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlesData = $this->ArticlesDatas->patchEntity($articlesData, $this->request->data);
            if ($this->ArticlesDatas->save($articlesData)) {
                $this->Flash->success(__('The articles data has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The articles data could not be saved. Please, try again.'));
            }
        }
        $articles = $this->ArticlesDatas->Articles->find('list', ['limit' => 200]);
        $types = $this->ArticlesDatas->Types->find('list', ['limit' => 200]);
        $this->set(compact('articlesData', 'articles', 'types'));
        $this->set('_serialize', ['articlesData']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Articles Data id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlesData = $this->ArticlesDatas->get($id);
        if ($this->ArticlesDatas->delete($articlesData)) {
            $this->Flash->success(__('The articles data has been deleted.'));
        } else {
            $this->Flash->error(__('The articles data could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
