<div class="d-flex flex-column justify-content-left align-items-left w-100" wire:poll.1s>
<h1>Find a Contact</h1>

@if(session()->has('message'))
    <div class="alert alert-info w-75">
            {{session('message')}}
    </div>
@endif


<form wire:submit.prevent='searchByName'>
      <div class="input-group mb-3 w-75">
        <input type="text" wire:model.live="name" class="form-control" placeholder="Recipient's username" aria-label="Friends's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">📚✨</span>
    </div>
</form>

<div wire:loading wire:target='searchByName'>
    Loading...
</div>

    
@if(count($contacts) > 0)
    <div class="list-group mt-2 w-75">
        @foreach($contacts as $contact)
            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $contact['name'] }}</h5>
                    <small class="text-muted">{{ $contact['email'] }}</small>
                </div>
                <p class="mb-1">{{ $contact['city'] }}</p>
                <small class="text-muted">📞 {{ $contact['phone'] }}</small>
            </div>
        @endforeach
    </div>
@endif
</div>
