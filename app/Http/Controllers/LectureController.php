<?php
/**
 * @author CodeRi13 <ruto1924@gmail.com>
 * @since 2017-06-28
 */

namespace App\Http\Controllers;

class LectureController extends Controller {
    public function lectures()
    {
        return view('lecture.list');
    }

    public function lecture($id)
    {

    }

    public function appliesLecture() {
        return view('lecture.applies', [
            'lectures' => [
                [
                    'teacher_name' => '호',
                    'lecture_name' => '호',
                    'max_persons' => '호',
                    'min_persons' => '호',
                ]
            ]
        ]);
    }
}
