use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Иван',
        'age' => 20,
        'position' => 'Разработчик',
        'address' => 'Москва, ул. Пушкина'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'г. Казань',
        'post_code' => '420111',
        'email' => '', // пусто для проверки условия
        'phone' => '+7-999-123-45-67'
    ]);
});
