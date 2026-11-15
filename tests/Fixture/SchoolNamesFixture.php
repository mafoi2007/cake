<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchoolNamesFixture
 */
class SchoolNamesFixture extends TestFixture
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
                'school_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-11-07 19:22:29',
                'modified' => '2026-11-07 19:22:29',
            ],
        ];
        parent::init();
    }
}
