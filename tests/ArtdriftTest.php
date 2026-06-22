<?php
/**
 * Tests for ArtDrift
 */

use PHPUnit\Framework\TestCase;
use Artdrift\Artdrift;

class ArtdriftTest extends TestCase {
    private Artdrift $instance;

    protected function setUp(): void {
        $this->instance = new Artdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Artdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
