<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\BadRequestException;
use Cake\Network\Exception\NotFoundException;

class DisplayErrorMessageComponent extends Component
{

   public function getErrorMessage($entity,$statusCode)
   {
   	try
   	{
   	if($entity->getErrors()) {

               $controller = $this->_registry->getController();
                $error_msg = [];

                foreach( $entity->errors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[] = $error;
                        }
                    }else{
                        $error_msg[] = $errors;
                    }
                }
                // if(!empty($error_msg)){                   
                //   $controller->set('errors', [
                //       'message' => $error_msg[0],
                //       'code' => (string)$statusCode
                //   ]);
                // }
                 if(!empty($error_msg)){                   
                  $controller->set([
                      'message' => $error_msg[0],
                      'code' => (string)$statusCode
                  ]);
                }
               $this->response->statusCode($statusCode);
               return true;  
           }
           else
           {
               return false;
           }
   	}
   	catch (BadRequestException $e) {            
           throw new BadRequestException($e->getMessage(),400);   
       } 
   }

   public function displayCustomMessage($message, $statusCode)
   {
       $controller = $this->_registry->getController();
       $controller->set( [
            'message' => $message, 
            'code' => (string)$statusCode
          ]);
        $this->response->statusCode($statusCode);      
      return false;
   }
}