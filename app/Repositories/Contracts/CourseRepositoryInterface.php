<?php

namespace App\Repositories\Contracts;


use Illuminate\Database\Eloquent\Collection;

interface CourseRepositoryInterface
{

    public function getAllCourses():Collection;

    public function getCourseBySlug():Collection;

    public function createNewCourse():bool;

    public function updateCourse():bool;

    public function deleteCourse():bool;

}
