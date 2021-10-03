<?php

namespace App\Repositories\Contracts;

interface StudentRepositoryInterface
{

    public function getAllStudents():array;

    public function getStudentById():array;

    public function createNewStudent():bool;

    public function updateStudent():bool;

    public function deleteStudent():bool;

}
