<?php
namespace Drupal\super_hero\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
class HeroInitSubscriber implements EventSubscriberInterface {
    public function __construct(){

    }
    public function onRequest (){
        //var_dump ('calling callback on request');
        //exit;
    }
    public static function getSubscribedEvents(){
        $events[KernelEvents::REQUEST][] = ['onRequest'];
        return $events;
    }
}
