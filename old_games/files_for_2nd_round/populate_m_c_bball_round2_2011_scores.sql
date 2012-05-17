# get the pickID and userID from the m_c_bball_round2_2011 table

INSERT INTO m_c_bball_round2_2011_scores (pickID, userID)
SELECT m_c_bball_round2_2011.pickID, m_c_bball_round2_2011.userID
FROM m_c_bball_round2_2011;

# set an initial score for all players

UPDATE m_c_bball_round2_2011_scores
SET m_c_bball_round2_2011_scores.score = 10000;

# subtract a large penalty from the scores of the players who picked the winner(s) wrong
# penalty should be 5000/(number of picks in the set)

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner1 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner2 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner3 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner4 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner5 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner6 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner7 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner8 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner9 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner10 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner11 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner12 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner13 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner14 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner15 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner16 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner17 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner18 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner19 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner20 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner21 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner22 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner23 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner24 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner25 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner26 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner27 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner28 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner29 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner30 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner31 = 0;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (156.26))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID
AND m_c_bball_round2_2011_gbg.winner32 = 0;

# subtract an additional penalty from the scores of players based on how far their predicted spread was from the actual spread

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread1 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread2 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread3 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread4 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread5 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread6 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread7 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread8 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread9 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread10 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread11 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread12 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread13 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread14 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread15 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread16 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread17 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread18 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread19 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread20 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread21 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread22 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread23 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread24 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread25 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread26 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread27 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread28 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread29 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread30 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread31 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

UPDATE m_c_bball_round2_2011_scores, m_c_bball_round2_2011_gbg
SET m_c_bball_round2_2011_scores.score = (m_c_bball_round2_2011_scores.score - (m_c_bball_round2_2011_gbg.spread32 * 1))
WHERE m_c_bball_round2_2011_scores.pickID = m_c_bball_round2_2011_gbg.pickID;

# calculate the grade based on how close their final score was to the initial score
# they can only achieve a perfect score by picking the winner and exact spread of every game

UPDATE m_c_bball_round2_2011_scores
SET m_c_bball_round2_2011_scores.grade = (m_c_bball_round2_2011_scores.score / 100);