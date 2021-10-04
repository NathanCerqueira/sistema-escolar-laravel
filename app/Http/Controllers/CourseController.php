<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CourseRepositoryInterface;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function index()
    {
        return response()->json($this->courseRepository->getAllCourses());
    }
}
