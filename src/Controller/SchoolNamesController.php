<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SchoolNames Controller
 *
 */
class SchoolNamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SchoolNames->find();
        $schoolNames = $this->paginate($query);

        $this->set(compact('schoolNames'));
    }

    /**
     * View method
     *
     * @param string|null $id School Name id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolName = $this->SchoolNames->get($id, contain: []);
        $this->set(compact('schoolName'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolName = $this->SchoolNames->newEmptyEntity();
        if ($this->request->is('post')) {
            $schoolName = $this->SchoolNames->patchEntity($schoolName, $this->request->getData());
            if ($this->SchoolNames->save($schoolName)) {
                $this->Flash->success(__('The school name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school name could not be saved. Please, try again.'));
        }
        $this->set(compact('schoolName'));
    }

    /**
     * Edit method
     *
     * @param string|null $id School Name id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolName = $this->SchoolNames->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolName = $this->SchoolNames->patchEntity($schoolName, $this->request->getData());
            if ($this->SchoolNames->save($schoolName)) {
                $this->Flash->success(__('The school name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school name could not be saved. Please, try again.'));
        }
        $this->set(compact('schoolName'));
    }

    /**
     * Delete method
     *
     * @param string|null $id School Name id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolName = $this->SchoolNames->get($id);
        if ($this->SchoolNames->delete($schoolName)) {
            $this->Flash->success(__('The school name has been deleted.'));
        } else {
            $this->Flash->error(__('The school name could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
