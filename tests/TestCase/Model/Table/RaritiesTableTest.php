<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaritiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaritiesTable Test Case
 */
class RaritiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RaritiesTable
     */
    protected $Rarities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Rarities',
        'app.Cards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rarities') ? [] : ['className' => RaritiesTable::class];
        $this->Rarities = $this->getTableLocator()->get('Rarities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Rarities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RaritiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
