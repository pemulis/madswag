# insert the pickID and userID from the mpbase20110331 table
# v1.027 removed clause: WHERE mpbase20110331_actual.gameID = 1    not sure why it was ever in there

INSERT INTO mpbase20110331_gbg(pickID, userID)
SELECT mpbase20110331.pickID, mpbase20110331.userID
FROM mpbase20110331;

# compare the predicted winners to the actual winners and set mpbase20110331_gbg.winner(x) to 0 if the player picked incorrectly

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner1 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner1 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 1;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner2 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner2 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 2;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner3 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner3 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 3;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner4 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner4 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 4;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner5 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner5 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 5;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner6 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner6 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 6;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner7 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner7 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 7;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner8 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner8 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 8;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner9 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner9 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 9;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner10 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner10 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 10;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner11 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner11 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 11;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner12 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner12 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 12;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner13 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner13 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 13;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner14 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner14 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 14;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner15 = 0
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner15 != mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 15;

# compare the predicted winners to the actual winners and set mpbase20110331_gbg.winner(x) to 1 if the player picked correctly

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner1 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner1 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 1;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner2 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner2 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 2;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner3 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner3 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 3;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner4 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner4 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 4;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner5 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner5 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 5;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner6 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner6 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 6;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner7 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner7 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 7;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner8 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner8 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 8;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner9 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner9 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 9;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner10 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner10 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 10;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner11 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner11 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 11;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner12 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner12 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 12;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner13 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner13 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 13;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner14 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner14 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 14;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.winner15 = 1
WHERE mpbase20110331.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331.winner15 = mpbase20110331_actual.winner
AND mpbase20110331_actual.gameID = 15;

# Compare the predicted spread to the actual spread. Add mpbase20110331.spread(x) to mpbase20110331_actual.spread if they picked the winner wrong. Take the absolute value of mpbase20110331.spread(x) minus mpbase20110331_actual.spread if they picked the winner right.

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread1 = mpbase20110331.spread1 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner1 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 1;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread1 = ABS(mpbase20110331.spread1 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner1 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 1;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread2 = mpbase20110331.spread2 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner2 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 2;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread2 = ABS(mpbase20110331.spread2 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner2 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 2;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread3 = mpbase20110331.spread3 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner3 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 3;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread3 = ABS(mpbase20110331.spread3 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner3 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 3;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread4 = mpbase20110331.spread4 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner4 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 4;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread4 = ABS(mpbase20110331.spread4 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner4 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 4;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread5 = mpbase20110331.spread5 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner5 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 5;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread5 = ABS(mpbase20110331.spread5 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner5 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 5;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread6 = mpbase20110331.spread6 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner6 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 6;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread6 = ABS(mpbase20110331.spread6 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner6 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 6;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread7 = mpbase20110331.spread7 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner7 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 7;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread7 = ABS(mpbase20110331.spread7 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner7 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 7;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread8 = mpbase20110331.spread8 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner8 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 8;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread8 = ABS(mpbase20110331.spread8 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner8 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 8;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread9 = mpbase20110331.spread9 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner9 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 9;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread9 = ABS(mpbase20110331.spread9 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner9 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 9;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread10 = mpbase20110331.spread10 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner10 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 10;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread10 = ABS(mpbase20110331.spread10 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner10 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 10;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread11 = mpbase20110331.spread11 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner11 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 11;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread11 = ABS(mpbase20110331.spread11 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner11 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 11;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread12 = mpbase20110331.spread12 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner12 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 12;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread12 = ABS(mpbase20110331.spread12 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner12 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 12;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread13 = mpbase20110331.spread13 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner13 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 13;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread13 = ABS(mpbase20110331.spread13 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner13 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 13;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread14 = mpbase20110331.spread14 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner14 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 14;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread14 = ABS(mpbase20110331.spread14 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner14 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 14;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread15 = mpbase20110331.spread15 + mpbase20110331_actual.spread
WHERE mpbase20110331_gbg.winner15 = 0
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 15;

UPDATE mpbase20110331_gbg, mpbase20110331, mpbase20110331_actual
SET mpbase20110331_gbg.spread15 = ABS(mpbase20110331.spread15 - mpbase20110331_actual.spread)
WHERE mpbase20110331_gbg.winner15 = 1
AND mpbase20110331_gbg.pickID = mpbase20110331.pickID
AND mpbase20110331_actual.gameID = 15;