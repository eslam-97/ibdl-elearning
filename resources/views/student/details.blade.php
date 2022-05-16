<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div style="width:70%;margin:20px auto;">
        <form method="POST" class="rounded" style="background-color: white;padding:30px 20px 10px 20px;border:1px solid lightgray">
        @csrf
        <div style="width:85%;" class="m-auto">
            <div class="form-group  mb-4">
                <label for="name">Name</label>
                <input value="{{$student->name}}" name="name" required  class="form-control" id="name" >
            </div>
            <div class="form-group  mb-4">
                <label for="email">Email address</label>
                <input  style="border: 1px solid lightgray" name="email" required type="email" class="form-control rounded" id="email">
            </div>

            <div class="form-group  mb-4">
                <label >Password</label>
                <input value="{{$student->code}}" style="border: 1px solid lightgray" name="password" required class="form-control rounded">
            </div>


        </div>
        <div style="width:98px" class="mt-4 bg-primary rounded m-auto">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
          </form>
    </div>




</x-app-layout>
