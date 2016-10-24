<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MateriaHorario Controller
 *
 * @property \App\Model\Table\MateriaHorarioTable $MateriaHorario
 */
class MateriaHorarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $materiaHorario = $this->paginate($this->MateriaHorario);

        $this->set(compact('materiaHorario'));
        $this->set('_serialize', ['materiaHorario']);
    }

    /**
     * View method
     *
     * @param string|null $id Materia Horario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materiaHorario = $this->MateriaHorario->get($id, [
            'contain' => []
        ]);

        $this->set('materiaHorario', $materiaHorario);
        $this->set('_serialize', ['materiaHorario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materiaHorario = $this->MateriaHorario->newEntity();
        if ($this->request->is('post')) {
            $materiaHorario = $this->MateriaHorario->patchEntity($materiaHorario, $this->request->data);
            if ($this->MateriaHorario->save($materiaHorario)) {
                $this->Flash->success(__('The materia horario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materia horario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('materiaHorario'));
        $this->set('_serialize', ['materiaHorario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materia Horario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materiaHorario = $this->MateriaHorario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiaHorario = $this->MateriaHorario->patchEntity($materiaHorario, $this->request->data);
            if ($this->MateriaHorario->save($materiaHorario)) {
                $this->Flash->success(__('The materia horario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The materia horario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('materiaHorario'));
        $this->set('_serialize', ['materiaHorario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materia Horario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materiaHorario = $this->MateriaHorario->get($id);
        if ($this->MateriaHorario->delete($materiaHorario)) {
            $this->Flash->success(__('The materia horario has been deleted.'));
        } else {
            $this->Flash->error(__('The materia horario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
