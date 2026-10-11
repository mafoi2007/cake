<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserTypeFixture
 */
class UserTypeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'user_type';
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
                'name' => 'Lorem ipsum dolor sit amet',
                'code' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-07-29 11:40:53',
                'modified' => '2026-07-29 11:40:53',
            ],
        ];
        parent::init();
    }
}
