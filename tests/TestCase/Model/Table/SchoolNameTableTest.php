<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolNameTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolNameTable Test Case
 */
class SchoolNameTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolNameTable
     */
    protected $SchoolName;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SchoolName',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SchoolName') ? [] : ['className' => SchoolNameTable::class];
        $this->SchoolName = $this->getTableLocator()->get('SchoolName', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SchoolName);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SchoolNameTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
