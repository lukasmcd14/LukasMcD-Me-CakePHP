<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectBodyTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectBodyTable Test Case
 */
class ProjectBodyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectBodyTable
     */
    protected $ProjectBody;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProjectBody',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProjectBody') ? [] : ['className' => ProjectBodyTable::class];
        $this->ProjectBody = $this->getTableLocator()->get('ProjectBody', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProjectBody);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProjectBodyTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
