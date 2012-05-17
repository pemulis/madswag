# get the pickID and userID from the mpbase20110331 table

INSERT INTO mpbase20110331_scores (pickID, userID)
SELECT mpbase20110331.pickID, mpbase20110331.userID
FROM mpbase20110331;

# set an initial score for all players

UPDATE mpbase20110331_scores
SET mpbase20110331_scores.score = 10000;

# subtract a large penalty from the scores of the players who picked the winner(s) wrong
# penalty should be 5000/(number of picks in the set)

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner1 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner2 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner3 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner4 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner5 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner6 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner7 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner8 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner9 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner10 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner11 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner12 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner13 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner14 = 0;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - 333.33)
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID
AND mpbase20110331_gbg.winner15 = 0;

# subtract an additional penalty from the scores of players based on how far their predicted spread was from the actual spread

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread1 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread2 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread3 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread4 * 1))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread5 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread6 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread7 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread8 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread9 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread10 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread11 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread12 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread13 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread14 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

UPDATE mpbase20110331_scores, mpbase20110331_gbg
SET mpbase20110331_scores.score = (mpbase20110331_scores.score - (mpbase20110331_gbg.spread15 * 10))
WHERE mpbase20110331_scores.pickID = mpbase20110331_gbg.pickID;

# calculate the grade based on how close their final score was to the initial score
# they can only achieve a perfect score by picking the winner and exact spread of every game

UPDATE mpbase20110331_scores
SET mpbase20110331_scores.grade = (mpbase20110331_scores.score / 100);