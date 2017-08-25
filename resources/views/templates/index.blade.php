@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">LANDING</div>
        </div>
        <div class="row">
            <landing data="{{ json_encode($landing) }}" inline-template>
                    <form action="{{ route('test.store') }}" method="post">
                        @{{ message }}
                        @foreach($landing['blocks'] as $block)
                            @include($block['template'], ['block' => $block])
                        @endforeach
                        <input type="submit"><br><br>
                        <p><a href="#" @click.prevent="clicked">Click</a></p>
                        <div v-html="newblock"></div>
                    </form>
            </landing>
        </div>
    </div>
@endsection


@section('postJquery')
    @parent
    $('body').on('click', '[data-editable]', function(){

    var $el = $(this);

    var $input = $('<input/>').attr({
            name: $el.attr('name'),
            "v-model": $el.attr('id')
        }).val( $el.text() );

    $el.replaceWith( $input );

    {{--var save = function(){--}}
    {{--var $p = $('<p data-editable />').text( $input.val() );--}}
    {{--$input.replaceWith( $p );--}}
    {{--};--}}

    {{--$input.one('blur', save).focus();--}}

    });
@endsection