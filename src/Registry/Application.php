<?php
namespace Sinergi\Registry;

class Application
{
    /**
     * @var array
     */
    private $applications = [];

    public function run()
    {
        foreach ($this->applications as $application) {
            $this->runApplication($application);
        }
    }

    /**
     * @param ApplicationInterface $application
     */
    public function add(ApplicationInterface $application)
    {
        $this->applications[spl_object_hash($application)] = $application;
    }

    /**
     * @param ApplicationInterface $application
     */
    private function runApplication(ApplicationInterface $application)
    {
        $application->run();
    }
}