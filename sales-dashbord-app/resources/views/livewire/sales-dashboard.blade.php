<div class="d-flex flex-column justify-content-center align-items-center w-100" wire:poll.1s>

    <div class="row border border-dark rounded align-items-start w-75">
        <div class="col-md-4 border-dark border bg-white text-primary py-5 rounded-left text-center">
            <strong class="h1 font-weight-bold ">{{$newOrders}}</strong>
            <h3 class="text-secondary ">New Orders</h3>
        </div>
    
        <div class="col-md-4 border-dark border bg-white text-primary py-5 text-center">
            <strong class="h1 font-weight-bold">{{$salesAmount}}</strong>
            <h3 class="text-secondary ">Sales Amount</h3>
        </div>
    
        <div class="col-md-4 border-dark border bg-white text-primary py-5  rounded-bottom rouded-right text-center">
            <strong class="h1 font-weight-bold">{{$satisfactions}}%</strong>
            <h3 class="text-secondary">Satisfactions</h3>
        </div>
    </div>
    
    <button class="btn btn-primary mt-5 btn-lg" wire:click="$refresh"><i class="fa fa-refresh me-2"></i>Refresh</button>

</div>
