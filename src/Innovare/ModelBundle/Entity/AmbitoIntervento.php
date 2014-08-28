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


}
