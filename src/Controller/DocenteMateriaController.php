<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocenteMateria Controller
 *
 * @property \App\Model\Table\DocenteMateriaTable $DocenteMateria
 */
class DocenteMateriaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $docenteMateria = $this->paginate($this->DocenteMateria);

        $this->set(compact('docenteMateria'));
        $this->set('_serialize', ['docenteMateria']);
    }

    /**
     * View method
     *
     * @param string|null $id Docente Materium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $docenteMaterium = $this->DocenteMateria->get($id, [
            'contain' => []
        ]);

        $this->set('docenteMaterium', $docenteMaterium);
        $this->set('_serialize', ['docenteMaterium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $docenteMaterium = $this->DocenteMateria->newEntity();
        if ($this->request->is('post')) {
            $docenteMaterium = $this->DocenteMateria->patchEntity($docenteMaterium, $this->request->data);
            if ($this->DocenteMateria->save($docenteMaterium)) {
                $this->Flash->success(__('The docente materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The docente materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('docenteMaterium'));
        $this->set('_serialize', ['docenteMaterium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Docente Materium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $docenteMaterium = $this->DocenteMateria->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $docenteMaterium = $this->DocenteMateria->patchEntity($docenteMaterium, $this->request->data);
            if ($this->DocenteMateria->save($docenteMaterium)) {
                $this->Flash->success(__('The docente materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The docente materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('docenteMaterium'));
        $this->set('_serialize', ['docenteMaterium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Docente Materium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $docenteMaterium = $this->DocenteMateria->get($id);
        if ($this->DocenteMateria->delete($docenteMaterium)) {
            $this->Flash->success(__('The docente materium has been deleted.'));
        } else {
            $this->Flash->error(__('The docente materium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
