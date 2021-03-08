<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property int $frequency
 * @property \Cake\I18n\FrozenTime $start_date_time
 * @property \Cake\I18n\FrozenTime|null $end_date_time
 * @property int $duration
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User[] $users
 */
class Event extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'frequency' => true,
        'start_date_time' => true,
        'end_date_time' => true,
        'duration' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
    ];
}
