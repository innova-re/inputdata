<?php

namespace Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziHasMacroarea
 *
 * @ORM\Table(name="servizi_has_macroarea")
 * @ORM\Entity
 */
class ServiziHasMacroarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_servizio", type="integer", nullable=false)
     */
    private $idServizio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_macroarea", type="integer", nullable=false)
     */
    private $idMacroarea;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ambito_intervento", type="integer", nullable=false)
     */
    private $idAmbitoIntervento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idServizio
     *
     * @param integer $idServizio
     * @return ServiziHasMacroarea
     */
    public function setIdServizio($idServizio)
    {
        $this->idServizio = $idServizio;

        return $this;
    }

    /**
     * Get idServizio
     *
     * @return integer 
     */
    public function getIdServizio()
    {
        return $this->idServizio;
    }

    /**
     * Set idMacroarea
     *
     * @param integer $idMacroarea
     * @return ServiziHasMacroarea
     */
    public function setIdMacroarea($idMacroarea)
    {
        $this->idMacroarea = $idMacroarea;

        return $this;
    }

    /**
     * Get idMacroarea
     *
     * @return integer 
     */
    public function getIdMacroarea()
    {
        return $this->idMacroarea;
    }

    /**
     * Set idAmbitoIntervento
     *
     * @param integer $idAmbitoIntervento
     * @return ServiziHasMacroarea
     */
    public function setIdAmbitoIntervento($idAmbitoIntervento)
    {
        $this->idAmbitoIntervento = $idAmbitoIntervento;

        return $this;
    }

    /**
     * Get idAmbitoIntervento
     *
     * @return integer 
     */
    public function getIdAmbitoIntervento()
    {
        return $this->idAmbitoIntervento;
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
}
