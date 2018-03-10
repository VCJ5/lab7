<?php
use PHPUnit\Framework\TestCase;

class TasksTest  extends TestCase {
    
    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('Tasks');
        $this->CI->load->model('Task');
        $this->task = new Task();
    }
    
    function testMoreUncompleted()
    {
        // add 6 fruits
        foreach ($array as $value) 
        {
            $task = new Fruit();
            $task->id = $i;
            $this->bowl->add($fruit);
        }
        // make sure we're there
        $this->assertEquals(6,$this->bowl->size());
        // make sure we can't add a 7th
        $fruit = new Fruit();
        $fruit->id = 7;
        $this->expectException(Exception::class);
        $this->bowl->add($fruit);
    }
}