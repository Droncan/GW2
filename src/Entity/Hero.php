<?php
/**
 * Created by PhpStorm.
 * User: Jonas Ostermann
 * Date: 04.11.2018
 * Time: 16:44
 */

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Hero
 * @package src\Entity
 * @ORM\Entity
 * @ORM\Table(name="hero")
 */
class Hero
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $race;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $class;

    /**
     * @var int
     * @ORM\Column(type="string")
     */
    private $life;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $gender;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Hero
     */
    public function setId(int $id): Hero
    {
        $this->id = $id;
        return $this;
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
     * @return Hero
     */
    public function setName(string $name): Hero
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * @param string $race
     * @return Hero
     */
    public function setRace(string $race): Hero
    {
        $this->race = $race;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     * @return Hero
     */
    public function setClass(string $class): Hero
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * @param int $life
     * @return Hero
     */
    public function setLife(int $life): Hero
    {
        $this->life = $life;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return Hero
     */
    public function setGender(string $gender): Hero
    {
        $this->gender = $gender;
        return $this;
    }


}