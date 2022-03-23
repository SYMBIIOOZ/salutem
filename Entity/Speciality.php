<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Speciality
 *
 */
#[ORM\Table(name: 'speciality')]
#[ORM\Entity]
class Speciality
{
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'name', type: 'string', length: 255, nullable: false)]
    private string $name;
}
