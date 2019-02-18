<?php
/**
 * Created by PhpStorm.
 * User: gauthierbosson
 * Date: 06/02/2019
 * Time: 18:50
 */

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     itemOperations={
 *      "get",
 *       "put",
 *       "delete"
 *     },
 *     collectionOperations={
 *     "get",
 *     "post"
 *     }
 * )
 * @ORM\Table(
 *     name="user"
 * )
 * @ORM\Entity()
 * Class User
 * @package App\Entity
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @var int
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=145,nullable=false)
     * @var string
     */
    private $name;
    /**
     * @ORM\Column(type="string",length=100,nullable=false)
     * @var string
     */
    private $firstname;
    /**
     * @ORM\Column(type="integer",length=3,nullable=false)
     * @var int
     */
    private $age;
    /**
     * @ORM\Column(type="string",length=45,nullable=false)
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     */
    private $sexe;

    /**
     * @ORM\Column(type="string",length=145,nullable=false)
     * @var string
     */
    private $email;


    /**
     * @ORM\Column(type="string",  length=5, nullable=true)
     * @var string
     */
    private $yearsmoking;


    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $consumtabac;

    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $cigarettepaquet;

    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $pricepaquet;

    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $tarlevel;

    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $nicotinelevel;

    /* Getter and setter */


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isSexe(): bool
    {
        return $this->sexe;
    }

    /**
     * @param bool $sexe
     */
    public function setSexe(bool $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getYearsmoking(): string
    {
        return $this->yearsmoking;
    }

    /**
     * @param string $yearsmoking
     */
    public function setYearsmoking(string $yearsmoking): void
    {
        $this->yearsmoking = $yearsmoking;
    }

    /**
     * @return int
     */
    public function getConsumtabac(): int
    {
        return $this->consumtabac;
    }

    /**
     * @param int $consumtabac
     */
    public function setConsumtabac(int $consumtabac): void
    {
        $this->consumtabac = $consumtabac;
    }

    /**
     * @return int
     */
    public function getCigarettepaquet(): int
    {
        return $this->cigarettepaquet;
    }

    /**
     * @param int $cigarettepaquet
     */
    public function setCigarettepaquet(int $cigarettepaquet): void
    {
        $this->cigarettepaquet = $cigarettepaquet;
    }

    /**
     * @return int
     */
    public function getPricepaquet(): int
    {
        return $this->pricepaquet;
    }

    /**
     * @param int $pricepaquet
     */
    public function setPricepaquet(int $pricepaquet): void
    {
        $this->pricepaquet = $pricepaquet;
    }

    /**
     * @return int
     */
    public function getTarlevel(): int
    {
        return $this->tarlevel;
    }

    /**
     * @param int $tarlevel
     */
    public function setTarlevel(int $tarlevel): void
    {
        $this->tarlevel = $tarlevel;
    }

    /**
     * @return int
     */
    public function getNicotinelevel(): int
    {
        return $this->nicotinelevel;
    }

    /**
     * @param int $nicotinelevel
     */
    public function setNicotinelevel(int $nicotinelevel): void
    {
        $this->nicotinelevel = $nicotinelevel;
    }















}
