<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Versions Controller
 *
 * @property \App\Model\Table\VersionsTable $Versions
 * @method \App\Model\Entity\Version[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VersionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $versions = $this->paginate($this->Versions);

        $this->set(compact('versions'));
    }

    /**
     * View method
     *
     * @param string|null $id Version id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('version'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $version = $this->Versions->newEmptyEntity();
        if ($this->request->is('post')) {
            $version = $this->Versions->patchEntity($version, $this->request->getData());
            if ($this->Versions->save($version)) {
                $this->Flash->success(__('The version has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The version could not be saved. Please, try again.'));
        }
        $this->set(compact('version'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Version id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $version = $this->Versions->patchEntity($version, $this->request->getData());
            if ($this->Versions->save($version)) {
                $this->Flash->success(__('The version has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The version could not be saved. Please, try again.'));
        }
        $this->set(compact('version'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Version id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $version = $this->Versions->get($id);
        if ($this->Versions->delete($version)) {
            $this->Flash->success(__('The version has been deleted.'));
        } else {
            $this->Flash->error(__('The version could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
