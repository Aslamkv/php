<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Example\App;

final class AppTest extends TestCase{
  public static function setUpBeforeClass(): void{
  }

  protected function setUp():void{
  }

  public function testCanCreateApp(): void{
    $app=new App();
    $this->assertInstanceOf(
      App::class,
      $app
    );
  }

  protected function tearDown():void{
  }

  public static function tearDownAfterClass():void{
  }

}
