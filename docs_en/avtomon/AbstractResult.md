<small> avtomon </small>

AbstractResult
==============

Base result class

Description
-----------

Class AbstractResult

Signature
---------

- **abstract class**.
- Implements the interface [`IResultInterface`](../avtomon/IResultInterface.md).

Properties
----------

The abstract class sets the following properties:

  - [`$result`](#$result)

### `$result`<a name="result"> </a>

#### Signature

- **protected** property.
- The value of `mixed`.

Methods
-------

Abstract class methods:

  - [`getResult()`](#getResult) &mdash; Getting Results
  - [`getStringResult()`](#getStringResult) &mdash; Getting the result as a string
  - [`getArrayResult()`](#getArrayResult) &mdash; Return the result as an array
  - [`getObjectResult()`](#getObjectResult) &mdash; Return result as object
  - [`__toString()`](#__toString) &mdash; Return the result object as a string
  - [`getBoolResult()`](#getBoolResult) &mdash; Boolean interpretation of the result

### `getResult()`<a name="getResult"> </a>

Getting Results

#### Signature

- **public** method.
Returns the `mixed`value.

### `getStringResult()`<a name="getStringResult"> </a>

Getting the result as a string

#### Signature

- **public abstract** method.
- Can return one of the following values:
  - `null`
  - `string`

### `getArrayResult()`<a name="getArrayResult"> </a>

Return the result as an array

#### Signature

- **public abstract** method.
- Can return one of the following values:
- array
  - `null`

### `getObjectResult()`<a name="getObjectResult"> </a>

Return result as object

#### Signature

- **public abstract** method.
- Can return one of the following values:
  - `null`
  - `object`

### `__toString()`<a name="__toString"> </a>

Return the result object as a string

#### Signature

- **public** method.
Returns `string`value.

### `getBoolResult()`<a name="getBoolResult"> </a>

Boolean interpretation of the result

#### Signature

- **public** method.
- Returns the `bool`value.

