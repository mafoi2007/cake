<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchoolYearsFixture
 */
class SchoolYearsFixture extends TestFixture
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
                'school_year_name' => 'Lorem ipsu',
                'school_year_status' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-10-11 09:23:47',
                'modified' => '2026-10-11 09:23:47',
            ],
        ];
        parent::init();
    }
}
