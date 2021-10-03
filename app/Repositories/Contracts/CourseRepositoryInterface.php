<?php

namespace App\Repositories\Contracts;


interface CourseRepositoryInterface
{

    public function getAllCourses():array;

    public function getCourseById():array;

    public function createNewCourse():bool;

    public function updateCourse():bool;

    public function deleteCourse():bool;

}
