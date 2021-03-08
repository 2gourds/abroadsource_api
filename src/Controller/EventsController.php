<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Hash;

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

        // Prepare event entity from POST data
        $event = $this->Events->newEntity([
            'name' => $this->request->getData('eventName'),
            'frequency' => $this->request->getData('frequency'),
            'start_date_time' => $this->request->getData('startDateTime'),
            'end_date_time' => $this->request->getData('endDateTime'),
            'duration' => $this->request->getData('duration'),
            'users' => [
                '_ids' => $this->request->getData('invitees')
            ]
        ], ['associated' => ['Users']]);

        // Validate. Save the record if no errors are found.
        if (!$event->hasErrors()) {
            $this->Events->save($event);
            $response = $response->withStringBody(json_encode([
                'id' => $event->id,
                'eventName' => $event->name,
                'frequency' => $event->frequency,
                'startDateTime' => $event->start_date_time,
                'endDateTime' => $event->end_date_time,
                'duration' => $event->duration,
                'invitees' => Hash::extract($event->users, '{n}.id'),
            ]));
        } else {
            // Set response status code as 400 (Bad Request) if the data is malformed
            $response = $response->withStatus(400);
        }

        return $response; 
    }
}
