<?php

namespace Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaboratorioHasMacroarea
 *
 * @ORM\Table(name="laboratorio_has_macroarea", indexes={@ORM\Index(name="FK_laboratorio_has_macroarea_laboratoriolink1", columns={"id_laboratorio"}), @ORM\Index(name="FK_laboratorio_has_macroarea_macroarealink2", columns={"id_macroarea"}), @ORM\Index(name="FK_laboratorio_has_macroarea_ambito5", columns={"id_ambito_intervento"})})
 * @ORM\Entity
 */
class LaboratorioHasMacroarea
{
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
     * @var \Innovare\ModelBundle\Entity\Laboratorio
     *
     * @ORM\ManyToOne(targetEntity="Innovare\ModelBundle\Entity\Laboratorio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_laboratorio", referencedColumnName="id_laboratorio")
     * })
     */
    private $idLaboratorio;

    /**
     * @var \Innovare\ModelBundle\Entity\AmbitoIntervento
     *
     * @ORM\ManyToOne(targetEntity="Innovare\ModelBundle\Entity\AmbitoIntervento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ambito_intervento", referencedColumnName="id")
     * })
     */
    private $idAmbitoIntervento;



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
     * @return LaboratorioHasMacroarea
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

    /**
     * Set idLaboratorio
     *
     * @param \Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return LaboratorioHasMacroarea
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

    /**
     * Set idAmbitoIntervento
     *
     * @param \Innovare\ModelBundle\Entity\AmbitoIntervento $idAmbitoIntervento
     * @return LaboratorioHasMacroarea
     */
    public function setIdAmbitoIntervento(\Innovare\ModelBundle\Entity\AmbitoIntervento $idAmbitoIntervento = null)
    {
        $this->idAmbitoIntervento = $idAmbitoIntervento;

        return $this;
    }

    /**
     * Get idAmbitoIntervento
     *
     * @return \Innovare\ModelBundle\Entity\AmbitoIntervento 
     */
    public function getIdAmbitoIntervento()
    {
        return $this->idAmbitoIntervento;
    }
}
