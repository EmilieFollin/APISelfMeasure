<?php
/**
 * Created by PhpStorm.
 * User: emili
 * Date: 07/02/2019
 * Time: 16:48
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
 *     name="podometer"
 * )
 * @ORM\Entity()
 * Class Podometer
 * @package App\Entity
 */


class Podometer
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @var int
     */
    private $id;


    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $step;

    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $km;

    /**
     * @ORM\Column(type="integer",length=20,nullable=true)
     * @var int
     *
     */
    private $floorascended;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     *
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Podometer", inversedBy="User")
     * @ORM\Column(type="integer",length=200)
     * @var int
     */
    private $userid;



    /*Getter and setter */


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
     * @return int
     */
    public function getStep(): int
    {
        return $this->step;
    }

    /**
     * @param int $step
     */
    public function setStep(int $step): void
    {
        $this->step = $step;
    }

    /**
     * @return int
     */
    public function getKm(): int
    {
        return $this->km;
    }

    /**
     * @param int $km
     */
    public function setKm(int $km): void
    {
        $this->km = $km;
    }

    /**
     * @return int
     */
    public function getFloorascended(): int
    {
        return $this->floorascended;
    }

    /**
     * @param int $floorascended
     */
    public function setFloorascended(int $floorascended): void
    {
        $this->floorascended = $floorascended;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getUserid(): int
    {
        return $this->userid;
    }

    /**
     * @param int $userid
     */
    public function setUserid(int $userid): void
    {
        $this->userid = $userid;
    }







}
