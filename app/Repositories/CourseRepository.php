<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository implements Contracts\CourseRepositoryInterface
{
    protected $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }


    /**
     * @return array
     */
    public function getAllCourses(): array
    {
        // TODO: Implement getAllCourses() method.
    }

    /**
     * @return array
     */
    public function getCourseById(): array
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
