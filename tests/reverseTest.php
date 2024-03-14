<?php

include "../EditorClass.php";
use PHPUnit\Framework\TestCase;
class reverseTest extends TestCase
{
    private Editor $object;
    protected function setUp():void
    {
        $this->object = new Editor();
    }
    public function testReverse()
    {
        $this->assertEquals("driht-trap Tac  esuOh dsa'-dsa.DsA nac't",$this->object->Reverse("third-part Cat  houSe asd'-asd.AsD can't"));
    }
    public function testDoesStringMatchFormat()
    {
        $this->assertStringMatchesFormat('%s',$this->object->Reverse("third-part Cat  houSe asd'-asd.AsD can't"));
    }
    }
