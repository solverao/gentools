<?php

namespace Semovicdmx\Gentools\Services\Validations;

use Semovicdmx\Gentools\Services\Service;

class GenValidation extends Service
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

    public function errors(){
        return $this->errors;
    }

    public function responses(){
        return $this->responses;
    }

    public function error($key){
        return $this->errors[$key] ?? null;
    }

    public function response($key){
        return $this->responses[$key] ?? null;
    }
}
