<?php

namespace App\Repositories;

use App\Models\Enrollment;

class EnrollmentRepository implements Contracts\EnrollmentRepositoryInterface
{
    private $model;

    public function __construct(Enrollment $model)
    {
        $this->model = $model;
    }

    /**
     * @return array
     */
    public function getAllEnrollments(): array
    {
        // TODO: Implement getAllEnrollments() method.
    }

    /**
     * @return array
     */
    public function getEnrollmentById(): array
    {
        // TODO: Implement getEnrollmentById() method.
    }

    /**
     * @return bool
     */
    public function createNewEnrollment(): bool
    {
        // TODO: Implement createNewEnrollment() method.
    }

    /**
     * @return bool
     */
    public function updateEnrollment(): bool
    {
        // TODO: Implement updateEnrollment() method.
    }

    /**
     * @return bool
     */
    public function deleteEnrollment(): bool
    {
        // TODO: Implement deleteEnrollment() method.
    }
}
