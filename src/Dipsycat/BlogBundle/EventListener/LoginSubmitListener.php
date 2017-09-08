<?php

namespace Dipsycat\BlogBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LoginSubmitListener implements EventSubscriberInterface {

    private $router;
    
    function __construct(UrlGeneratorInterface $router) {
        $this->router = $router;
    }
    
    public static function getSubscribedEvents() {
        return array(
            SecurityEvents::INTERACTIVE_LOGIN => 'onLoginSubmitSuccess',
        );
    }
    
    public function onLoginSubmitSuccess(InteractiveLoginEvent $event) {
        $user = $event->getAuthenticationToken()->getUser();
        $request = $event->getRequest();
        if ($user->hasRole('ROLE_ADMIN')) {
            $url = $this->router->generate('dipsycat_blog_admin');
            $request->request->set('_target_path', $url);
        }
        
    }

}
