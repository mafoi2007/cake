<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartmentsFixture
 */
class DepartmentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'french_department_name' => 'Lorem ipsum dolor sit amet',
                'english_department_name' => 'Lorem ipsum dolor sit amet',
                'region_id' => 1,
                'created' => '2026-10-11 10:19:35',
                'modified' => '2026-10-11 10:19:35',
            ],
        ];
        parent::init();
    }
}
