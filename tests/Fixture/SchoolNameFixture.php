<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SchoolNameFixture
 */
class SchoolNameFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'school_name';
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
                'created' => '2026-10-12 10:08:06',
                'modified' => '2026-10-12 10:08:06',
            ],
        ];
        parent::init();
    }
}
