<?php
use PHPUnit\Framework\TestCase;

/**
 * @covers Job
 */
final class JobTest extends TestCase
{
    private $job;
    
    /**
     * @before
     */
    public function setup() {
        $this->job = new Job();
    }
    
    public function testJobConstruct() {        
        $this->assertInstanceOf(Job::class, $this->job);
    }

    public function testGetCompanySlug() {
        $this->job->setCompany("Star Trek Enterprise");
        $this->assertEquals('star-trek-enterprise',$this->job->getCompanySlug());
        
        $this->job->setCompany("  coup de poing  ");
        $this->assertEquals('coup-de-poing',$this->job->getCompanySlug());
        
        $this->job->setCompany("coup d'oeil");
        $this->assertEquals('coup-d-oeil',$this->job->getCompanySlug());
    }
}