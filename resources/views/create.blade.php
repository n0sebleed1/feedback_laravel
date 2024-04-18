<!DOCTYPE html>
<html>
    <head>
        <title>Заявки</title>
    </head>
    <body>
        <a href="/">Отзывы</a>
        <a href="create">Оставить отзыв</a>
        <form action="{{ route('create') }}" method="post">
            @csrf
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            <input name="name" type="text" placeholder="name">
            <input name="email" type="email" placeholder="email">
            <input name="product" placeholder="product" list="products" />
                <datalist id="products">
                    <option value="Фен" />
                    <option value="Телевизор" />
                    <option value="Телефон" />
                    <option value="Компьютер" />
                </datalist>
            <input name="rating" placeholder="rating" list="rating"/>
                <datalist id="rating">
                    <option value="1" />
                    <option value="2" />
                    <option value="3" />
                    <option value="4" />
                    <option value="5" />
                </datalist>
            <input name="text" type="text" placeholder="text">
            <button type="submit">Отправить</button>
        </form>
    </body>
</html>