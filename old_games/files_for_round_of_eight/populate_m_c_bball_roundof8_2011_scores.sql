# get the pickID and userID from the m_c_bball_roundof8_2011 table

INSERT INTO m_c_bball_roundof8_2011_scores (pickID, userID)
SELECT m_c_bball_roundof8_2011.pickID, m_c_bball_roundof8_2011.userID
FROM m_c_bball_roundof8_2011;

# set an initial score for all players

UPDATE m_c_bball_roundof8_2011_scores
SET m_c_bball_roundof8_2011_scores.score = 10000;

# subtract a large penalty from the scores of the players who picked the winner(s) wrong
# penalty should be 5000/(number of picks in the set)

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - 1250)
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID
AND m_c_bball_roundof8_2011_gbg.winner1 = 0;

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - 1250)
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID
AND m_c_bball_roundof8_2011_gbg.winner2 = 0;

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - 1250)
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID
AND m_c_bball_roundof8_2011_gbg.winner3 = 0;

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - 1250)
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID
AND m_c_bball_roundof8_2011_gbg.winner4 = 0;

# subtract an additional penalty from the scores of players based on how far their predicted spread was from the actual spread

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - (m_c_bball_roundof8_2011_gbg.spread1 * 1))
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID;

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - (m_c_bball_roundof8_2011_gbg.spread2 * 1))
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID;

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - (m_c_bball_roundof8_2011_gbg.spread3 * 1))
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID;

UPDATE m_c_bball_roundof8_2011_scores, m_c_bball_roundof8_2011_gbg
SET m_c_bball_roundof8_2011_scores.score = (m_c_bball_roundof8_2011_scores.score - (m_c_bball_roundof8_2011_gbg.spread4 * 1))
WHERE m_c_bball_roundof8_2011_scores.pickID = m_c_bball_roundof8_2011_gbg.pickID;

# calculate the grade based on how close their final score was to the initial score
# they can only achieve a perfect score by picking the winner and exact spread of every game

UPDATE m_c_bball_roundof8_2011_scores
SET m_c_bball_roundof8_2011_scores.grade = (m_c_bball_roundof8_2011_scores.score / 100);