# insert the pickID and userID from the template table
# v1.027 removed clause: WHERE template_actual.gameID = 1    not sure why it was ever in there

INSERT INTO template_gbg(pickID, userID)
SELECT template.pickID, template.userID
FROM template;

# compare the predicted winners to the actual winners and set template_gbg.winner(x) to 0 if the player picked incorrectly

UPDATE template_gbg, template, template_actual
SET template_gbg.winner1 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner1 != template_actual.winner
AND template_actual.gameID = 1;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner2 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner2 != template_actual.winner
AND template_actual.gameID = 2;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner3 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner3 != template_actual.winner
AND template_actual.gameID = 3;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner4 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner4 != template_actual.winner
AND template_actual.gameID = 4;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner5 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner5 != template_actual.winner
AND template_actual.gameID = 5;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner6 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner6 != template_actual.winner
AND template_actual.gameID = 6;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner7 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner7 != template_actual.winner
AND template_actual.gameID = 7;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner8 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner8 != template_actual.winner
AND template_actual.gameID = 8;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner9 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner9 != template_actual.winner
AND template_actual.gameID = 9;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner10 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner10 != template_actual.winner
AND template_actual.gameID = 10;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner11 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner11 != template_actual.winner
AND template_actual.gameID = 11;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner12 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner12 != template_actual.winner
AND template_actual.gameID = 12;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner13 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner13 != template_actual.winner
AND template_actual.gameID = 13;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner14 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner14 != template_actual.winner
AND template_actual.gameID = 14;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner15 = 0
WHERE template.pickID = template_gbg.pickID
AND template.winner15 != template_actual.winner
AND template_actual.gameID = 15;

# compare the predicted winners to the actual winners and set template_gbg.winner(x) to 1 if the player picked correctly

UPDATE template_gbg, template, template_actual
SET template_gbg.winner1 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner1 = template_actual.winner
AND template_actual.gameID = 1;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner2 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner2 = template_actual.winner
AND template_actual.gameID = 2;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner3 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner3 = template_actual.winner
AND template_actual.gameID = 3;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner4 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner4 = template_actual.winner
AND template_actual.gameID = 4;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner5 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner5 = template_actual.winner
AND template_actual.gameID = 5;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner6 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner6 = template_actual.winner
AND template_actual.gameID = 6;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner7 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner7 = template_actual.winner
AND template_actual.gameID = 7;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner8 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner8 = template_actual.winner
AND template_actual.gameID = 8;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner9 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner9 = template_actual.winner
AND template_actual.gameID = 9;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner10 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner10 = template_actual.winner
AND template_actual.gameID = 10;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner11 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner11 = template_actual.winner
AND template_actual.gameID = 11;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner12 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner12 = template_actual.winner
AND template_actual.gameID = 12;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner13 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner13 = template_actual.winner
AND template_actual.gameID = 13;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner14 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner14 = template_actual.winner
AND template_actual.gameID = 14;

UPDATE template_gbg, template, template_actual
SET template_gbg.winner15 = 1
WHERE template.pickID = template_gbg.pickID
AND template.winner15 = template_actual.winner
AND template_actual.gameID = 15;

# Compare the predicted spread to the actual spread. Add template.spread(x) to template_actual.spread if they picked the winner wrong. Take the absolute value of template.spread(x) minus template_actual.spread if they picked the winner right.

UPDATE template_gbg, template, template_actual
SET template_gbg.spread1 = template.spread1 + template_actual.spread
WHERE template_gbg.winner1 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 1;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread1 = ABS(template.spread1 - template_actual.spread)
WHERE template_gbg.winner1 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 1;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread2 = template.spread2 + template_actual.spread
WHERE template_gbg.winner2 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 2;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread2 = ABS(template.spread2 - template_actual.spread)
WHERE template_gbg.winner2 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 2;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread3 = template.spread3 + template_actual.spread
WHERE template_gbg.winner3 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 3;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread3 = ABS(template.spread3 - template_actual.spread)
WHERE template_gbg.winner3 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 3;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread4 = template.spread4 + template_actual.spread
WHERE template_gbg.winner4 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 4;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread4 = ABS(template.spread4 - template_actual.spread)
WHERE template_gbg.winner4 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 4;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread5 = template.spread5 + template_actual.spread
WHERE template_gbg.winner5 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 5;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread5 = ABS(template.spread5 - template_actual.spread)
WHERE template_gbg.winner5 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 5;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread6 = template.spread6 + template_actual.spread
WHERE template_gbg.winner6 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 6;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread6 = ABS(template.spread6 - template_actual.spread)
WHERE template_gbg.winner6 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 6;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread7 = template.spread7 + template_actual.spread
WHERE template_gbg.winner7 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 7;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread7 = ABS(template.spread7 - template_actual.spread)
WHERE template_gbg.winner7 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 7;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread8 = template.spread8 + template_actual.spread
WHERE template_gbg.winner8 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 8;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread8 = ABS(template.spread8 - template_actual.spread)
WHERE template_gbg.winner8 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 8;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread9 = template.spread9 + template_actual.spread
WHERE template_gbg.winner9 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 9;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread9 = ABS(template.spread9 - template_actual.spread)
WHERE template_gbg.winner9 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 9;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread10 = template.spread10 + template_actual.spread
WHERE template_gbg.winner10 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 10;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread10 = ABS(template.spread10 - template_actual.spread)
WHERE template_gbg.winner10 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 10;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread11 = template.spread11 + template_actual.spread
WHERE template_gbg.winner11 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 11;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread11 = ABS(template.spread11 - template_actual.spread)
WHERE template_gbg.winner11 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 11;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread12 = template.spread12 + template_actual.spread
WHERE template_gbg.winner12 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 12;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread12 = ABS(template.spread12 - template_actual.spread)
WHERE template_gbg.winner12 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 12;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread13 = template.spread13 + template_actual.spread
WHERE template_gbg.winner13 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 13;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread13 = ABS(template.spread13 - template_actual.spread)
WHERE template_gbg.winner13 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 13;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread14 = template.spread14 + template_actual.spread
WHERE template_gbg.winner14 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 14;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread14 = ABS(template.spread14 - template_actual.spread)
WHERE template_gbg.winner14 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 14;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread15 = template.spread15 + template_actual.spread
WHERE template_gbg.winner15 = 0
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 15;

UPDATE template_gbg, template, template_actual
SET template_gbg.spread15 = ABS(template.spread15 - template_actual.spread)
WHERE template_gbg.winner15 = 1
AND template_gbg.pickID = template.pickID
AND template_actual.gameID = 15;