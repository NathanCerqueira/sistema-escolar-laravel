<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class CourseRepository implements Contracts\CourseRepositoryInterface
{
    private $model;

    public function __construct(Course $model)
    {
        $this->model = $model;
    }


    /**
     * @return array
     */
    public function getAllCourses(): Collection
    {
        return $this->model->all();
    }

    /**
     * @return array
     */
    public function getCourseBySlug(): Collection
    {
        // TODO: Implement getCourseById() method.
    }

    /**
     * @return bool
     */
    public function createNewCourse(): bool
    {
        // TODO: Implement createNewCourse() method.
    }

    /**
     * @return bool
     */
    public function updateCourse(): bool
    {
        // TODO: Implement updateCourse() method.
    }

    /**
     * @return bool
     */
    public function deleteCourse(): bool
    {
        // TODO: Implement deleteCourse() method.
    }
}
