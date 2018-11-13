<div class="row">
    @foreach($doctors as $doctor)
        <div class="col-md-6">
            <div class="profile p-3 py-5 mb-3 bg-white text-center rounded">
                <div class="mx-auto">
                    <img src="/storage/{{$doctor->avatar}}" class="rounded-circle img-fluid" alt="" style="width: 170px;">
                </div>
                <h5 class="my-3">{{ $doctor->user->name }}</h5>
                <p>
                    <i class="fa fa-map-marker"></i> {{ $doctor->location }}
                    <i class="fa fa-user-md"></i> {{ $doctor->specialization }}
                </p>
                <p class="text-secondary">{{ $doctor->bio }}.</p>
                <a href="{{ route('doctors.show', ['doctor' => $doctor]) }}" class="btn btn-secondary">more info</a>
            </div>
        </div>
    @endforeach
</div>
