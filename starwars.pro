pere(anakin, luke).
pere(medichlorian ,anakin).
mere(shmi ,anakin).
mere(padme, luke).
mere(ruwee, padme).
pere(jobal, padme).
mere(padme, leia).
pere(anakin, leia).

male(luke).

grandpere(X, Y) :- pere(X, Z) , pere(Z,Y).
grandpere(X, Y) :- pere(X, Z) , mere(Z,Y).

grandmere(X, Y) :- mere(X, Z) , mere(Z,Y).
grandmere(X, Y) :- mere(X, Z) , pere(Z,Y).

parent(X, Y) :- pere(X, Y).
parent(X, Y) :- mere(X, Y).

fils(X, Y) :- parent(Y, X), male(X).
fille(X, Y) :- parent(Y, X), femelle(X).

frere(X, Y) :- fils(X, Z) , parent(Z, Y).

equal(X, X).

?- frere(X, leia).