<?php
declare(strict_types=1);

namespace App\Test\TestCase\Form;

use App\Form\ProjectForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ProjectForm Test Case
 */
class ProjectFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\ProjectForm
     */
    protected $Project;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->Project = new ProjectForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Project);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
