<?php

namespace App\Repositories\Contracts;

interface EnrollmentRepositoryInterface
{

    public function getAllEnrollments():array;

    public function getEnrollmentById():array;

    public function createNewEnrollment():bool;

    public function updateEnrollment():bool;

    public function deleteEnrollment():bool;

}
