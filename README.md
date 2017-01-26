# PHP Task for Job Application

# Installation
1. Use `composer install` to install the autoloader and other dependencies.
2. Execute `index.php` file to run the applicaiton - this is the bootstrap of the project
3. Execute the tests with following command `phpunit --colors tests

# Task Description

Implement a solution for a supermarket checkout that calculates the total price of a number of items. In a normal supermarket, things are identified using Stock Keeping Units, or SKUs. In our store, we'll use individual letters of the alphabet (A, B, C, and so on). Our goods are priced individually. In addition, some items are multipriced: buy n of them, and they'll cost you y cents. For example, item 'A' might cost 50 cents individually, but this week we have a special offer: buy three 'A's and they'll cost you $1.30. In fact this week's prices are:

Item | Unit | Special Price
----- | ---- | -------
A | 50 | 3 for 130
B | 30 | 2 for 45
C | 20
D | 15

Our checkout accepts items in any order, so that if we scan a B, an A, and another B, we'll recognize the two B's and price them at 45 (for a total price so far of 95). Because the pricing changes frequently, we need to be able to pass in a set of pricing rules each time we start handling a checkout transaction.

The following lists of products should produce these prices:
- 50, price("A")
- 80, price("AB")
- 115, price("CDBA")
- 100, price("AA")
- 130, price("AAA")
- 180, price("AAAA")
- 230, price("AAAAA")
- 260, price("AAAAAA")
- 160, price("AAAB")
- 175, price("AAABB")
- 190, price("AAABBD")
- 190, price("DABABA")

Implement the code for the solution and a test code that proves the solution works as expected (you may use the test scenarios). The solution may be coded in any high level language of your choice.

**Extra credit**: Additional bonus points can be earned by implementing a DB schema
to store unit price information (including special promotion info) and the sales record (a kind of an electronic receipt - which units, how many of them and for what price were sold at a given time). The sales program should load the product price and promotion info from DB before starting calculation and then should store the sales records in the sales table(s).

**Extra credit 2**: Although the implementation of the algorithm and proper functionality are the most important part of the task, additional bonus points can be awarded for good looking, validated user interface, provided that the program behind it works OK. No bonus points will be given for interface if the program itself does not function as expected.
