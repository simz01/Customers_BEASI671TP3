<?php
App::uses('AppController', 'Controller');
/**
 * Adresses Controller
 *
 * @property Adress $Adress
 * @property PaginatorComponent $Paginator
 */
class AdressesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Adress->recursive = 0;
		$this->set('adresses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
if (AuthComponent::user('role') != 'admin' && AuthComponent::user('role') != 'author' ) {
			throw new ForbiddenException("You're not allowed to do this. Only admins & authors");
		}
		if (!$this->Adress->exists($id)) {
			throw new NotFoundException(__('Invalid adress'));
		}
		$options = array('conditions' => array('Adress.' . $this->Adress->primaryKey => $id));
		$this->set('adress', $this->Adress->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	if (AuthComponent::user('role') != 'admin' && AuthComponent::user('role') != 'author' ) {
			throw new ForbiddenException("You're not allowed to do this. Only admins & authors");
		}
		if ($this->request->is('post')) {
			$this->Adress->create();
			if ($this->Adress->save($this->request->data)) {
				$this->Session->setFlash(__('The adress has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adress could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Adress->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	if (AuthComponent::user('role') != 'admin' && AuthComponent::user('role') != 'author' ) {
			throw new ForbiddenException("You're not allowed to do this. Only admins & authors");
		}
		if (!$this->Adress->exists($id)) {
			throw new NotFoundException(__('Invalid adress'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adress->save($this->request->data)) {
				$this->Session->setFlash(__('The adress has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adress could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adress.' . $this->Adress->primaryKey => $id));
			$this->request->data = $this->Adress->find('first', $options);
		}
		$customers = $this->Adress->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	if (AuthComponent::user('role') != 'admin') {
			throw new ForbiddenException("You're not allowed to do this. Only admins");
		}
		$this->Adress->id = $id;
		if (!$this->Adress->exists()) {
			throw new NotFoundException(__('Invalid adress'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Adress->delete()) {
			$this->Session->setFlash(__('The adress has been deleted.'));
		} else {
			$this->Session->setFlash(__('The adress could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Adress->recursive = 0;
		$this->set('adresses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Adress->exists($id)) {
			throw new NotFoundException(__('Invalid adress'));
		}
		$options = array('conditions' => array('Adress.' . $this->Adress->primaryKey => $id));
		$this->set('adress', $this->Adress->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Adress->create();
			if ($this->Adress->save($this->request->data)) {
				$this->Session->setFlash(__('The adress has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adress could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->Adress->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Adress->exists($id)) {
			throw new NotFoundException(__('Invalid adress'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adress->save($this->request->data)) {
				$this->Session->setFlash(__('The adress has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adress could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adress.' . $this->Adress->primaryKey => $id));
			$this->request->data = $this->Adress->find('first', $options);
		}
		$customers = $this->Adress->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Adress->id = $id;
		if (!$this->Adress->exists()) {
			throw new NotFoundException(__('Invalid adress'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Adress->delete()) {
			$this->Session->setFlash(__('The adress has been deleted.'));
		} else {
			$this->Session->setFlash(__('The adress could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
