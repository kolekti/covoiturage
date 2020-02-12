<?php
namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Trajet;


class TrajetTest extends TestCase {
    protected $trajet;
    
    public function setUp()  {
        $this->trajet = new Trajet(); 
    }
    
    public function testTrajet() {
        $this->assertInstanceOf(Trajet::class, $this->trajet);
        $this->assertNull($this->trajet->getId());
    }
}
