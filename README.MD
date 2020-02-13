# **Blackjack (OOP)**
1.  create a class called Blackjack in the file blackjack.php. **(DONE)**
2.  Add three methods to this class: **(DONE)**
   
    -   Hit
    -   Stand
    -   Surrender

3.  Hit should add a card between 1-11.**(DONE)**
4.  Stand should end your turn and start the dealer's turn. (Your point total is saved.)
5.  Surrender should make you surrender the game. (Dealer wins.)
6.  Add a property to this class called score. This property should have the value of the player's score at all times.
7.  Create a button on home.php that starts the game when pushed, it should go to game.php.
8.  On game.php instantiate the Blackjack class twice, insert it into a player variable and a dealer variable
9.  Save these instances in the session (you're gonna need them)
10. Use forms to send to the game.php page what the player's action is. (i.e. hit/stand/surrender)
11. Use the class' methods to react to these actions.
12. The final result should be the following:

    -   When you hit the server should draw a card between 1-11, and add it to your total score.
    -   If you reach >21, then the page should tell you you lost.
    -   If you stand before that, the dealer starts drawing cards until he reaches >15.
    -   The server then needs to check the difference between your result and that of the dealer.
    -   The person with the biggest score (that is still lower than 22) wins the hand (If equal the dealer wins).
    -   As a final option: at any point you need to be able to click surrender after which the page tells you you lost and simulates the dealer's score.