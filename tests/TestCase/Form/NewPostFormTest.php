<?php
declare(strict_types=1);

namespace App\Test\TestCase\Form;

use App\Form\NewPostForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\NewPostForm Test Case
 */
class NewPostFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\NewPostForm
     */
    protected $NewPost;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->NewPost = new NewPostForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->NewPost);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Form\NewPostForm::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
