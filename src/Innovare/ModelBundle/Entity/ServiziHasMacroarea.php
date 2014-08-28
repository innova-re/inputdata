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


}
