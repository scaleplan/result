<small> avtomon </small>

ArrayResultItem
===============

Class result of type Array

Description
-----------

Class ArrayResultItem

Signature
---------

- **class**.
- It is a subclass of the class [`AbstractResult`](../avtomon/AbstractResult.md).

Methods
-------

Class methods class:

  - [`__construct()`](#__construct) &mdash; Constructor
  - [`getResult()`](#getResult) &mdash; Getter for the result
  - [`setResult()`](#setResult) &mdash; Set Result
  - [`getArrayResult()`](#getArrayResult) &mdash; Return the result as an array
  - [`getJsonResult()`](#getJsonResult) &mdash; Return the result as JSON
  - [`getStringResult()`](#getStringResult) &mdash; Return the result as a string
  - [`getObjectResult()`](#getObjectResult) &mdash; Return result as object

### `__construct()`<a name="__construct"> </a>

Constructor

#### Signature

- **public** method.
- It can take the following parameter (s):
  - `$result`(`array`| `null`) - result
- Returns nothing.

### `getResult()`<a name="getResult"> </a>

Getter for the result

#### Signature

- **public** method.
Returns the `mixed`value.

### `setResult()`<a name="setResult"> </a>

Set Result

#### Signature

- **public** method.
- It can take the following parameter (s):
  - `$result`(`array`| `null`) - result
- Returns nothing.

### `getArrayResult()`<a name="getArrayResult"> </a>

Return the result as an array

#### Signature

- **public** method.
- Can return one of the following values:
- array
  - `null`

### `getJsonResult()`<a name="getJsonResult"> </a>

Return the result as JSON

#### Signature

- **public** method.
- Can return one of the following values:
  - `null`
  - `string`

### `getStringResult()`<a name="getStringResult"> </a>

Return the result as a string

#### Signature

- **public** method.
- Can return one of the following values:
  - `null`
  - `string`

### `getObjectResult()`<a name="getObjectResult"> </a>

Return result as object

#### Signature

- **public** method.
- Can return one of the following values:
  - `null`
  - `object`

