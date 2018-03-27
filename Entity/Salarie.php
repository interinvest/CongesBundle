<?php

namespace II\Bundle\CongeBundle\Entity;

interface Salarie
{
    public function getDateEntree();
    public function setDateEntree(\DateTime $dateEntree);
    public function getCongeSociete();
    public function setCongeSociete(CongeSociete $congeSociete);
}
