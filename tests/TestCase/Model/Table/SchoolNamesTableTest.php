<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolNamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolNamesTable Test Case
 */
class SchoolNamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolNamesTable
     */
    protected $SchoolNames;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SchoolNames',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SchoolNames') ? [] : ['className' => SchoolNamesTable::class];
        $this->SchoolNames = $this->getTableLocator()->get('SchoolNames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SchoolNames);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SchoolNamesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
