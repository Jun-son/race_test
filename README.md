# Тестовое задание на должность "Junior-разбработчик" в компанию [startmedia](https://startmedia.pro).
Организаторы провели соревнования по автогонкам. Всего зарегистрировалось 
59 участников, но принять участие в соревнованиях смогли только 15. Каждому участнику 
был присвоен свой уникальный номер. Заезды проходили в случайном порядке, каждому было
дано по 4 попытки. Всего было проведено 60 заездов, а за каждую попытку участнику 
присваивались очки.

Организаторам требуется турнирная таблица, по которой они могли бы определить 
победителя. Победитель определяется по наибольшей сумме баллов за все 4 попытки. 
Так же организаторы хотят наградить самых быстрых участников заездов в 
каждой попытке. И им хотелось бы, чтобы данную таблицу можно было использовать и
в будущих соревнованиях, где количество участников и количество заездов могут быть
другими.

## Исходные данные
Список участников находится в файле `data_cars.json`

Список результатов каждой попытки заездов находится в файле `data_attempts.json`

## Задача
Необходимо создать web-страничку и вывести на ней турнирную таблицу. В таблице 
должны быть отображены:

- V все участники заездов, с указанием их ФИО, города и машины
- V результаты каждой попытки для каждого участника
- V итоговая сумма набранных очков за все заезды каждого участника 
- V место, которое занял участник в соревновании

Таблица должна быть отсортирована по сумме очков, набранных участниками. На первой 
строчке должен находится участник, занявший первое место среди всех остальных. На 
второй строчке должен быть участник, занявший второе место. И так далее, по убыванию.

Предоставить возможность организаторам отсортировать таблицу не только по общей сумме,
но и по каждой попытке в отдельности, чтобы они могли наградить самых быстрых 
участников в каждом из заездов. Принцип сортировки такой же, самый быстрый участник
должен быть на первой строчке. 

## Условия
**Задание должно быть выполнено без использования фреймворков и библиотек.**

Предполагается, что данные об участниках заездов и их результатах были занесены в базу 
данных, но для упрощения задачи эти данные представлены в двух файлах: `data_cars` и 
`data_attempts`. Так как база данных используется на серверной части сайта, данные из
этих файлов необходимо считывать и обрабатывать **через PHP**.

Внешний вид (стилизация) таблицы - на усмотрение разработчика. Допускается использование 
LESS / SASS препроцессоров.

Реализация сортировки - на усмотрение разработчика. Можно выполнить её на PHP или/и 
на JavaScript.

## Критерии оценки
Не смотря на то, что задание достаточно простое, мы ждем, что вы отнесетесь к нему
серьезно и покажете свои навыки. Умеете применять ООП? Реализуйте задание на классах. 
Знаете SASS? Напишите стили на нём.

При оценке работы будет обращаться внимание на
- соответствие решения условиям задачи
- чистоту и легкость понимания кода
- организацию файлов

## Куда отправлять работу
Итоговую работу можно выложить на GitHub / BitBucket, либо же просто заархивировать 
все исходные файлы и отправить нам на почту `job@stmd.pro`. В письме так же укажите ваши ФИО.

В случае, если у вас возникнут вопросы, вы так же можете задать их нам отправив письмо на
почту `job@stmd.pro`.
