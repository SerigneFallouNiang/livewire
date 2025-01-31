<div>
    {{-- Do your work, then step back. --}}
    <h1>&#128161; {{$brightness}}%</h1>

    {{-- <div class="progress" style="height: 30px"> --}}
        <div class="progress mt-8" style="height: 30px" role="progressbar" aria-valuenow="{{$brightness}}" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-striped bg-warning" style="width: {{$brightness}}%"></div>
          </div>
    {{-- </div> --}}
 

      <div class="mt-3">

        <button class="btn btn-danger" wire:click="off">Off </button>
        <button class="btn btn-secondary" wire:click="increment" @if ($brightness == 100) disabled @endif >+ </button>
        <button class="btn btn-secondary" wire:click="decrement" @if ($brightness == 0) disabled @endif>- </button>
        <button class="btn btn-primary" wire:click="turnOn">On </button>

      </div>
    
      
</div>
