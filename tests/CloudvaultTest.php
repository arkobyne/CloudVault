<?php
/**
 * Tests for CloudVault
 */

use PHPUnit\Framework\TestCase;
use Cloudvault\Cloudvault;

class CloudvaultTest extends TestCase {
    private Cloudvault $instance;

    protected function setUp(): void {
        $this->instance = new Cloudvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cloudvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
