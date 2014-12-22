<?php
App::uses('AppController', 'Controller');
/**
 * PaymentInformations Controller
 *
 * @property PaymentInformation $PaymentInformation
 * @property PaginatorComponent $Paginator
 */
class PaymentInformationsController extends AppController {

/**
 * Components
 *
 * @var array
 */     public $helpers = array('Js');
	public $components = array('Paginator', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	if (AuthComponent::user('role') != 'admin' && AuthComponent::user('role') != 'author' ) {
			throw new ForbiddenException("You're not allowed to do this. Only admins & authors");
		}
		$this->PaymentInformation->recursive = 0;
		$this->set('paymentInformations', $this->Paginator->paginate());
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
		if (!$this->PaymentInformation->exists($id)) {
			throw new NotFoundException(__('Invalid payment information'));
		}
		$options = array('conditions' => array('PaymentInformation.' . $this->PaymentInformation->primaryKey => $id));
		$this->set('paymentInformation', $this->PaymentInformation->find('first', $options));
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
			$this->PaymentInformation->create();
			if ($this->PaymentInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The payment information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment information could not be saved. Please, try again.'));
			}
		}
		$customers = $this->PaymentInformation->Customer->find('list');
		//$this->set(compact('customers'));
                $categories = $this->PaymentInformation->Subcategory->Category->find('list');
                 //$subcategories = $this->PaymentInformation->Subcategory->Category->find('list');
               // 
               //$categories = $this->PaymentInformation->find('list');
         // $subcategories = $this->PaymentInformation->Subcategory->find('list');
        // $subcategories = $this->request->query->PaymentInformation->Subcategory->find('list');
                       // $subcategories = array('choisir categorie');
                
                //$subcategories = $this->PaymentInformation->Subcategory->Category->find('list');
                       // $subcategories = array('choisir categorie');
                
                
        $this->set(compact('categories', 'subcategories', 'customers'));
        //$this->set(compact('categories', 'subcategories'));
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
		if (!$this->PaymentInformation->exists($id)) {
			throw new NotFoundException(__('Invalid payment information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PaymentInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The payment information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentInformation.' . $this->PaymentInformation->primaryKey => $id));
			$this->request->data = $this->PaymentInformation->find('first', $options);
		}
		$customers = $this->PaymentInformation->Customer->find('list');
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
		$this->PaymentInformation->id = $id;
		if (!$this->PaymentInformation->exists()) {
			throw new NotFoundException(__('Invalid payment information'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PaymentInformation->delete()) {
			$this->Session->setFlash(__('The payment information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The payment information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PaymentInformation->recursive = 0;
		$this->set('paymentInformations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PaymentInformation->exists($id)) {
			throw new NotFoundException(__('Invalid payment information'));
		}
		$options = array('conditions' => array('PaymentInformation.' . $this->PaymentInformation->primaryKey => $id));
		$this->set('paymentInformation', $this->PaymentInformation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PaymentInformation->create();
			if ($this->PaymentInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The payment information has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment information could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->PaymentInformation->Customer->find('list');
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
		if (!$this->PaymentInformation->exists($id)) {
			throw new NotFoundException(__('Invalid payment information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PaymentInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The payment information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentInformation.' . $this->PaymentInformation->primaryKey => $id));
			$this->request->data = $this->PaymentInformation->find('first', $options);
		}
		$customers = $this->PaymentInformation->Customer->find('list');
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
		$this->PaymentInformation->id = $id;
		if (!$this->PaymentInformation->exists()) {
			throw new NotFoundException(__('Invalid payment information'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PaymentInformation->delete()) {
			$this->Session->setFlash(__('The payment information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The payment information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
