<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GrupoMateria Controller
 *
 * @property \App\Model\Table\GrupoMateriaTable $GrupoMateria
 */
class GrupoMateriaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $grupoMateria = $this->paginate($this->GrupoMateria);

        $this->set(compact('grupoMateria'));
        $this->set('_serialize', ['grupoMateria']);
    }

    /**
     * View method
     *
     * @param string|null $id Grupo Materium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grupoMaterium = $this->GrupoMateria->get($id, [
            'contain' => []
        ]);

        $this->set('grupoMaterium', $grupoMaterium);
        $this->set('_serialize', ['grupoMaterium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grupoMaterium = $this->GrupoMateria->newEntity();
        if ($this->request->is('post')) {
            $grupoMaterium = $this->GrupoMateria->patchEntity($grupoMaterium, $this->request->data);
            if ($this->GrupoMateria->save($grupoMaterium)) {
                $this->Flash->success(__('The grupo materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grupo materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grupoMaterium'));
        $this->set('_serialize', ['grupoMaterium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupo Materium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grupoMaterium = $this->GrupoMateria->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grupoMaterium = $this->GrupoMateria->patchEntity($grupoMaterium, $this->request->data);
            if ($this->GrupoMateria->save($grupoMaterium)) {
                $this->Flash->success(__('The grupo materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grupo materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grupoMaterium'));
        $this->set('_serialize', ['grupoMaterium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupo Materium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grupoMaterium = $this->GrupoMateria->get($id);
        if ($this->GrupoMateria->delete($grupoMaterium)) {
            $this->Flash->success(__('The grupo materium has been deleted.'));
        } else {
            $this->Flash->error(__('The grupo materium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
