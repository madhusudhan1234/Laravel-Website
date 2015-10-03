<?php namespace App\Repo\Repositories\StudentMessage;
/**
 * Created by PhpStorm.
 * User: Madhu Sudhan
 * Date: 8/21/15
 * Time: 9:58 PM
 */
use App\StudentMessage as StudentMessage;
class StudentMessageRepositories implements StudentMessageInterface{
    protected $student_message;
    public function __construct(StudentMessage $student_message)
    {
        $this->student_message = $student_message;
    }
    public function getLatestPublishedMessage()
    {
        return StudentMessage::latest('published_at')->Published()->get();
    }
} 