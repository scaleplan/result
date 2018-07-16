<small> avtomon </small>

IResultInterface
================

The interface is common for all types of results

Description
-----------

Interface IResultInterface

Signature
---------

- **interface**.

Methods
-------

Methods of class interface:

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

- **public** method.
- Can return one of the following values:
  - `null`
  - `string`

### `getArrayResult()`<a name="getArrayResult"> </a>

Return the result as an array

#### Signature

- **public** method.
- Can return one of the following values:
- array
  - `null`

### `getObjectResult()`<a name="getObjectResult"> </a>

Return result as object

#### Signature

- **public** method.
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

