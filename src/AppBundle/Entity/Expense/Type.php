<?php

namespace AppBundle\Entity\Expense;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="expense_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Expense\TypeRepository")
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Expense", mappedBy="type")
     */
    private $expenses;

    public function __construct()
    {
        $this->expenses = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Type
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Type
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add expenses
     *
     * @param \AppBundle\Entity\Expense $expenses
     * @return Type
     */
    public function addExpense(\AppBundle\Entity\Expense $expenses)
    {
        $this->expenses[] = $expenses;

        return $this;
    }

    /**
     * Remove expenses
     *
     * @param \AppBundle\Entity\Expense $expenses
     */
    public function removeExpense(\AppBundle\Entity\Expense $expenses)
    {
        $this->expenses->removeElement($expenses);
    }

    /**
     * Get expenses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string) $this->name."(".$this->code.")";
    }
}
