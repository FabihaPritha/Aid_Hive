@props(['title', 'value', 'color'])

<div class="col-md-3">
    <div class="card shadow-sm border-start border-{{ $color }} border-4">
        <div class="card-body">
            <h6 class="text-muted">{{ $title }}</h6>
            <p class="fs-4 fw-bold text-{{ $color }}">{{ $value }}</p>
        </div>
    </div>
</div>
