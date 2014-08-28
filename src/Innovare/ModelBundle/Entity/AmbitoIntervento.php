<?php

namespace Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmbitoIntervento
 *
 * @ORM\Table(name="ambito_intervento", indexes={@ORM\Index(name="FK_ambito_intervento_macroarea2", columns={"id_macroarea"})})
 * @ORM\Entity
 */
class AmbitoIntervento
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=250, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=250, nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=250, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Innovare\ModelBundle\Entity\Macroarea
     *
     * @ORM\ManyToOne(targetEntity="Innovare\ModelBundle\Entity\Macroarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_macroarea", referencedColumnName="id")
     * })
     */
    private $idMacroarea;



    /**
     * Set nome
     *
     * @param string $nome
     * @return AmbitoIntervento
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return AmbitoIntervento
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return AmbitoIntervento
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
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
     * Set idMacroarea
     *
     * @param \Innovare\ModelBundle\Entity\Macroarea $idMacroarea
     * @return AmbitoIntervento
     */
    public function setIdMacroarea(\Innovare\ModelBundle\Entity\Macroarea $idMacroarea = null)
    {
        $this->idMacroarea = $idMacroarea;

        return $this;
    }

    /**
     * Get idMacroarea
     *
     * @return \Innovare\ModelBundle\Entity\Macroarea 
     */
    public function getIdMacroarea()
    {
        return $this->idMacroarea;
    }
}
