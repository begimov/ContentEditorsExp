@foreach($block['elements'] as $id => $content)
    <p name="{{ $block['template'] . '_' . $id }}" data-editable>{{ $content }}</p>
@endforeach
