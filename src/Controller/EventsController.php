<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Schedule method
     *
     * @return \Cake\Http\Response|null
     */
    public function schedule()
    {
        $this->RequestHandler->renderAs($this, 'json');
        $this->response->withType('application/json');
        $this->set('_serialize', true);
    }
}
