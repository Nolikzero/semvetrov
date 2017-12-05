<form method="POST" style="width: 450px;margin-top: 50px">
    <h2>Парсинг текста</h2>
    <p>Введите в поле текст для парсинга</p>
    <br/>
    <textarea class="form-control w-100" style="height: 120px" name="TEXT" placeholder="Ваш текст здесь"><?=$value?></textarea>
    <br>
    <button type="submit" class="btn btn-primary w-100">Отправить</button>
    <br>
    <?if($arr_1 || $arr_2):?>
        <br>
    <h3>Результат</h3>
    <?endif?>
    <?if($arr_1):?>
        <hr>
        <h4>Массив 1(ключ-значение)</h4>
    <pre><?print_r($arr_1);?></pre>
    <?endif?>
    <?if($arr_2):?>
        <hr>
        <h4>Массив 2(ключ-описание)</h4>
        <pre><?print_r($arr_2);?></pre>
    <?endif?>
</form>