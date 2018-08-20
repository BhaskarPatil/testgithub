<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\BadRequestException;
use Cake\Network\Exception\NotFoundException;

class DisplayMessagesComponent extends Component
{

   //  public function getMessage($messageFor, $pageName)
   // {
   //     // ...
   //  try
   //  {
   //  $pageInfo = TableRegistry::get('page_masters')->find()->where([
   //  'is_active' => true, 'page_name' => $pageName
   //  ])->first();

   //         if($pageInfo)
   //         {
   //      $messageInfo = TableRegistry::get('message_masters')->find('all')
   //      ->where([
   //                     'message_for' => $messageFor,
   //                     'page_master_id' => $pageInfo->id,
   //                     'is_active' => true
   //                 ])->first();


   //             if (empty($messageInfo)) {
   //                     return '';
   //             }
   //         }
   //         else
   //         {
   //             return '';
   //         }

   //         return $messageInfo->message;
   //  }
   //  catch (BadRequestException $e) {            
   //         throw new BadRequestException($e->getMessage(),400);   
   //     } 
   // }
}
