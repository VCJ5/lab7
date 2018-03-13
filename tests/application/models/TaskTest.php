<?php
//declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TaskTest extends TestCase
{
    function setUp() {
            $this->CI = &get_instance();
            $this->CI->load->model('task');
            
            $this->item->id = 1;
            $this->item->task = 'TaskTest';
            $this->item->priority = '3';
            $this->item->size = '3';
            $this->item->group = '3';
            $this->item->deadline = '21180308';
            $this->item->status = '3';
            $this->item->flag = '';  
    }

    
    function testId()
    {
        $this->assertTrue($this->item->id > 0);
        $count = 0;
        foreach ($this->all() as $task) 
        {
            assertEquals($this->item->id, $count++);
        }
    }
    
    function testTask()
    {
        $this->assertTrue($this->item->size != 0);
    }
    
    function testPriority()
    {
        $this->assertTrue(0 < $this->item->priority && $this->item->priority < 4);
    }
   
    function testSize()
    {
        $this->assertTrue(0 < $this->item->size);
    }
    
    function testGroup()
    {
        $this->assertTrue(0 < $this->item->group);
    }
    
    function testDeadline()
    {
        
        $this->assertTrue(date("Ymd"+1) < $this->item->deadline);
    }
    
    function testStatus()
    {
        $this->assertTrue(0 < $this->item->status && $this->item->status < 4);
    }
}

