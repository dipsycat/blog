<?php

namespace Dipsycat\PostBundle\Service;

use Doctrine\ORM\EntityManager;

class PostService {
    
    private $em;
    private $repository;
    public function __construct(EntityManager $em, $post) {
        $this->em = $em;
        $this->repository = $this->em->getRepository($post);
    }
    
    public function getPosts() {
        return $this->repository->findBy([], ['created' => 'DESC']);
    }
}
