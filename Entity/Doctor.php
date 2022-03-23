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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    /**
     * @param string|null $photo
     */
    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return Speciality
     */
    public function getSpeciality(): Speciality
    {
        return $this->speciality;
    }

    /**
     * @param Speciality $speciality
     */
    public function setSpeciality(Speciality $speciality): void
    {
        $this->speciality = $speciality;
    }

    public function getFullName(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

}
