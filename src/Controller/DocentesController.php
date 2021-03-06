<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Docentes Controller
 *
 * @property \App\Model\Table\DocentesTable $Docentes
 */
class DocentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $docentes = $this->paginate($this->Docentes);

        $this->set(compact('docentes'));
        $this->set('_serialize', ['docentes']);
    }

    /**
     * View method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => []
        ]);

        $this->set('docente', $docente);
        $this->set('_serialize', ['docente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docente = $this->Docentes->newEntity();
        if ($this->request->is('post')) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->data);
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('The docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The docente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('docente'));
        $this->set('_serialize', ['docente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docente = $this->Docentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docente = $this->Docentes->patchEntity($docente, $this->request->data);
            if ($this->Docentes->save($docente)) {
                $this->Flash->success(__('The docente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The docente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('docente'));
        $this->set('_serialize', ['docente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Docente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docente = $this->Docentes->get($id);
        if ($this->Docentes->delete($docente)) {
            $this->Flash->success(__('The docente has been deleted.'));
        } else {
            $this->Flash->error(__('The docente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
