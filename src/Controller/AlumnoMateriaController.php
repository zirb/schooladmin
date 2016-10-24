<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AlumnoMateria Controller
 *
 * @property \App\Model\Table\AlumnoMateriaTable $AlumnoMateria
 */
class AlumnoMateriaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $alumnoMateria = $this->paginate($this->AlumnoMateria);

        $this->set(compact('alumnoMateria'));
        $this->set('_serialize', ['alumnoMateria']);
    }

    /**
     * View method
     *
     * @param string|null $id Alumno Materium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnoMaterium = $this->AlumnoMateria->get($id, [
            'contain' => []
        ]);

        $this->set('alumnoMaterium', $alumnoMaterium);
        $this->set('_serialize', ['alumnoMaterium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnoMaterium = $this->AlumnoMateria->newEntity();
        if ($this->request->is('post')) {
            $alumnoMaterium = $this->AlumnoMateria->patchEntity($alumnoMaterium, $this->request->data);
            if ($this->AlumnoMateria->save($alumnoMaterium)) {
                $this->Flash->success(__('The alumno materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumno materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alumnoMaterium'));
        $this->set('_serialize', ['alumnoMaterium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumno Materium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnoMaterium = $this->AlumnoMateria->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnoMaterium = $this->AlumnoMateria->patchEntity($alumnoMaterium, $this->request->data);
            if ($this->AlumnoMateria->save($alumnoMaterium)) {
                $this->Flash->success(__('The alumno materium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumno materium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alumnoMaterium'));
        $this->set('_serialize', ['alumnoMaterium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumno Materium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnoMaterium = $this->AlumnoMateria->get($id);
        if ($this->AlumnoMateria->delete($alumnoMaterium)) {
            $this->Flash->success(__('The alumno materium has been deleted.'));
        } else {
            $this->Flash->error(__('The alumno materium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
