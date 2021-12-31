<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Repositories\Contracts\CourseRepositoryInterface;
use http\Env\Response;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function getAllCourses()
    {
        dd($this->courseRepository->getAllCourses());
    }

    public function showFormNewCourse()
    {
        return view('Course.formNewCourse');
    }

    public function createNewCourse(CourseRequest $request)
    {
        try {
            if ($this->courseRepository->createNewCourse($request)){
                return response()->json(['Success' => true]);
            }

            return response()->json(['Success' => false]);

        }catch (\Exception $exception){
            return response()->json(['Error' => $exception->getMessage()]);
        }
    }

}
