<?php
namespace MyProject\Classes;

/**
 * Класс пользователя.
 *
 * Содержит основные данные о пользователе (имя, логин, пароль)
 * и методы для получения информации и вывода её на экран.
 */

class User {
        /**
     * Имя пользователя.
     *
     * @var string
     */
    public $name;
        /**
     * Логин пользователя.
     *
     * @var string
     */
    public $login;
        /**
     * Пароль пользователя.
     *
     * @var string
     */
    private $password;
    
    /**
     * Конструктор пользователя.
     *
     * @param string $name     Имя пользователя.
     * @param string $login    Логин пользователя.
     * @param string $password Пароль пользователя.
     */

    public function __construct(string $name, string $login, string $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        echo "Пользователь {$this->login} создан<br>";
    }

    /**
     * Выводит информацию о пользователе:
     * имя, логин и пароль.
     *
     * @return void
     */
    public function showInfo(): void {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px;'>";
        echo "<h3>Информация о пользователе:</h3>";
        echo "<p><strong>Имя:</strong> {$this->name}</p>";
        echo "<p><strong>Логин:</strong> {$this->login}</p>";
        echo "<p><strong>Пароль:</strong> ******</p>";
        echo "</div>";
    }

    /**
     * Деструктор пользователя.
     *
     * Выводит сообщение об удалении пользователя.
     *
     * @return void
     */
    public function __destruct() {
        echo "Пользователь {$this->login} удален<br>";
    }
}
?>
