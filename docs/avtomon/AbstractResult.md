<small>avtomon</small>

AbstractResult
==============

Базовый класс результата

Описание
-----------

Class AbstractResult

Сигнатура
---------

- **abstract class**.
- Реализует интерфейс [`ResultInterface`](../avtomon/ResultInterface.md).

Свойства
----------

abstract class устанавливает следующие свойства:

- [`$result`](#$result)

### `$result` <a name="result"></a>

#### Сигнатура

- **protected** property.
- Значение `mixed`.

Методы
-------

Методы класса abstract class:

- [`getResult()`](#getResult) &mdash; Получение результата
- [`getStringResult()`](#getStringResult) &mdash; Получение результата в виде строки
- [`getArrayResult()`](#getArrayResult) &mdash; Возвратить результат в виде массива
- [`getObjectResult()`](#getObjectResult) &mdash; Возвратить результат в виде объекта
- [`__toString()`](#__toString) &mdash; Вернуть объект результата в виде строки
- [`getBoolResult()`](#getBoolResult) &mdash; Булева интерпретация результата

### `getResult()` <a name="getResult"></a>

Получение результата

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `getStringResult()` <a name="getStringResult"></a>

Получение результата в виде строки

#### Сигнатура

- **public abstract** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `string`

### `getArrayResult()` <a name="getArrayResult"></a>

Возвратить результат в виде массива

#### Сигнатура

- **public abstract** method.
- Может возвращать одно из следующих значений:
    - `array`
    - `null`

### `getObjectResult()` <a name="getObjectResult"></a>

Возвратить результат в виде объекта

#### Сигнатура

- **public abstract** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `object`

### `__toString()` <a name="__toString"></a>

Вернуть объект результата в виде строки

#### Сигнатура

- **public** method.
- Возвращает `string` value.

### `getBoolResult()` <a name="getBoolResult"></a>

Булева интерпретация результата

#### Сигнатура

- **public** method.
- Возвращает `bool` value.

