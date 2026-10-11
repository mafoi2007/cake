<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolYearsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolYearsTable Test Case
 */
class SchoolYearsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolYearsTable
     */
    protected $SchoolYears;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SchoolYears',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SchoolYears') ? [] : ['className' => SchoolYearsTable::class];
        $this->SchoolYears = $this->getTableLocator()->get('SchoolYears', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SchoolYears);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SchoolYearsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
