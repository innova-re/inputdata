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


}
