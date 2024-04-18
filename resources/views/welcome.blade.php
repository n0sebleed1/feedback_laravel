<!DOCTYPE html>
<html>
    <head>
        <title>Заявки</title>
    </head>
    <body>
        <a href="/">Отзывы</a>
        <a href="create">Оставить отзыв</a>
        <table>
            <tr>
                <th>0. id</th>
                <th>1. Имя</th>
                <th>2. Почта</th>
                <th>3. Товар</th>
                <th>4. Оценка</th>
                <th>5. Отзыв</th>
                <th>6. Время</th>
            </tr>
            @foreach($data as $el)
            <tr>
                <td>{{ $el->id }}</td>
                <td>{{ $el->name }}</td>
                <td>{{ $el->email }}</td>
                <td>{{ $el->product }}</td>
                <td>{{ $el->rating }}</td>
                <td>{{ $el->text }}</td>
                <td>{{ $el->created_at }}</td>
            </tr>
            @endforeach
          </table>
    </body>
</html>