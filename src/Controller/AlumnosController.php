<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alumnos Controller
 *
 * @property \App\Model\Table\AlumnosTable $Alumnos
 */
class AlumnosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $alumnos = $this->paginate($this->Alumnos);

        $this->set(compact('alumnos'));
        $this->set('_serialize', ['alumnos']);
    }

    /**
     * View method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumno = $this->Alumnos->get($id, [
            'contain' => []
        ]);

        $this->set('alumno', $alumno);
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumno = $this->Alumnos->newEntity();
        if ($this->request->is('post')) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->data);
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('The alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumno could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumno = $this->Alumnos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->data);
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('The alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumno could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumno = $this->Alumnos->get($id);
        if ($this->Alumnos->delete($alumno)) {
            $this->Flash->success(__('The alumno has been deleted.'));
        } else {
            $this->Flash->error(__('The alumno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
