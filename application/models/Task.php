<?php
/**
 * Implements magic setter methods for each property of the Tasks model 
 */
require_once APPPATH . 'core/Entity.php';

class Task extends Entity {
    /**
     * Evaluates and sets the Task property
     */
    private $task;
    private $priority;
    private $size;
    private $assignee;
    
    public function setTask($value)
    {
        if (!ctype_alnum(trim(str_replace(' ','',$value)))) {
            throw new Exception('does not consist of alpha, numeric and spaces');
        }
        if (strlen($value) > 10) {
            throw new Exception('task name is too long');
        }
        
        $this->task = $value;
    }

    public function setPriority($value) 
    {
        if (!is_int($value)) {
            throw new Exception('Must be an integer');
        }
        if ($value < 0 || $value > 9) {
            throw new Exception('Must be between 0 to 9');
        }
        $this->priority = $value;
    }
    
    public function setSize($value) 
    {
        if (!is_int($value)) {
            throw new Exception('Must be an integer');
        }
        if ($value < 0 || $value > 20) {
            throw new Exception('Must be between 0 to 20');
        }
        $this->size = $value;
    }
    
    public function setAssignee($value)
    {
        $allowed = ['Ken', 'Yan', 'Inochi', "ken", "yan", "inochi"];
        if (!in_array($value, $allowed))
            throw new Exception('The assignee must be in our group');
        $this->assignee = $value;
    }
    
    public function getTask() {
        return $this->task;
    }
    
    public function getPriority() {
        return $this->priority;
    }
    
    public function getSize() {
        return $this->size;
    }
    
    public function getAssignee() {
        return $this->assignee;
    }
} 