<?php
class Job {

    private $company;

    function getCompany() {
        return $this->company;
    }

    function setCompany($company) {
        $this->company = $company;
    }

    
    public function slugify($texte) {
        return str_replace(' ', '-', strtolower($texte));
    }

    public function getCompanySlug() {
        return $this->slugify($this->getCompany());
    }

}