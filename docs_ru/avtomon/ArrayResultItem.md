<small>avtomon</small>

ArrayResultItem
===============

Класс результат типа Массив

Описание
-----------

Class ArrayResultItem

Сигнатура
---------

- **class**.
- Является подклассом класса [`AbstractResult`](../avtomon/AbstractResult.md).

Методы
-------

Методы класса class:

- [`__construct()`](#__construct) &mdash; Конструктор
- [`getResult()`](#getResult) &mdash; Геттер для результата
- [`setResult()`](#setResult) &mdash; Установить результат
- [`getArrayResult()`](#getArrayResult) &mdash; Вернуть результат в виде массива
- [`getJsonResult()`](#getJsonResult) &mdash; Вернуть результат в виде JSON
- [`getStringResult()`](#getStringResult) &mdash; Вернуть результат в виде строки
- [`getObjectResult()`](#getObjectResult) &mdash; Возвратить результат в виде объекта

### `__construct()` <a name="__construct"></a>

Конструктор

#### Сигнатура

- **public** method.
- Может принимать следующий параметр(ы):
    - `$result` (`array`|`null`) - результат
- Ничего не возвращает.

### `getResult()` <a name="getResult"></a>

Геттер для результата

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `setResult()` <a name="setResult"></a>

Установить результат

#### Сигнатура

- **public** method.
- Может принимать следующий параметр(ы):
    - `$result` (`array`|`null`) - результат
- Ничего не возвращает.

### `getArrayResult()` <a name="getArrayResult"></a>

Вернуть результат в виде массива

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `array`
    - `null`

### `getJsonResult()` <a name="getJsonResult"></a>

Вернуть результат в виде JSON

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `string`

### `getStringResult()` <a name="getStringResult"></a>

Вернуть результат в виде строки

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `string`

### `getObjectResult()` <a name="getObjectResult"></a>

Возвратить результат в виде объекта

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `object`

