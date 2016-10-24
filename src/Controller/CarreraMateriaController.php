<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CarreraMateria Controller
 *
 * @property \App\Model\Table\CarreraMateriaTable $CarreraMateria
 */
class CarreraMateriaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $carreraMateria = $this->paginate($this->CarreraMateria);

        $this->set(compact('carreraMateria'));
        $this->set('_serialize', ['carreraMateria']);
    }

    /**
     * View method
     *
     * @param string|null $id Carrera Materium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carreraMaterium = $this->CarreraMateria->get($id, [
            'contain' => []
        ]);

        $this->set('carreraMaterium', $carreraMaterium);
        $this->set('_serialize', ['carreraMaterium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carreraMaterium = $this->CarreraMateria->newEntity();
        if ($this->request->is('post')) {
            $carreraMaterium = $this->CarreraMateria->patchEntity($carreraMaterium, $this->request->data);
            if ($this->CarreraMateria->save($carreraMaterium)) {
                $this->Flash->success(__('The carrera materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The carrera materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('carreraMaterium'));
        $this->set('_serialize', ['carreraMaterium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrera Materium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carreraMaterium = $this->CarreraMateria->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carreraMaterium = $this->CarreraMateria->patchEntity($carreraMaterium, $this->request->data);
            if ($this->CarreraMateria->save($carreraMaterium)) {
                $this->Flash->success(__('The carrera materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The carrera materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('carreraMaterium'));
        $this->set('_serialize', ['carreraMaterium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrera Materium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carreraMaterium = $this->CarreraMateria->get($id);
        if ($this->CarreraMateria->delete($carreraMaterium)) {
            $this->Flash->success(__('The carrera materium has been deleted.'));
        } else {
            $this->Flash->error(__('The carrera materium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
