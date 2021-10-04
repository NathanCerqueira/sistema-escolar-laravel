<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository implements Contracts\StudentRepositoryInterface
{
    private $model;

    public function __construct(Student $model)
    {
        $this->model = $model;
    }

    /**
     * @return array
     */
    public function getAllStudents(): array
    {
        // TODO: Implement getAllStudents() method.
    }

    /**
     * @return array
     */
    public function getStudentById(): array
    {
        // TODO: Implement getStudentById() method.
    }

    /**
     * @return bool
     */
    public function createNewStudent(): bool
    {
        // TODO: Implement createNewStudent() method.
    }

    /**
     * @return bool
     */
    public function updateStudent(): bool
    {
        // TODO: Implement updateStudent() method.
    }

    /**
     * @return bool
     */
    public function deleteStudent(): bool
    {
        // TODO: Implement deleteStudent() method.
    }
}
