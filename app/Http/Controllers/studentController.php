<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\tracking;
use DateTime;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ch1 = new DateTime('20-01-00 00:00:00');
        $ch2 = new DateTime('20-01-00 00:00:00');
        $ch3 = new DateTime('20-01-00 00:00:00');
        $ch4 = new DateTime('20-01-00 00:00:00');
        $ch5 = new DateTime('20-01-00 00:00:00');
        $ch6 = new DateTime('20-01-00 00:00:00');
        $ch7 = new DateTime('20-01-00 00:00:00');
        $ch8 = new DateTime('20-01-00 00:00:00');
        $ch9 = new DateTime('20-01-00 00:00:00');
        $ch10 = new DateTime('20-01-00 00:00:00');

        $ch11 = null;
        $ch22 = null;
        $ch33 = null;
        $ch44 = null;
        $ch55 = null;
        $ch66 = null;
        $ch77 = null;
        $ch88 = null;
        $ch99 = null;
        $ch100 = null;

        $student = student::where('id', $id)->first();
        $tracking = tracking::where('user_id', $id)->get();

        for ($x = 1; $x <= 10; $x++) {
            $chapter = $tracking->where('chapter_id', $x);
            if ($chapter) {
                foreach ($chapter as $track) {
                    $first =  DateTime::createFromFormat("Y-m-d H:i:s", $track->time_start);
                    $sec =  DateTime::createFromFormat("Y-m-d H:i:s", $track->end_time);
                    $new = date_diff($first, $sec);
                    switch ($x) {
                        case 1:
                            $ch1->add($new);
                            if($ch1->format('Y') == '2019'){
                                $ch11 = [$ch1->format('h'),$ch1->format('i')];
                            }else{
                                $ch11 = [$ch1->format('d'),$ch1->format('h'),$ch1->format('i')];
                            }
                            break;
                        case 2:
                            $ch2->add($new);
                            if($ch2->format('Y') == '2019'){
                                $ch22 = [$ch2->format('h'),$ch2->format('i')];
                            }else{
                                $ch22 = [$ch2->format('d'),$ch2->format('h'),$ch2->format('i')];
                            }
                            break;
                        case 3:
                            $ch3->add($new);
                            if($ch3->format('Y') == '2019'){
                                $ch33 = [$ch3->format('h'),$ch3->format('i')];
                            }else{
                                $ch33 = [$ch3->format('d'),$ch3->format('h'),$ch3->format('i')];
                            }
                            break;
                        case 4:
                            $ch4->add($new);
                            if($ch4->format('Y') == '2019'){
                                $ch44 = [$ch4->format('h'),$ch4->format('i')];
                            }else{
                                $ch44 = [$ch4->format('d'),$ch4->format('h'),$ch4->format('i')];
                            }
                            break;
                        case 5:
                            $ch5->add($new);
                            if($ch5->format('Y') == '2019'){
                                $ch55 = [$ch5->format('h'),$ch5->format('i')];
                            }else{
                                $ch55 = [$ch5->format('d'),$ch5->format('h'),$ch5->format('i')];
                            }
                            break;
                        case 6:
                            $ch6->add($new);
                            if($ch6->format('Y') == '2019'){
                                $ch66 = [$ch6->format('h'),$ch6->format('i')];
                            }else{
                                $ch66 = [$ch6->format('d'),$ch6->format('h'),$ch6->format('i')];
                            }
                            break;
                        case 7:
                            $ch7->add($new);
                            if($ch7->format('Y') == '2019'){
                                $ch77 = [$ch7->format('h'),$ch7->format('i')];
                            }else{
                                $ch77 = [$ch7->format('d'),$ch7->format('h'),$ch7->format('i')];
                            }
                            break;
                        case 8:
                            $ch8->add($new);
                            if($ch8->format('Y') == '2019'){
                                $ch88 = [$ch8->format('h'),$ch8->format('i')];
                            }else{
                                $ch88 = [$ch8->format('d'),$ch8->format('h'),$ch8->format('i')];
                            }
                            break;
                        case 9:
                            $ch9->add($new);
                            if($ch9->format('Y') == '2019'){
                                $ch99 = [$ch9->format('h'),$ch9->format('i')];
                            }else{
                                $ch99 = [$ch9->format('d'),$ch9->format('h'),$ch9->format('i')];
                            }
                            break;
                        case 10:
                            $ch10->add($new);
                            if($ch10->format('Y') == '2019'){
                                $ch100 = [$ch10->format('h'),$ch10->format('i')];
                            }else{
                                $ch100 = [$ch10->format('d'),$ch10->format('h'),$ch10->format('i')];
                            }
                            break;
                    }

                }

            }
        }

        return view('student.details', compact(['student', 'ch11','ch22','ch33','ch44','ch55','ch66','ch77','ch88','ch99','ch100']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
