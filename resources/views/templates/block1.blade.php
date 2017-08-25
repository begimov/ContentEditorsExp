<div class="container">
    <div class="row">

        @foreach($block['elements'] as $id => $content)
            <div class="col-md-6">
            <p name="{{ $block['template'] . '_' . $id }}" data-editable>{{ $content }}</p>
            </div>
        @endforeach

    </div>
</div>

