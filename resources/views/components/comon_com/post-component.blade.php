<div {{ $attributes->merge(['class' => "alert-dismissible fade show alert alert-" . $type]) }} role="alert">
    {{ $messages  }}

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
