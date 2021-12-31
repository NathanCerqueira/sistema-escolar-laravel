<?php

namespace App\Repositories\Contracts;


use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;


interface CourseRepositoryInterface
{

    public function getAllCourses(): Collection;

    public function createNewCourse(CourseRequest $request);

    public function updateCourse():bool;

    public function deleteCourse():bool;

}
