<?php
/**
 * Created by PhpStorm.
 * User: emili
 * Date: 07/02/2019
 * Time: 16:43
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
 *     name="heart"
 * )
 * @ORM\Entity()
 * Class Heart
 * @package App\Entity
 */

class Heart
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
    private $bpm;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     *
     */
    private $date;


    /**
     *
     *  @ORM\ManyToOne(targetEntity="App\Entity\Heart", inversedBy="User")
     * @ORM\Column(type="integer",length=200)
     * @var int
     */
    private $userid;





    // getter & setter


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
    public function getBpm(): int
    {
        return $this->bpm;
    }

    /**
     * @param int $bpm
     */
    public function setBpm(int $bpm): void
    {
        $this->bpm = $bpm;
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
