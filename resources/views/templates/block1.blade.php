<div class="container">
    <div class="row">
        <div class="col-md-12"><p>BLOCK 1</p></div>
    </div>
    <div class="row">
        @foreach($block['elements'] as $id => $content)
            <div class="col-md-6" id="{{ $id }}">
                <p name="{{ $block['template'] . '_' . $id }}" data-editable>{{ $content }}</p>
            </div>
        @endforeach
    </div>
</div>

