<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
 class GiteSearch
  {
/**
 * @var int|null
 * @Assert\Range(
 *  min=30,
 *  max=500,
 * minMessage="la valeur minimum est de {{ min }} m²",
 * maxMessage="La valeur maximum est de {{ max }} m²"
 * )
 */
private  $minSurface;
/**
 * @var int|null
 * @Assert\Range(
 *  min=2,
 *  max=12,
 * minMessage="la valeur minimum est de {{ min }} ",
 * maxMessage="Le nombre maximum de chambre est de {{ max }} "
 * )
 */
private  $minChambre;
/**
 * @var int|null
 * @Assert\Range(
 *  min=2,
 *  max=30,
 * minMessage="la valeur minimum est de {{ min }}",
 * maxMessage="Le nombre  maximum de chambre est de {{ max }} "
 * )
 */
private  $minCouchage;

/**
 * @return int|null
 */
public function getMinSurface(): ?int
{

    return $this->minSurface;
}

/**
 * Set the value minSurface
 * 
 * @return self
 */

 public function setMinSurface($minSurface)
 {
    $this->minSurface = $minSurface;
    return $this;

 }

/**
 * @return int|null
 */
public function getMinChambre(): ?int
{

    return $this->minChambre;
}

/**
 * Set the value minChambre
 * 
 * @return self
 */

 public function setMinChambre($minChambre)
 {
    $this->minChambre = $minChambre;
    return $this;

 }

/**
 * @return int|null
 */
public function getMinCouchage(): ?int
{

    return $this->minCouchage;
}

/**
 * Set the value minCouchage
 * 
 * @return self
 */

 public function setMinCouchage($minCouchage)
 {
    $this->minCouchage = $minCouchage;
    return $this;

 }












 }