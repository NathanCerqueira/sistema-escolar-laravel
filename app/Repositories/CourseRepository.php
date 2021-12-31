<?php

namespace App\Repositories;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class CourseRepository implements Contracts\CourseRepositoryInterface
{
    private $model;

    public function __construct(Course $model)
    {
        $this->model = $model;
    }


    public function getAllCourses(): Collection
    {
        return $this->model->all();
    }


    public function createNewCourse(CourseRequest $request)
    {
        $this->model->title = $request->title;
        $this->model->slug = Str::slug($request->title, '-');
        $this->model->description = $request->description;
        return $this->model->save();
    }

    public function updateCourse(): bool
    {
        return true;
    }

    public function deleteCourse(): bool
    {
        return true;
    }
}
