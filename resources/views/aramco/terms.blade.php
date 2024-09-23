<div class="accordion" id="accordionExample">
    @forelse ($items as $item)
    <div class="card">
        <div class="card-header" id="heading_{{$loop->iteration}}">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse_{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse_{{$loop->iteration}}">
                    {{ $item->title }}
                </button>
            </h2>
        </div>

        <div id="collapse_{{$loop->iteration}}" class="collapse show" aria-labelledby="heading_{{$loop->iteration}}" data-parent="#accordionExample">
            <div class="card-body">
                {!! $item->details !!}
            </div>
        </div>
    </div>
    @empty
    <div class="card-body">
        No Data Available!
    </div>
    @endforelse
    
</div>
