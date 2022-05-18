<x-app-layout>
    <x-slot name="header">
        <div class="text-end h5"> <b> Logbook: {{ $student->logbook }}</b></div>
    </x-slot>
    <div style="width:70%;margin:10px auto;">
        <div style="padding:35px 0px;" class="accordion">
            @if ($ch11)
            <div class="accordion-item">
                <h2 class="accordion-header" id="1">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#id1"
                        aria-expanded="false" aria-controls="id1">
                       CH1: Entrepreneurship and Starting a Small Business
                    </button>
                </h2>
                <div id="id1" class="accordion-collapse collapse" aria-labelledby="1">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter1 is :
                       <b> @if (count($ch11) > 2)
                            {{$ch11[0]}} Days, {{$ch11[1]}}:{{$ch11[2]}} Hours
                            @else
                            {{$ch11[0]}}:{{$ch11[1]}} Hours
                            @endif
                        </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch22)
            <div class="accordion-item">
                <h2 class="accordion-header" id="2">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id2" aria-expanded="false" aria-controls="id2">
                        CH2: Management: Functions and Styles </button>
                </h2>
                <div id="id2" class="accordion-collapse collapse" aria-labelledby="2">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter2 is :
                        <b> @if (count($ch22) > 2)
                            {{$ch22[0]}} Days, {{$ch22[1]}}:{{$ch22[2]}} Hours
                            @else
                            {{$ch22[0]}}:{{$ch22[1]}} Hours
                            @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch33)
            <div class="accordion-item">
                <h2 class="accordion-header" id="3">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id3" aria-expanded="false" aria-controls="id3">
                        CH3: Leadership and Motivation
                    </button>
                </h2>
                <div id="id3" class="accordion-collapse collapse" aria-labelledby="3">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter3 is :
                       <b> @if (count($ch33) > 2)
                        {{$ch33[0]}} Days, {{$ch33[1]}}:{{$ch33[2]}} Hours
                        @else
                        {{$ch33[0]}}:{{$ch33[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch44)
            <div class="accordion-item">
                <h2 class="accordion-header" id="4">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id4" aria-expanded="false" aria-controls="id4">
                        CH4: Human Resources
                    </button>
                </h2>
                <div id="id4" class="accordion-collapse collapse" aria-labelledby="4">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter4 is :
                       <b> @if (count($ch44) > 2)
                        {{$ch44[0]}} Days, {{$ch44[1]}}:{{$ch44[2]}} Hours
                        @else
                        {{$ch44[0]}}:{{$ch44[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch55)
            <div class="accordion-item">
                <h2 class="accordion-header" id="5">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id5" aria-expanded="false" aria-controls="id5">
                        CH5: Marketing: Product and Price </button>
                </h2>
                <div id="id5" class="accordion-collapse collapse" aria-labelledby="5">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter5 is :
                       <b> @if (count($ch55) > 2)
                        {{$ch55[0]}} Days, {{$ch55[1]}}:{{$ch55[2]}} Hours
                        @else
                        {{$ch55[0]}}:{{$ch55[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch66)
            <div class="accordion-item">
                <h2 class="accordion-header" id="6">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id6" aria-expanded="false" aria-controls="id6">

                        CH6: Marketing: Place and Promotion
                    </button>
                </h2>
                <div id="id6" class="accordion-collapse collapse" aria-labelledby="6">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter6 is :
                       <b> @if (count($ch66) > 2)
                        {{$ch66[0]}} Days, {{$ch66[1]}}:{{$ch66[2]}} Hours
                        @else
                        {{$ch66[0]}}:{{$ch66[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch77)
            <div class="accordion-item">
                <h2 class="accordion-header" id="7">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id7" aria-expanded="false" aria-controls="id7">
                        CH7: Understanding Financial Information and Accounting </button>
                </h2>
                <div id="id7" class="accordion-collapse collapse" aria-labelledby="7">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter7 is : <b>
                            @if (count($ch77) > 2)
                            {{$ch77[0]}} Days, {{$ch77[1]}}:{{$ch77[2]}} Hours
                            @else
                            {{$ch77[0]}}:{{$ch77[1]}} Hours
                            @endif
                    </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch88)
            <div class="accordion-item">
                <h2 class="accordion-header" id="8">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id8" aria-expanded="false" aria-controls="id8">
                        CH8: Business in Global Markets </button>
                </h2>
                <div id="id8" class="accordion-collapse collapse" aria-labelledby="8">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter8 is :
                       <b> @if (count($ch88) > 2)
                        {{$ch88[0]}} Days, {{$ch88[1]}}:{{$ch88[2]}} Hours
                        @else
                        {{$ch88[0]}}:{{$ch88[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch99)
            <div class="accordion-item">
                <h2 class="accordion-header" id="9">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id9" aria-expanded="false" aria-controls="id9">
                        CH9: Demonstrating Ethical Behavior and Social Responsibility </button>
                </h2>
                <div id="id9" class="accordion-collapse collapse" aria-labelledby="9">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter9 is :
                       <b> @if (count($ch99) > 2)
                        {{$ch99[0]}} Days, {{$ch99[1]}}:{{$ch99[2]}} Hours
                        @else
                        {{$ch99[0]}}:{{$ch99[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

            @if ($ch100)
            <div class="accordion-item">
                <h2 class="accordion-header" id="10">
                    <button style="font-size: 18px; font-weight:bold" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#id10" aria-expanded="false" aria-controls="id10">
                        CH10: Information Technology in Business </button>
                </h2>
                <div id="id10" class="accordion-collapse collapse" aria-labelledby="10">
                    <div class="ms-3 accordion-body">
                        Total Hours For Chapter10 is :
                       <b> @if (count($ch100) > 2)
                        {{$ch100[0]}} Days, {{$ch100[1]}}:{{$ch100[2]}} Hours
                        @else
                        {{$ch100[0]}}:{{$ch100[1]}} Hours
                        @endif </b>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>




</x-app-layout>
