<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Department Entity
 *
 * @property int $id
 * @property string $french_department_name
 * @property string $english_department_name
 * @property int $region_id
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Region $region
 */
class Department extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'french_department_name' => true,
        'english_department_name' => true,
        'region_id' => true,
        'created' => true,
        'modified' => true,
        'region' => true,
    ];
}
