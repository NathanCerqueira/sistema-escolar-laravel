<?php

namespace App\Repositories;

use App\Models\Enrollment;

class EnrollmentRepository implements Contracts\EnrollmentRepositoryInterface
{
    protected $enrollment;

    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
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
