<?php

namespace Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servizi
 *
 * @ORM\Table(name="servizi", indexes={@ORM\Index(name="FK_servizi_laboratorio1", columns={"id_laboratorio"})})
 * @ORM\Entity
 */
class Servizi
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=1100, nullable=false)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=250, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="strumenti_utilizzati", type="string", length=250, nullable=false)
     */
    private $strumentiUtilizzati;

    /**
     * @var string
     *
     * @ORM\Column(name="note_strumenti_utilizzati", type="string", length=250, nullable=true)
     */
    private $noteStrumentiUtilizzati;

    /**
     * @var string
     *
     * @ORM\Column(name="parole_chiave", type="string", length=250, nullable=true)
     */
    private $paroleChiave;

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
     * @var \Innovare\ModelBundle\Entity\Laboratorio
     *
     * @ORM\ManyToOne(targetEntity="Innovare\ModelBundle\Entity\Laboratorio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_laboratorio", referencedColumnName="id_laboratorio")
     * })
     */
    private $idLaboratorio;



    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return Servizi
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
     * Set nome
     *
     * @param string $nome
     * @return Servizi
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
     * Set strumentiUtilizzati
     *
     * @param string $strumentiUtilizzati
     * @return Servizi
     */
    public function setStrumentiUtilizzati($strumentiUtilizzati)
    {
        $this->strumentiUtilizzati = $strumentiUtilizzati;

        return $this;
    }

    /**
     * Get strumentiUtilizzati
     *
     * @return string 
     */
    public function getStrumentiUtilizzati()
    {
        return $this->strumentiUtilizzati;
    }

    /**
     * Set noteStrumentiUtilizzati
     *
     * @param string $noteStrumentiUtilizzati
     * @return Servizi
     */
    public function setNoteStrumentiUtilizzati($noteStrumentiUtilizzati)
    {
        $this->noteStrumentiUtilizzati = $noteStrumentiUtilizzati;

        return $this;
    }

    /**
     * Get noteStrumentiUtilizzati
     *
     * @return string 
     */
    public function getNoteStrumentiUtilizzati()
    {
        return $this->noteStrumentiUtilizzati;
    }

    /**
     * Set paroleChiave
     *
     * @param string $paroleChiave
     * @return Servizi
     */
    public function setParoleChiave($paroleChiave)
    {
        $this->paroleChiave = $paroleChiave;

        return $this;
    }

    /**
     * Get paroleChiave
     *
     * @return string 
     */
    public function getParoleChiave()
    {
        return $this->paroleChiave;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Servizi
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
     * Set idLaboratorio
     *
     * @param \Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return Servizi
     */
    public function setIdLaboratorio(\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio = null)
    {
        $this->idLaboratorio = $idLaboratorio;

        return $this;
    }

    /**
     * Get idLaboratorio
     *
     * @return \Innovare\ModelBundle\Entity\Laboratorio 
     */
    public function getIdLaboratorio()
    {
        return $this->idLaboratorio;
    }
}
