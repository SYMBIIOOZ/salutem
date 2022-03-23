<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 *
 */
#[ORM\Table(name: 'doctor', indexes: [new ORM\Index(name: 'fk_doctor_speciality_idx', columns: ['speciality_id'])])]
#[ORM\Entity]
class Doctor
{
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'first_name', type: 'string', length: 255, nullable: false)]
    private string $firstName;

    #[ORM\Column(name: 'last_name', type: 'string', length: 255, nullable: false)]
    private string $lastName;

    #[ORM\Column(name: 'photo', type: 'string', length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(name: 'description', type: 'text', length: 65535, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'phone', type: 'string', length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(name: 'email', type: 'string', length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\ManyToOne(targetEntity: 'Entity\Speciality')]
    #[ORM\JoinColumn(name: 'speciality_id', referencedColumnName: 'id')]
    private \Entity\Speciality $speciality;


}
