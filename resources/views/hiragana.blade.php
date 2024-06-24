<div id="alphabet">
    <h1>Bảng chữ cái Hiragana</h1>
    <div class="alphabet alphabet-hiragana">
        @foreach ($hiragana as $letter)
        <div class="hiragana-letter">
            <h2>{{$letter['hiragana']}}</h2>
            <p>{{$letter['romanji']}}</p>
        </div>
        @endforeach
    </div>
</div>