<?php

namespace AutoSerwisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tag")
 */
class Tag extends AbstractTaxonomy {
    
    /**
     * @ORM\ManyToMany(
     *      targetEntity = "Post",
     *      mappedBy = "tags"
     * )
     */
    protected $posts;
}
