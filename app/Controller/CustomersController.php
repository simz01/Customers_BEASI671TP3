<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 */
class CustomersController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
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
                  if ($this->request->is('ajax')) {
            $term = $this->request->query('term');
            $customerNames = $this->Customer->getCustomerNamesNames($term);
         $this->set(compact('customerNames'));
         $this->set('_serialize', 'customerNames');
         }
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
                            // check if file has been uploaded, if so get the file path
                            if (!empty($this->Customer->data['Customer']['filepath']) && is_string($this->Customer->data['Customer']['filepath'])) {
                            $this->request->data['Customer']['filepath'] = $this->Customer->data['Customer']['filepath'];
                            }
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		}
		$adresses = $this->Customer->Adress->find('list');
		$paymentInformations = $this->Customer->PaymentInformation->find('list');
		$this->set(compact('adresses', 'paymentInformations'));
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
                if ($this->request->is('ajax')) {
                    $term = $this->request->query('term');
                    $customerNames = $this->Customer->getCustomerNamesNames($term);
                    $this->set(compact('customerNames'));
                    $this->set('_serialize', 'customerNames');
                }
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
		$adresses = $this->Customer->Adress->find('list');
		$paymentInformations = $this->Customer->PaymentInformation->find('list');
		$this->set(compact('adresses', 'paymentInformations'));
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
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('The customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$adresses = $this->Customer->Adress->find('list');
		$paymentInformations = $this->Customer->PaymentInformation->find('list');
		$this->set(compact('adresses', 'paymentInformations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
		}
		$adresses = $this->Customer->Adress->find('list');
		$paymentInformations = $this->Customer->PaymentInformation->find('list');
		$this->set(compact('adresses', 'paymentInformations'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('The customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
