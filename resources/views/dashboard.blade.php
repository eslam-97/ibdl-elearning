<x-app-layout>
    <x-slot name="header">
        <div class="d-flex">
            <div  class="d-flex justify-content-start w-75">
            <a href="#"><button style="margin-left: 50px" class="btn btn-outline-primary btn-lg px-5"> Add Patch</button></a>
            <a href="#"><button style="margin-left: 100px" class="btn btn-outline-success btn-lg px-5"> Patches</button></a>
            <a href="#"><button style="margin-left: 100px" class="btn btn-outline-success btn-lg px-5"> Tracking</button></a>
        </div>
                <form method="POST" action="/dashboard/search" class="align-self-end">
                    @csrf
                    <div class="d-flex">
                        <input style="border:1px solid lightblue" required {{ isset($search) ? "value=$search" : '' }}
                            placeholder="Type to Search..." class="form-control rounded mx-1" type="search" name="search"
                            id="search" oninvalid="this.setCustomValidity('Please Type to Search')"
                            oninput="this.setCustomValidity('')">
                        <button class="btn btn-primary bg-primary" type="submit">Search</button>
                    </div>
                </form>
        </div>
    </x-slot>

    <div class="w-75 m-auto pb-5 mt-5">


        <table style="background-color: white" class="table table-hover table-bordered mt-3">
            <thead>
                <tr style="background-color: #faf8f8; border:1px solid lightgray" class="text-center ">
                    <th class="p-3" scope="col">
                        <p class="h4"> Name</p>
                    </th>
                    <th class="p-3" scope="col">
                        <p class="h4">Email</p>
                    </th>
                    <th class="p-3" scope="col">
                        <p class="h4">Logbook</p>
                    </th>
                    <th class="p-3" scope="col">
                        <p class="h4">Password</p>
                    </th>
                    <th class="p-3" scope="col">
                        <p class="h4">History</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="text-center">
                        <th class="py-3"> </th>
                        <td class="py-3"> </td>
                        <td class="py-3"> {{ $student->logbook }} </td>
                        <td class="py-3"> {{ $student->code }} </td>
                        <td class="py-3">
                           <a  href="{{route('trainee.edit',$student->id)}}"><i class="fas fa-history text-primary fa-lg"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="d-flex justify-content-center mb-1 mt-5">
        <p class="text-primary">{{ $students->links() }} </p>
    </div>
    </div>
</x-app-layout>
