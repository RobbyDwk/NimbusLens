<?php
/**
 * Tests for NimbusLens
 */

use PHPUnit\Framework\TestCase;
use Nimbuslens\Nimbuslens;

class NimbuslensTest extends TestCase {
    private Nimbuslens $instance;

    protected function setUp(): void {
        $this->instance = new Nimbuslens(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nimbuslens::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
