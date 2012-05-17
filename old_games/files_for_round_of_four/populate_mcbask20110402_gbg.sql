# insert the pickID and userID from the m_c_bball_roundof4_2011 table
# v1.027 removed clause: WHERE m_c_bball_roundof4_2011_actual.gameID = 1    not sure why it was ever in there

INSERT INTO m_c_bball_roundof4_2011_gbg(pickID, userID)
SELECT m_c_bball_roundof4_2011.pickID, m_c_bball_roundof4_2011.userID
FROM m_c_bball_roundof4_2011;

# compare the predicted winners to the actual winners and set m_c_bball_roundof4_2011_gbg.winner(x) to 0 if the player picked incorrectly

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.winner1 = 0
WHERE m_c_bball_roundof4_2011.pickID = m_c_bball_roundof4_2011_gbg.pickID
AND m_c_bball_roundof4_2011.winner1 != m_c_bball_roundof4_2011_actual.winner
AND m_c_bball_roundof4_2011_actual.gameID = 1;

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.winner2 = 0
WHERE m_c_bball_roundof4_2011.pickID = m_c_bball_roundof4_2011_gbg.pickID
AND m_c_bball_roundof4_2011.winner2 != m_c_bball_roundof4_2011_actual.winner
AND m_c_bball_roundof4_2011_actual.gameID = 2;

# compare the predicted winners to the actual winners and set m_c_bball_roundof4_2011_gbg.winner(x) to 1 if the player picked correctly

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.winner1 = 1
WHERE m_c_bball_roundof4_2011.pickID = m_c_bball_roundof4_2011_gbg.pickID
AND m_c_bball_roundof4_2011.winner1 = m_c_bball_roundof4_2011_actual.winner
AND m_c_bball_roundof4_2011_actual.gameID = 1;

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.winner2 = 1
WHERE m_c_bball_roundof4_2011.pickID = m_c_bball_roundof4_2011_gbg.pickID
AND m_c_bball_roundof4_2011.winner2 = m_c_bball_roundof4_2011_actual.winner
AND m_c_bball_roundof4_2011_actual.gameID = 2;

# Compare the predicted spread to the actual spread. Add m_c_bball_roundof4_2011.spread(x) to m_c_bball_roundof4_2011_actual.spread if they picked the winner wrong. Take the absolute value of m_c_bball_roundof4_2011.spread(x) minus m_c_bball_roundof4_2011_actual.spread if they picked the winner right.

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.spread1 = m_c_bball_roundof4_2011.spread1 + m_c_bball_roundof4_2011_actual.spread
WHERE m_c_bball_roundof4_2011_gbg.winner1 = 0
AND m_c_bball_roundof4_2011_gbg.pickID = m_c_bball_roundof4_2011.pickID
AND m_c_bball_roundof4_2011_actual.gameID = 1;

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.spread1 = ABS(m_c_bball_roundof4_2011.spread1 - m_c_bball_roundof4_2011_actual.spread)
WHERE m_c_bball_roundof4_2011_gbg.winner1 = 1
AND m_c_bball_roundof4_2011_gbg.pickID = m_c_bball_roundof4_2011.pickID
AND m_c_bball_roundof4_2011_actual.gameID = 1;

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.spread2 = m_c_bball_roundof4_2011.spread2 + m_c_bball_roundof4_2011_actual.spread
WHERE m_c_bball_roundof4_2011_gbg.winner2 = 0
AND m_c_bball_roundof4_2011_gbg.pickID = m_c_bball_roundof4_2011.pickID
AND m_c_bball_roundof4_2011_actual.gameID = 2;

UPDATE m_c_bball_roundof4_2011_gbg, m_c_bball_roundof4_2011, m_c_bball_roundof4_2011_actual
SET m_c_bball_roundof4_2011_gbg.spread2 = ABS(m_c_bball_roundof4_2011.spread2 - m_c_bball_roundof4_2011_actual.spread)
WHERE m_c_bball_roundof4_2011_gbg.winner2 = 1
AND m_c_bball_roundof4_2011_gbg.pickID = m_c_bball_roundof4_2011.pickID
AND m_c_bball_roundof4_2011_actual.gameID = 2;