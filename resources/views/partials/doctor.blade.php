<div class="profile p-3 py-5 mb-3 bg-white text-center rounded">
    <div class="mx-auto">
        <img src="/storage/{{$doctor->avatar}}" class="rounded-circle img-fluid" alt="" style="width: 170px">
    </div>
    <h5 class="my-4">dr. {{ $doctor->user->name }}</h5>
    <p>
        <i class="fa fa-map-marker"></i> {{ $doctor->location }}
        <i class="fa fa-user-md"></i> {{ $doctor->specialization }}
    </p>
    <p class="text-secondary">{{ $doctor->bio }}.</p>
    <div class="card-body p-3">
        <h5>contact</h5>
        <p class="text-secondary">{{$doctor->contact}}</p>
        <h5>address</h5>
        <p class="text-secondary">{{$doctor->address}}</p>
    </div>
</div>
