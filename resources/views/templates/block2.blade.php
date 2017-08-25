<div class="container">
    <div class="row">
        <div class="col-md-12"><p>BLOCK 2</p></div>
    </div>
    <div class="row">
        @foreach($elements as $id => $content)
            <div class="col-md-6" id="{{ $id }}"><p name="{{ $id }}" data-editable>{{ $content }}</p></div>
        @endforeach
    </div>
    </div>
</div>