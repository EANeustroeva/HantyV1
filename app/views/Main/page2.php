<table class="table">
    <tr>
        <td>Должность</td>
        <td>ФИО</td>
        <td><i class="far fa-star"></i></td>
        <td>Этап</td>
        <td>Дата</td>
    </tr>
    <tr class="sel">
                <td>Java Разработчик</td>
                <td>Высокий</td>
                <td class="text-sm">12.12.2020<br>26.12.2020</td>
                <td>Открытая</td>
            </tr>
    <?php for ($i=0;$i<10;$i++): ?>
    <tr>
        <td>Java Разработчик</td>
        <td>Иванов Иван Иванович</td>
        <td>150</td>
        <td>Тестирование</td>
        <td class="text-sm">10.12.2020</td>
    </tr>
    <?php endfor; ?>
</table>