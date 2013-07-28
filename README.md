# Name Generator

Generates a random adverb, noun combination to be used as some kind of a random name.

### Features

This is just the first basic version. More advanced implementation using Composer and Packagist following.

## Usage

Copy the generator to your project and use like this.

Include/require the generator
    require_once './NameGenerator.php';

Instantiate and specify operation mode
    $g = new \MMDC\NameGenerator('us);

Output
    echo $g->next();

## Supported Modes

*  moniker (see [moniker](https://github.com/weaver/moniker/))
*  us
*  uk

----------
## Sources

### UK
*  [Popular UK Names](http://surname.sofeminine.co.uk/w/surnames/most-common-surnames-in-great-britain.html)
*  [Common UK Surnames](http://www.babycentre.co.uk/c1053850/baby-names-2012)

### US
*  [Popular US Names](http://www.babycenter.com/top-baby-names-2012)
*  [Common US Surnames](http://en.wikipedia.org/wiki/List_of_most_common_surnames_in_North_America#United_States)  

## Licence

The MIT License (MIT)

Copyright (c) 2013 Maksim Gudow

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.