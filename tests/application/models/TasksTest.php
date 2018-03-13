<?php
use PHPUnit\Framework\TestCase;

class TasksTest  extends TestCase {
    
    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('Tasks');
        $this->CI->load->model('Task');
        $this->tasklist = new Tasks();
    }
    
    function testMoreUncompleted()
    {
        // add 6 fruits
        foreach ($array as $value) 
        {
            $task = new Task();
            $task->id = $i;
            $this->tasklist->add($task);
        }
        // make sure we're there
        $this->assertEquals(14,$this->tasklist->size());
        // make sure we can't add a 7th
        $task = new Task();
        $task->id = 7;
        $this->expectException(Exception::class);
        $this->tasklist->add($task);
    }
}