<?php

namespace Solverao\Gentools;

class GenValidation
{
    private $errors;
    private $responses;

    function __construct()
    {
        $this->errors = array();
        $this->responses = array();
    }

    public function unset(){
        $this->errors = array();
        $this->responses = array();
    }

    public function anyError(){
        if(count($this->errors) > 0){
            return true;
        }
        return false;
    }

    public function anyResponse(){
        if(count($this->responses) > 0){
            return true;
        }
        return false;
    }

    public function getAll(){
        $all['errors'] = $this->errors;
        $all['responses'] = $this->responses;
        return $all;
    }

    public function setError($message,$key = null){
        if(is_null($key)){
            array_push($this->errors,$message);
        }else{
            $this->errors[$key] = $message;
        }
        return $this->errors;
    }

    public function setResponse($data,$key = null){
        if(is_null($key)){
            array_push($this->responses,$data);
        }else{
            $this->responses[$key] = $data;
        }
        
        return $this->responses;
    }

    public function errors($key = null){
        return is_null($key) ? $this->errors : $this->errors[$key] ?? null;
    }

    public function responses($key = null){
        return is_null($key) ? $this->responses : $this->responses[$key] ?? null;
    }
}
