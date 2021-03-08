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
        $this->request->allowMethod(['post']);
        $response = $this->response;
        $response = $response->withType('application/json');

        $event = $this->Events->newEntity([
            'name' => $this->request->getData('eventName'),
            'frequency' => $this->request->getData('frequency'),
            'start_date_time' => $this->request->getData('startDateTime'),
            'end_date_time' => $this->request->getData('endDateTime'),
            'duration' => $this->request->getData('duration'),
            'users' => $this->request->getData('invitees')
        ]);

        if (!$event->hasErrors()) {
            $this->Events->save($event);
            $response = $response->withStringBody(json_encode($event));
        } else {
            $response = $response->withStatus(400);
        }

        return $response; 
    }
}
