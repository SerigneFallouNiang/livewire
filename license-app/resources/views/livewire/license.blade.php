<div>
    <h1 class="text-secondary">Votre licence est actuellement pour <strong>{{$teamSize}}</strong> personnes.</h1>

    <input type="range" wire:model.live="teamSize" min="1" max="10" value="2" class="form-control-range w-100">


    <h2 class="text-center">Montant: {{$amount}} $</h2>
</div>
