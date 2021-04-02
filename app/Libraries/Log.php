<?php 

namespace App\Libraries;

class Log
{
    public function __construct()
    {
        
    }

    public function exceptionHandler(\Throwable $exception)
    {
        
        $exception_json = $this->getException($exception);

        // echo "<pre>";
        header('content-type:application/json');
        echo (json_encode($exception_json));
        die();

    }

    private function getException(\Throwable $exception)
    {
        $exception_json = new \stdClass();
        $exception_json->title   = get_class($exception);
        $exception_json->type    = get_class($exception);
        $exception_json->message = $exception->getMessage() ?? '(null)';
        $exception_json->file  = $exception->getFile();
        $exception_json->line  = $exception->getLine();
        $exception_json->trace = $exception->getTrace();
        $exception_json->previous = $exception->getPrevious() != null ? $this->getException($exception->getPrevious()) : '{}';
        
        return $exception_json;
    }
    
}
