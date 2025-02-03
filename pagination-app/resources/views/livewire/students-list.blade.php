<div class="w-100">

<div class="row">

    <div class="col-md-6">
        <label for="query" class="sr-only">Search</label>
        <input type="text" wire:model.live='query' id="query" class="form-control" placeholder="Ex: John Doe">
    </div>

  <div class="d-flex justify-content-end items-center">
  <span class="me-2">Show</span> 
        <select wire:model.lazy='perPage' id="per_page" class="form-select w-auto">
            @for($i = 5; $i <= 25; $i += 5)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <label for="per_page">per page</label>
    </div>

</div>


 <div class="table-responsive w-100 mt-3">
         <table class="table">
            <thead class="table-dark table-striped">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Adult ?</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->name}}</</td>
                        <td>{{$student->email}}</</td>
                        <td>{{$student->is_an_adult ? '✅' : '❌'}}</</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
       <div class="mt-5 col-md-6 mx-auto">
            {{$students->links()}}
       </div>
        

</div>