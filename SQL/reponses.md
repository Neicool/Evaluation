Requete SQL

Requete Num 02

SELECT COUNT(*) AS NbreVideo FROM video

NbreVideo
59




Requete Num 02

SELECT `VideoTitre`AS Film, `ThemeLib`AS Genre FROM video 
JOIN thematic ON `VideoNum`=`ThematicVideoNum`
JOIN theme ON `ThematicThemeNum`=`ThemeNum`
WHERE `ThemeNum`=3
ORDER BY Film
____________________________________________________________________

Film                        Genre

Automata                    Thriller
Thriller
Aux Yeux De Tous
Dark City
Kamikaze
L'Affaire SK1
L'Armée des 12 Singes
Limitless
Mesrine : L'Ennemi Public n°1
Mesrine : L'Instinct de mort
No Country for Old Men
Predestination
Reservoir Dogs
Snatch
Source Code
Sur mes Lèvres
Sweeney Todd Le Diabolique Barbier de Fleet St...
Thriller
The Big Lebowski
Thriller
Un Homme Idéal
V pour Vendetta

