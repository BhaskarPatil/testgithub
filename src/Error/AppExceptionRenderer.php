<?php

namespace App\Error;

use Cake\Error\ExceptionRenderer;

class AppExceptionRenderer extends ExceptionRenderer
{
    public function missingWidget($error)
    {
        return 'Oops that widget is missing!';
    }

    public function unauthorized($error)
    {
        // do some exception specific here
        $this->controller->set('errors', [
            'message' => $error->getMessage(),
            'code' => (string)$error->getCode()
        ]);
        // $this->controller->set('errors', 
        //     $error->getMessage());

        $this->controller->set('_serialize', ['errors']);
        $this->controller->response->statusCode($error->getCode());

        $template = '';
        return parent::_outputMessage($template);
    }

    public function badrequest($error)
    {
        // do some exception specific here
        $this->controller->set('errors', [
            'message' => $error->getMessage(),
            'code' => (string)$error->getCode()
        ]);
        // $this->controller->set('errors', 
        //     $error->getMessage());

        $this->controller->set('_serialize', ['errors']);
        $this->controller->response->statusCode($error->getCode());

        $template = '';
        return parent::_outputMessage($template);
    }
}