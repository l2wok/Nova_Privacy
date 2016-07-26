# Nova_Privacy
> Модуль для Nova framework v3

Добавляет панель принятия политики конфиденциальности на использование Сookies
> В связи с отказом от использования Hooks в следующих версиях фрейморка
> переписан перехват события из ~~Hooks~~ в Event`s

##Для полноценного использования необходимо

**отредактировать ваш темплейт, а именно:**
- css файл
- в вашем Layout добавить строки ``` <?php
if(Event::hasListeners('privacy'))
{
    echo Event::until('privacy');
}
?> ```
- 
Все примеры прилагаются в папке Templates

*Так же рекомендуется отредактировать content самой политики конфиденциальности под свои нужды для используемых языков.*

``` Modules\Privacy\Language\etc ```
