cuit(oeuf) :- contenu(oeuf, X) , contenu(eau, X) , bouillante(eau).
cuit(the) :- contenu(the, X) , contenu(eau, X) , bouillante(eau).
bouillante(eau) :- allume(feu).
contenu(X, Y) :- contenant(Y) , mettable(X, Y).

mettable(oeuf, casserole).
mettable(eau, teapot).
mettable(eau, casserole).
contenant(casserole).
contenant(teapot).
mettable(the, teapot).
allume(feu).

?- cuit(X).