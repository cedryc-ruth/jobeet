<?php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 *
 * @ORM\Table(name="category_affiliate")
 * @ORM\Entity(repositoryClass="Ens\JobeetBundle\Repository\CategoryAffiliateRepository")
 */
class CategoryAffiliate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="category_affiliates")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Affiliate", inversedBy="category_affiliates")
     * @ORM\JoinColumn(name="affiliate_id", referencedColumnName="id")
     */
    private $affiliateId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return CategoryAffiliate
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set affiliateId
     *
     * @param integer $affiliateId
     *
     * @return CategoryAffiliate
     */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    /**
     * Get affiliateId
     *
     * @return int
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }
}

