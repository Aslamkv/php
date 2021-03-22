<?php

declare(strict_types=1);

use Example\App;
use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase {
  public function testCanCreateApp(): void {
    $this->assertInstanceOf(
      App::class,
      new App()
    );
  }
}
