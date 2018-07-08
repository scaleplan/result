<small>avtomon</small>

DbResultItem
============

Класс результата запроса к БД

Описание
-----------

Class DbResultItem

Сигнатура
---------

- **class**.
- Является подклассом класса [`ArrayResultItem`](../avtomon/ArrayResultItem.md).

Методы
-------

Методы класса class:

- [`__construct()`](#__construct) &mdash; Конструктор
- [`setResult()`](#setResult) &mdash; Установить результат
- [`getFirstResult()`](#getFirstResult) &mdash; Вернуть первую запись результата
- [`getResultId()`](#getResultId) &mdash; Вернуть поле id первой записи результата
- [`getResultFirstField()`](#getResultFirstField) &mdash; Вернуть первое поле первой записи результата
- [`getObjectResult()`](#getObjectResult) &mdash; Возвратить результат в виде объекта

### `__construct()` <a name="__construct"></a>

Конструктор

#### Сигнатура

- **public** method.
- Может принимать следующий параметр(ы):
    - `$result` (`array`|`null`) &mdash; - результат
    - `$prefix` (`string`) &mdash; - префикс полей результата
- Ничего не возвращает.
- Выбрасывает одно из следующих исключений:
    - [`avtomon\DbResultItemException`](../avtomon/DbResultItemException.md)

### `setResult()` <a name="setResult"></a>

Установить результат

#### Сигнатура

- **public** method.
- Может принимать следующий параметр(ы):
    - `$result` (`array`|`null`) &mdash; - результат
    - `$prefix` (`string`) &mdash; - префикс полей результата
- Ничего не возвращает.
- Выбрасывает одно из следующих исключений:
    - [`avtomon\DbResultItemException`](../avtomon/DbResultItemException.md)

### `getFirstResult()` <a name="getFirstResult"></a>

Вернуть первую запись результата

#### Сигнатура

- **public** method.
- Возвращает `array` value.

### `getResultId()` <a name="getResultId"></a>

Вернуть поле id первой записи результата

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `mixed`
    - `null`

### `getResultFirstField()` <a name="getResultFirstField"></a>

Вернуть первое поле первой записи результата

#### Сигнатура

- **public** method.
- Возвращает `null` value.

### `getObjectResult()` <a name="getObjectResult"></a>

Возвратить результат в виде объекта

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `object`

