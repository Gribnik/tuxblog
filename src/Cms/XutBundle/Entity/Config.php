<?php
namespace Cms\XutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="cms_config")
 * @ORM\Entity()
 */
class Config
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="title_id", type="string", length=30)
     */
    private $titleId; /* TODO: add index */
    /**
     * @ORM\Column(name="type", type="string", length=10)
     */
    private $type;
    /**
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $node;
    /**
     * @ORM\Column(name="name", type="string", length=80)
     */
    private $name;
    /**
     * @ORM\Column(name="value", type="string", length=200)
     */
    private $value;

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
     * Set titleId
     *
     * @param string $titleId
     * @return Config
     */
    public function setTitleId($titleId)
    {
        $this->titleId = $titleId;
    
        return $this;
    }

    /**
     * Get titleId
     *
     * @return string 
     */
    public function getTitleId()
    {
        return $this->titleId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Config
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Config
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
     * Set value
     *
     * @param string $value
     * @return Config
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}