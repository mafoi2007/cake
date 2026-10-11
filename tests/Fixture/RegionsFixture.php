<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegionsFixture
 */
class RegionsFixture extends TestFixture
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
                'french_region_name' => 'Lorem ipsum dolor sit amet',
                'english_region_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-10-11 10:19:19',
                'modified' => '2026-10-11 10:19:19',
            ],
        ];
        parent::init();
    }
}
