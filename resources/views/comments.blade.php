@extends('layouts.app')

@section('content')
    <div class="com_main_div">
        <div class="com_top_comments_div">
            @if(count($all_comments))
                @foreach($all_comments as $el)
                   <div class="com_top_comments_row">
                        <div class="com_top_comments_row_top">
                            <span class="com_top_comments_row_top_name">{{ $el->name }}</span>
                            <span class="com_top_comments_row_top_time">{{ $el->time }}</span>
                            <span class="com_top_comments_row_top_date">{{ $el->date }}</span>
                        </div>
                        <div class="com_top_comments_row_bottom">{{ $el->text }}</div>
                   </div>
                @endforeach
            @else
                <div class="com_top_comments_no">
                    Будьте первым, кто оставит комментарий!
                </div>
            @endif
        </div>
        <div class="com_bot_form_div">
            <p class="com_bot_div_preform_p">Оставить комментарий</p>
            <form class="com_bot_form" action="/comments/add" method="POST">
                @csrf
                <label for="form_id_name">Ваше имя</label>
                <input type="text" name="name" id="form_id_name" minlength="2" maxlength="10" required>
                <label for="form_id_name">Ваш комментарий</label>
                <textarea name="text" id="form_id_text" minlength="10" maxlength="191" required></textarea>
                <input type="submit" id="form_id_sumbit" value="Отправить">
            </form>
        </div>
    </div>
@endsection
